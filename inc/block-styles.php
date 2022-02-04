<?php
/**
 * This file adds block styles to the Shanti theme for WordPress.
 *
 * @package Shanti
 * @author  Themeist
 * @license GNU General Public License v3 or later
 * @link    https://shanti.themeist.com/
 */

/**
 * Register block styles.
 *
 * @since 0.1.0
 */
function shanti_register_block_styles() {

	$block_styles = array(
		'core/group' => array(
			'full-height' => __( 'Full height', 'shanti' ),
		),
		'core/cover' => array(
			'full-height' => __( 'Full height', 'shanti' ),
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
add_action( 'init', 'shanti_register_block_styles' );
