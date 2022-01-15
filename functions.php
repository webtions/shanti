<?php
/**
 * Stretch functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */

if ( ! function_exists( 'shanti_setup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Stretch 0.0.1
	 *
	 * @return void
	 */
	function shanti_setup() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Register Navigation menus.
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary Menu', 'shanti' ),
			)
		);
	}

endif;
add_action( 'after_setup_theme', 'shanti_setup' );

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'shanti_scripts' );
function shanti_scripts() {
	// Enqueue fonts stylesheet.
	wp_enqueue_style( 'shanti-fonts', shanti_fonts_url(), array(), wp_get_theme()->get( 'Version' ) );
	// Theme stylesheet.
	wp_enqueue_style( 'shanti-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}

/**
 * Get Google fonts and save locally with WPTT Webfont Loader.
 */
function shanti_fonts_url() {
	$font_families = array(
		'Montserrat:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600'
	);

	$fonts_url = add_query_arg( array(
		'family' => implode( '&family=', $font_families ),
		'display' => 'swap',
	), 'https://fonts.googleapis.com/css2' );

	require_once get_theme_file_path( 'inc/wptt-webfont-loader.php' );

	return wptt_get_webfont_url( esc_url_raw( $fonts_url ) );
}
