<?php
/**
 * Title: Header (Top bar)
 * Description: Header with a top bar and nav.
 * Slug: shanti/header-top-bar
 * Categories: header
 * Keywords: header, nav, links, top bar
 * Block Types: core/template-part/header
 * Post Types: wp_template
 * Viewport Width: 1600
 * Inserter: true
 *
 * @package Shanti
 */

?>

<!-- wp:group {"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull">
	<!-- wp:group {"align":"full","backgroundColor":"primary","layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-group alignfull has-primary-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">
		<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
			<p class="has-text-align-center has-small-font-size" style="font-style:normal;font-weight:500"><?php echo esc_html__( 'A quiet corner for words and ideas.', 'shanti' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"align":"full","layout":{"type":"default"},"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--40)","bottom":"var(--wp--preset--spacing--80)"}}}} -->
	<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--80)">

		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"align":"wide","className":"is-layout-flex","layout":{"type":"flex","justifyContent":"space-between","orientation":"horizontal"}} -->
			<div class="wp-block-group alignwide is-layout-flex">

			<!-- wp:group {"className":"is-layout-flex","layout":{"type":"flex"}} -->
			<div class="wp-block-group is-layout-flex">
				<!-- wp:site-logo /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:navigation {"icon":"menu","layout":{"type":"flex","justifyContent":"left"}} -->
			<!-- wp:navigation-link {"label":"About","url":"#","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"Blog","url":"#","kind":"custom"} /-->
			<!-- wp:navigation-link {"label":"Contact","url":"#","kind":"custom"} /-->
			<!-- /wp:navigation -->

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
