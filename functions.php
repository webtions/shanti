<?php
/**
 * Theme functions for the Shanti WordPress theme.
 *
 * @package Shanti
 * @author  Harish Chouhan
 * @license GNU General Public License v2 or later
 * @link    https://themeist.com/themes/wordpress/shanti/
 */

// Set up theme defaults and register support.
if ( ! function_exists( 'shanti_setup' ) ) {
	/**
	 * Set up theme defaults and register support for various WordPress features.
	 */
	function shanti_setup() {

		// Remove core block patterns.
		remove_theme_support( 'core-block-patterns' );

		// Enqueue editor styles and fonts.
		add_editor_style( 'style.css' );
	}
}
add_action( 'after_setup_theme', 'shanti_setup' );

// Enqueue front-end stylesheet.
if ( ! function_exists( 'shanti_enqueue_styles' ) ) {
	/**
	 * Enqueue front-end stylesheet.
	 */
	function shanti_enqueue_styles() {
		wp_enqueue_style( 'shanti-style', get_theme_file_uri( 'style.css' ), array(), wp_get_theme()->get( 'Version' ) );
	}
}
add_action( 'wp_enqueue_scripts', 'shanti_enqueue_styles' );

// Register block pattern categories.
if ( ! function_exists( 'shanti_register_block_pattern_categories' ) ) {
	/**
	 * Register block pattern categories.
	 */
	function shanti_register_block_pattern_categories() {
		register_block_pattern_category( 'shanti-posts', array( 'label' => __( 'Shanti Posts', 'shanti' ) ) );
		register_block_pattern_category( 'shanti-page', array( 'label' => __( 'Shanti Page', 'shanti' ) ) );
		register_block_pattern_category( 'shanti-footer', array( 'label' => __( 'Shanti Footer', 'shanti' ) ) );
		register_block_pattern_category( 'shanti-general', array( 'label' => __( 'Shanti General', 'shanti' ) ) );
		register_block_pattern_category( 'shanti-hero', array( 'label' => __( 'Shanti Hero', 'shanti' ) ) );
		register_block_pattern_category( 'shanti-header', array( 'label' => __( 'Shanti Header', 'shanti' ) ) );
	}
}
add_action( 'init', 'shanti_register_block_pattern_categories' );

// Register block styles.
if ( ! function_exists( 'shanti_register_block_styles' ) ) {
	/**
	 * Register block styles.
	 */
	function shanti_register_block_styles() {

		$block_styles = array(
			'core/cover'         => array(
				'fullscreen' => __( 'FullScreen', 'shanti' ),
			),
			'core/template-part' => array(
				'transparent' => __( 'Transparent', 'shanti' ),
			),
			'core/button'        => array(
				'ghost' => __( 'Ghost', 'shanti' ),
			),
		);

		foreach ( $block_styles as $block => $styles ) {
			foreach ( $styles as $style_name => $style_label ) {
				register_block_style(
					$block,
					array(
						'name'  => $style_name,
						'label' => $style_label,
					)
				);
			}
		}
	}
}
add_action( 'init', 'shanti_register_block_styles' );


// Add Appearance > Recommended Plugins menu item.
if ( ! function_exists( 'shanti_add_theme_info_page' ) ) {
	/**
	 * Register the Recommended Plugins submenu under Appearance.
	 */
	function shanti_add_theme_info_page() {
		add_theme_page(
			__( 'Recommended Plugins', 'shanti' ),
			__( 'Recommended Plugins', 'shanti' ),
			'manage_options',
			'shanti-info',
			'shanti_theme_info_page'
		);
	}
}
add_action( 'admin_menu', 'shanti_add_theme_info_page' );

// Enqueue assets and load theme info page content.
if ( ! function_exists( 'shanti_enqueue_theme_info_assets' ) ) {
	/**
	 * Enqueue styles/scripts and load theme-info.php only on the Recommended Plugins page.
	 *
	 * @param string $hook The current admin page hook.
	 */
	function shanti_enqueue_theme_info_assets( $hook ) {
		if ( 'appearance_page_shanti-info' !== $hook ) {
			return;
		}
		wp_enqueue_style( 'plugin-install' );
		require_once get_theme_file_path( 'includes/theme-info.php' );
	}
}
add_action( 'admin_enqueue_scripts', 'shanti_enqueue_theme_info_assets' );

// Default featured image for posts when none set.
if ( ! function_exists( 'shanti_default_featured_image' ) ) {
	/**
	 * Provide a default featured image for posts when none is set.
	 *
	 * @param string       $html              Post thumbnail HTML.
	 * @param int          $post_id           Post ID.
	 * @param int          $post_thumbnail_id Post thumbnail ID.
	 * @param string|array $size              Thumbnail size.
	 * @param string|array $attr              Attributes.
	 * @return string Filtered HTML.
	 */
	function shanti_default_featured_image( $html, $post_id, $post_thumbnail_id, $size, $attr ) {
		if ( empty( $html ) && 'post' === get_post_type( $post_id ) ) {
			$default_image = get_template_directory_uri() . '/assets/images/default-thumbnail.svg';
			$html          = sprintf(
				'<figure class="wp-block-post-featured-image"><img src="%s" alt="%s" class="wp-post-image" /></figure>',
				esc_url( $default_image ),
				esc_attr( get_the_title( $post_id ) )
			);
		}
		return $html;
	}
}
add_filter( 'post_thumbnail_html', 'shanti_default_featured_image', 10, 5 );

// Hide Share Post pattern when social sharing block not registered.
if ( ! function_exists( 'shanti_hide_share_post_pattern_without_plugin' ) ) {
	/**
	 * Hide the Share Post pattern when the Outermost Social Sharing block is not registered.
	 *
	 * @param string $block_content Block content.
	 * @param array  $block         Block name and attributes.
	 * @return string Block content or empty string.
	 */
	function shanti_hide_share_post_pattern_without_plugin( $block_content, $block ) {
		if ( isset( $block['blockName'] ) && 'core/pattern' === $block['blockName']
			&& isset( $block['attrs']['slug'] ) && 'shanti/share-post' === $block['attrs']['slug'] ) {

			$registry = \WP_Block_Type_Registry::get_instance();
			if ( ! $registry->is_registered( 'outermost/social-sharing' ) ) {
				return '';
			}
		}
		return $block_content;
	}
}
add_filter( 'render_block', 'shanti_hide_share_post_pattern_without_plugin', 10, 2 );
