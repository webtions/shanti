/**
 * Theme tooling adapted from WordPress community-themes (theme-utils.mjs).
 *
 * @see https://github.com/WordPress/community-themes/blob/trunk/theme-utils.mjs
 */

import { spawn } from 'child_process';
import fs from 'fs';
import path from 'path';
import process from 'process';
import { fileURLToPath } from 'url';
import inquirer from 'inquirer';
import { RewritingStream } from 'parse5-html-rewriting-stream';
import { table } from 'table';
import progressbar from 'string-progressbar';
import Ajv from 'ajv';
import AjvDraft04 from 'ajv-draft-04';

const __dirname = path.dirname( fileURLToPath( import.meta.url ) );
const THEME_ROOT = __dirname;

const isWin = process.platform === 'win32';

const commands = {
	'validate-schema': {
		helpText: 'Validates theme.json and related JSON against the JSON Schema. With no paths, discovers theme.json, styles/**/*.json, and assets/fonts/*.json.',
		run: ( args ) => validateSchema( args?.slice( 1 ) ),
	},
	'escape-patterns': {
		helpText: 'Escapes block patterns (staged/unstaged changes). Use --all for every patterns/*.php. Pass specific paths to only those files. Use --yes to skip the theme slug prompt (uses Text Domain from style.css).',
		run: ( args ) => escapePatterns( args?.slice( 1 ) ),
	},
	help: {
		helpText: 'Displays the main help message.',
		run: ( args ) => showHelp( args?.[ 1 ] ),
	},
};

( async function start() {
	const args = process.argv.slice( 2 );
	const command = args?.[ 0 ];

	if ( ! commands[ command ] ) {
		showHelp();
		process.exit( 1 );
	}

	await commands[ command ].run( args );
} )();

function showHelp( command = '' ) {
	if ( ! command || ! Object.prototype.hasOwnProperty.call( commands, command ) ) {
		console.log( `
node theme-utils.mjs [command]

Available commands:
_(theme-utils.mjs help [command] for more details)_

\t${ Object.keys( commands ).join( '\n\t' ) }
	` );
		return;
	}

	const { helpText, additionalArgs } = commands[ command ];
	console.log( `
${ command } ${ additionalArgs ?? '' }

${ helpText }
	` );
}

export async function executeCommand( command, logResponse ) {
	const timeout = 2 * 60 * 1000;

	return new Promise( ( resolve, reject ) => {
		let child;
		let response = '';
		let errResponse = '';

		if ( isWin ) {
			child = spawn( 'cmd.exe', [ '/s', '/c', '"' + command + '"' ], {
				windowsVerbatimArguments: true,
				stdio: [ process.stdin, 'pipe', 'pipe' ],
				detached: true,
			} );
		} else {
			child = spawn( process.env.SHELL, [ '-c', command ], {
				stdio: [ process.stdin, 'pipe', 'pipe' ],
				detached: true,
			} );
		}

		const timer = setTimeout( () => {
			try {
				process.kill( -child.pid, 'SIGKILL' );
			} catch ( e ) {
				console.log( 'Cannot kill process' );
			}
		}, timeout );

		child.stdout.on( 'data', ( data ) => {
			response += data;
			if ( logResponse ) {
				console.log( data.toString() );
			}
		} );

		child.stderr.on( 'data', ( data ) => {
			errResponse += data;
			if ( logResponse ) {
				console.log( data.toString() );
			}
		} );

		child.on( 'exit', ( code ) => {
			clearTimeout( timer );
			if ( code !== 0 ) {
				reject( errResponse.trim() );
				return;
			}
			resolve( response.trim() );
		} );
	} );
}

/**
 * Match pattern PHP files in this repo or in community-themes-style monorepos (theme-slug/patterns/...).
 *
 * @param {string} file Relative path using forward slashes.
 * @return {boolean}
 */
function isPatternPhpPath( file ) {
	if ( ! file || ! file.endsWith( '.php' ) ) {
		return false;
	}
	const n = file.replace( /\\/g, '/' );
	return ( /(^|\/)patterns\/[^/]+\.php$/ ).test( n );
}

function readTextDomainFromStyleCss( root ) {
	const stylePath = path.join( root, 'style.css' );
	if ( ! fs.existsSync( stylePath ) ) {
		return '';
	}
	const css = fs.readFileSync( stylePath, 'utf8' );
	const m = css.match( /Text Domain:\s*([^\s\r\n]+)/i );
	return m ? m[ 1 ].trim() : '';
}

function listAllPatternPhpFiles( root ) {
	const dir = path.join( root, 'patterns' );
	if ( ! fs.existsSync( dir ) ) {
		return [];
	}
	return fs
		.readdirSync( dir )
		.filter( ( f ) => f.endsWith( '.php' ) )
		.map( ( f ) => path.join( 'patterns', f ).split( path.sep ).join( '/' ) );
}

