<?php
/**
 * Stretch functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 */


if ( ! function_exists( 'stretch_lite_theme_setup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Stretch 0.0.1
	 *
	 * @return void
	 */
	function stretch_lite_theme_setup() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Register Navigation menus.
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary Menu', 'stretch-lite' ),
			)
		);
	}

endif;

add_action( 'after_setup_theme', 'stretch_lite_theme_setup' );


/**
 * Enqueue scripts and styles.
 */
function stretch_lite_scripts() {

	// Theme stylesheet.
	wp_enqueue_style( 'stretch-lite-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'stretch_lite_scripts' );
