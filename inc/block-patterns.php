<?php
/**
 * Shanti: Block Patterns
 *
 * @since Shanti 0.1
 */

/**
 * Registers block patterns and categories.
 *
 * @since Shanti 0.1
 */
function shanti_register_block_patterns() {
	$block_pattern_categories = array(
		'shanti-footers' => array( 'label' => __( 'Shanti Footers', 'shanti' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since Shanti 0.1
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */
	$block_pattern_categories = apply_filters( 'shanti_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}

	$block_patterns = array(
		'footer-default',
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Shanti 0.1
	 *
	 * @param $block_patterns array List of block patterns by name.
	 */
	$block_patterns = apply_filters( 'shanti_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		register_block_pattern(
			'shanti/' . $block_pattern,
			include __DIR__ . '/patterns/' . $block_pattern . '.php'
		);
	}
}
add_action( 'init', 'shanti_register_block_patterns', 9 );
