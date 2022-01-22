<?php
/**
 * Shanti functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */


if ( ! function_exists( 'shanti_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since 0.1.0
	 *
	 * @return void
	 */
	function shanti_setup() {

		// Make theme available for translation.
		load_theme_textdomain( 'shanti', get_template_directory() . '/languages' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}
}
add_action( 'after_setup_theme', 'shanti_setup' );


/**
 * Enqueue styles.
 *
 * @since 0.1.0
 */
function shanti_styles() {

	$theme_version  = wp_get_theme()->get( 'Version' );
	$version_string = is_string( $theme_version ) ? $theme_version : false;

	wp_register_style( 'shanti-style', get_template_directory_uri() . '/style.css', array(), $version_string );

	// Add styles inline.
	wp_add_inline_style( 'shanti-style', shanti_font_styles() );

	// Enqueue theme stylesheet.
	wp_enqueue_style( 'shanti-style' );

}
add_action( 'wp_enqueue_scripts', 'shanti_styles' );


/**
 * Enqueue editor styles.
 *
 * @since 0.1.0
 */
function shanti_editor_styles() {

	// Add styles inline.
	wp_add_inline_style( 'wp-block-library', shanti_font_styles() );

}
add_action( 'admin_init', 'shanti_editor_styles' );


/**
 * Get Google fonts and save locally with WPTT Webfont Loader.
 */
function shanti_font_styles() {
	$font_families = array(
		'Montserrat:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600',
	);

	$fonts_url = add_query_arg(
		array(
			'family'  => implode( '&family=', $font_families ),
			'display' => 'swap',
		),
		'https://fonts.googleapis.com/css2'
	);

	include_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );

	return wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
}

// Add block patterns.
require get_template_directory() . '/inc/block-patterns.php';