function parseEscapeArgs( argv ) {
	let all = false;
	let yes = false;
	const positional = [];
	for ( const a of argv ) {
		if ( a === '--all' ) {
			all = true;
		} else if ( a === '--yes' || a === '-y' ) {
			yes = true;
		} else if ( a.startsWith( '-' ) ) {
			console.warn( `Unknown flag: ${ a }` );
		} else {
			positional.push( a );
		}
	}
	return { all, yes, positional };
}

async function escapePatterns( argv = [] ) {
	const { all, yes, positional } = parseEscapeArgs( argv );
	const defaultSlug = readTextDomainFromStyleCss( THEME_ROOT ) || 'shanti';

	let patternRelPaths = [];

	if ( positional.length ) {
		patternRelPaths = positional
			.map( ( f ) => f.replace( /\\/g, '/' ) )
			.filter( isPatternPhpPath );
		if ( positional.length && ! patternRelPaths.length ) {
			console.error(
				'None of the given paths look like pattern PHP files (expect …/patterns/*.php).'
			);
			process.exit( 1 );
		}
	} else if ( all ) {
		patternRelPaths = listAllPatternPhpFiles( THEME_ROOT );
	} else {
		let staged = [];
		let unstaged = [];
		try {
			staged = ( await executeCommand( `git -C "${ THEME_ROOT }" diff --cached --name-only` ) )
				.split( '\n' )
				.filter( Boolean );
			unstaged = ( await executeCommand(
				`git -C "${ THEME_ROOT }" ls-files -m -o --exclude-standard`
			) )
				.split( '\n' )
				.filter( Boolean );
		} catch ( e ) {
			console.error(
				'Git listing failed (are you in a git repo?). Use --all to escape every patterns/*.php, or run from the theme directory.\n',
				e.message || e
			);
			process.exit( 1 );
		}

		patternRelPaths = [ ...new Set( [ ...staged, ...unstaged ] ) ].filter( isPatternPhpPath );
	}

	if ( ! patternRelPaths.length ) {
		console.log(
			'No pattern PHP files selected. Either change/stage pattern files, or run with --all to process every patterns/*.php.'
		);
		return;
	}

	const resolvedFiles = patternRelPaths.map( ( f ) => path.join( THEME_ROOT, f ) );
	console.log( getPatternTable( defaultSlug, patternRelPaths ) );

	let themeSlug = defaultSlug;
	if ( ! yes ) {
		const prompt = await inquirer.prompt( [
			{
				type: 'input',
				message: 'Verify the theme slug (text domain)',
				name: 'themeSlug',
				default: defaultSlug,
			},
		] );
		if ( ! prompt.themeSlug ) {
			return;
		}
		themeSlug = prompt.themeSlug;
	}

	for ( const file of resolvedFiles ) {
		const rewriter = getReWriter( themeSlug );
		const tmpFile = `${ file }-tmp`;
		const readStream = fs.createReadStream( file, { encoding: 'UTF-8' } );
		const writeStream = fs.createWriteStream( tmpFile, { encoding: 'UTF-8' } );
		writeStream.on( 'finish', () => {
			fs.renameSync( tmpFile, file );
		} );

		readStream.pipe( rewriter ).pipe( writeStream );
	}

	// Helper functions (scoped like upstream).
	function getReWriter( slug ) {
		const rewriter = new RewritingStream();

		rewriter.on( 'text', ( _, raw ) => {
			rewriter.emitRaw( escapeText( raw, slug ) );
		} );

		rewriter.on( 'startTag', ( startTag ) => {
			if ( startTag.tagName === 'img' ) {
				const attrs = startTag.attrs.filter( ( attr ) => [ 'src', 'alt' ].includes( attr.name ) );
				attrs.forEach( ( attr ) => {
					if ( attr.name === 'src' ) {
						attr.value = escapeImagePath( attr.value );
					} else if ( attr.name === 'alt' ) {
						attr.value = escapeText( attr.value, slug, true );
					}
				} );
			}

			rewriter.emitStartTag( startTag );
		} );

		rewriter.on( 'comment', ( comment, rawHtml ) => {
			if ( comment.text.startsWith( '?php' ) ) {
				rewriter.emitRaw( rawHtml );
				return;
			}
			const block = escapeBlockAttrs( comment.text, slug );
			rewriter.emitComment( { ...comment, text: block } );
		} );

		return rewriter;
	}

	function escapeBlockAttrs( block, slug ) {
		const allowedAttrs = [
			{ name: 'label' },
			{ name: 'placeholder', isAttr: true },
			{ name: 'buttonText' },
			{ name: 'content' },
		];
		const start = block.indexOf( '{' );
		const end = block.lastIndexOf( '}' );

		if ( start === -1 || end === -1 || end <= start ) {
			return block;
		}

		const configPrefix = block.slice( 0, start );
		const config = block.slice( start, end + 1 );
		const configSuffix = block.slice( end + 1 );

		try {
			const configJson = JSON.parse( config );
			allowedAttrs.forEach( ( attr ) => {
				if ( ! configJson[ attr.name ] ) {
					return;
				}
				configJson[ attr.name ] = escapeText(
					configJson[ attr.name ],
					slug,
					attr.isAttr
				);
			} );
			return configPrefix + JSON.stringify( configJson ) + configSuffix;
		} catch {
			return block;
		}
	}

	function escapeText( text, slug, isAttr = false ) {
		const trimmedText = text && text.trim();
		if ( ! slug || ! trimmedText || trimmedText.startsWith( '<?php' ) ) {
			return text;
		}
		const escFunction = isAttr ? 'esc_attr__' : 'esc_html__';
		const spaceChar = text.startsWith( ' ' ) ? '&nbsp;' : '';
		const resultText = String( text ).replaceAll( "'", "\\'" ).trim();
		return `${ spaceChar }<?php echo ${ escFunction }( '${ resultText }', '${ slug }' ); ?>`;
	}

	function escapeImagePath( src ) {
		if ( ! src || src.trim().startsWith( '<?php' ) ) {
			return src;
		}

		const assetsDir = 'assets';
		const parts = src.split( '/' );
		const idx = parts.indexOf( assetsDir );
		if ( idx === -1 ) {
			return src;
		}
		const resultSrc = parts.slice( idx ).join( '/' );
		return `<?php echo esc_url( get_template_directory_uri() ); ?>/${ resultSrc }`;
	}

	function getPatternTable( slug, patterns ) {
		const tableConfig = {
			columnDefault: {
				width: 40,
			},
			header: {
				alignment: 'center',
				content: `THEME: ${ slug }\n\nFollowing patterns may get updated with escaped strings and/or image paths`,
			},
		};

		return table( patterns.map( ( p ) => [ p ] ), tableConfig );
	}
}

