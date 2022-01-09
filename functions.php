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


// Enqueue style sheet.
add_action( 'wp_enqueue_scripts', 'shanti_enqueue_style_sheet' );
function shanti_enqueue_style_sheet() {

	wp_enqueue_style( 'shanti', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );

}

// Enqueue fonts.
add_action( 'wp_enqueue_scripts', 'shanti_enqueue_fonts' );
function shanti_enqueue_fonts() {

	wp_enqueue_style( 'shanti-fonts', shanti_fonts_url(), array(), null );

}


// Define fonts.
function shanti_fonts_url() {

	// Allow child themes to disable to the default Frost fonts.
	$dequeue_fonts = apply_filters( 'shanti_fonts_url', false );

	if ( $dequeue_fonts ) {
		return '';
	}

	$fonts = [
		'family=Montserrat:ital,wght@0,400;0,500;0,600;1,400;1,500;1,600'
	];

	// Make a single request for all Google Fonts.
	return esc_url_raw( 'https://fonts.googleapis.com/css2?' . implode( '&', array_unique( $fonts ) ) . '&display=swap' );
}
