<?php
/**
 * This file adds functions to the Shanti WordPress theme.
 *
 * @package Shanti
 * @author  Shanti
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

		// Register Navigation menus.
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary Menu', 'shanti' ),
			)
		);

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );
	}
}
add_action( 'after_setup_theme', 'shanti_setup' );


/**
 * Restores the Customizer since we still rely on it.
 *
 * @since 0.1.0
 */
function shanti_restore_customizer() {
	// There's no need to return anything.
	// The empty callback will do the trick.
}
add_action( 'customize_register', 'shanti_restore_customizer' );


/**
 * Enqueue styles.
 *
 * @since 0.1.0
 */
function shanti_styles() {

	$version_string = wp_get_theme()->get( 'Version' );

	wp_register_style( 'shanti-style', get_template_directory_uri() . '/style.css', array(), $version_string );

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
 * Require theme-specific block patterns.
 *
 * @since 0.1.0
 */
require get_template_directory() . '/inc/block-patterns.php';

/**
 * Require theme-specific block styles.
 *
 * @since 0.1.0
 */
require get_template_directory() . '/inc/block-styles.php';