function walkJsonFilesRecursive( dir, acc ) {
	if ( ! fs.existsSync( dir ) ) {
		return;
	}
	const entries = fs.readdirSync( dir, { withFileTypes: true } );
	for ( const ent of entries ) {
		const full = path.join( dir, ent.name );
		if ( ent.isDirectory() ) {
			walkJsonFilesRecursive( full, acc );
		} else if ( ent.name.endsWith( '.json' ) ) {
			acc.push( full );
		}
	}
}

function discoverSchemaJsonFiles( root ) {
	const files = [];
	const themeJson = path.join( root, 'theme.json' );
	if ( fs.existsSync( themeJson ) ) {
		files.push( themeJson );
	}
	walkJsonFilesRecursive( path.join( root, 'styles' ), files );
	const fontsDir = path.join( root, 'assets', 'fonts' );
	if ( fs.existsSync( fontsDir ) ) {
		for ( const name of fs.readdirSync( fontsDir ) ) {
			if ( name.endsWith( '.json' ) ) {
				files.push( path.join( fontsDir, name ) );
			}
		}
	}
	return files;
}

async function validateSchema( files ) {
	let list = ( files || [] ).filter( Boolean );
	if ( ! list.length ) {
		list = discoverSchemaJsonFiles( THEME_ROOT );
	}

	if ( ! list.length ) {
		console.error( 'No JSON files found to validate.' );
		process.exit( 1 );
	}

	function readJson( file ) {
		return fs.promises.readFile( file, 'utf-8' ).then( JSON.parse );
	}
	async function loadSchema( uri, dirname = '' ) {
		if ( ! uri ) {
			return {
				$schema: 'http://json-schema.org/draft-07/schema#',
				type: 'object',
				required: [ '$schema' ],
			};
		}
		if ( ! URL.canParse( uri ) ) {
			return readJson( path.resolve( dirname, uri ) );
		}
		const url = new URL( uri );
		if ( url.protocol === 'http:' || url.protocol === 'https:' ) {
			return fetch( url ).then( ( res ) => res.json() );
		}
		if ( url.protocol === 'file:' ) {
			return readJson( path.resolve( dirname, url.href.slice( 7 ) ) );
		}
		throw new Error( `Unsupported schema protocol: ${ url.protocol }` );
	}
	const ajvOptions = {
		allowMatchingProperties: true,
		allErrors: true,
		loadSchema,
	};
	const ajv = {
		'http://json-schema.org/draft-07/schema#': new Ajv( ajvOptions ),
		'http://json-schema.org/draft-04/schema#': new AjvDraft04( ajvOptions ),
	};
	const errors = [];
	let progress = progressbar.filledBar( list.length, 0 )[ 0 ];
	process.stdout.write( `${ progress } 0/${ list.length }`, 'utf-8' );
	for ( const [ i, file ] of list.entries() ) {
		let schemaUri;
		try {
			const data = await readJson( file );
			schemaUri = data.$schema;
			const schema = await loadSchema( schemaUri, path.dirname( file ) );
			const validate = await ajv[ schema.$schema ].compileAsync( schema );
			if ( ! validate( data ) ) {
				throw validate.errors;
			}
		} catch ( error ) {
			errors.push( { file, schema: schemaUri, error } );
		}
		progress = progressbar.filledBar( list.length, i + 1 )[ 0 ];
		process.stdout.write( `\r${ progress } ${ i + 1 }/${ list.length }`, 'utf-8' );
	}
	console.log();
	if ( errors.length ) {
		console.dir( errors, { depth: null } );
		process.exit( 1 );
	}
}
