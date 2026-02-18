<?php
/**
 * Title: Sidebar
 * Description: Default sidebar content for page templates with sidebar.
 * Slug: shanti/hidden-sidebar
 * Categories: text
 * Keywords: sidebar, contact
 * Block Types: core/template-part/sidebar
 * Post Types: wp_template
 * Viewport Width: 1600
 * Inserter: no
 *
 * @package Shanti
 */

?>
<!-- wp:group {"metadata":{"name":"Sidebar"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

	<!-- wp:heading {"fontSize":"large"} -->
	<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html_x( 'Sample Content', 'Sidebar heading', 'shanti' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size"><?php esc_html_e( 'Welcome to my corner of the web. I write about my daily observations, personal growth, and the things that inspire me to keep creating.', 'shanti' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:separator {"className":"is-style-wavy","style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}}} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wavy" style="margin-top:var(--wp--preset--spacing--50);margin-bottom:var(--wp--preset--spacing--50)"/>
	<!-- /wp:separator -->

	<!-- wp:heading {"level":3,"fontSize":"large"} -->
	<h3 class="wp-block-heading has-large-font-size"><?php echo esc_html_x( 'Stay in Touch', 'Sidebar subheading', 'shanti' ); ?></h3>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size"><?php esc_html_e( 'If you enjoy my writing, feel free to reach out via email or subscribe to the monthly newsletter.', 'shanti' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph {"fontSize":"x-small"} -->
	<p class="has-x-small-font-size"><strong><?php esc_html_e( 'Contact:', 'shanti' ); ?></strong> hello@example.com</p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
