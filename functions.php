<?php
/**
 * Theme functions and definitions for the Shanti WordPress theme.
 *
 * @package Shanti
 * @since   0.1.0
 * @author  Themeist
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

		// Add theme supports.
		add_theme_support( 'wp-block-styles' );
		add_theme_support( 'responsive-embeds' );
		add_theme_support( 'custom-units' );
		add_theme_support( 'appearance-tools' );
		add_theme_support( 'editor-styles' );

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );
	}
}
add_action( 'after_setup_theme', 'shanti_setup' );


if ( ! function_exists( 'shanti_enqueue_styles' ) ) {
	/**
	 * Enqueue front-end styles.
	 *
	 * @since 0.1.0
	 *
	 * @return void
	 */
	function shanti_enqueue_styles() {
		wp_enqueue_style(
			'shanti-style',
			get_theme_file_uri( 'style.css' ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
	}
}
add_action( 'wp_enqueue_scripts', 'shanti_enqueue_styles' );


if ( ! function_exists( 'shanti_editor_style' ) ) {
	/**
	 * Enqueue editor styles.
	 *
	 * @since 0.1.0
	 *
	 * @return void
	 */
	function shanti_editor_style() {
		add_editor_style( get_theme_file_uri( 'style.css' ) );
	}
}
add_action( 'after_setup_theme', 'shanti_editor_style' );


if ( ! function_exists( 'shanti_enqueue_editor_font_styles' ) ) {
	/**
	 * Enqueue inline font styles in the editor, if defined.
	 *
	 * @since 0.1.0
	 *
	 * @return void
	 */
	function shanti_enqueue_editor_font_styles() {
		if ( function_exists( 'shanti_font_styles' ) ) {
			wp_add_inline_style( 'wp-block-library', shanti_font_styles() );
		}
	}
}
add_action( 'enqueue_block_editor_assets', 'shanti_enqueue_editor_font_styles' );


if ( ! function_exists( 'shanti_restore_customizer' ) ) {
	/**
	 * Restore Customizer support.
	 *
	 * Some features (like site identity) still rely on the Customizer.
	 *
	 * @since 0.1.0
	 *
	 * @return void
	 */
	function shanti_restore_customizer() {
		// No-op callback to ensure Customizer loads.
	}
}
add_action( 'customize_register', 'shanti_restore_customizer' );


/**
 * Include theme-specific block styles.
 */
require get_template_directory() . '/inc/block-styles.php';

/**
 * Include theme-specific block patterns.
 */
require get_template_directory() . '/inc/block-patterns.php';
