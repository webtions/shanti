<?php
/**
 * Title: Header
 * Description: Header with nav
 * Slug: shanti/header
 * Categories: header
 * Keywords: header, nav, links
 * Block Types: core/template-part/header
 * Post Types: wp_template
 * Viewport Width: 1600
 * Inserter: true
 *
 * @package Shanti
 */

?>

<!-- wp:group {"align":"full","layout":{"type":"default"},"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--80)","bottom":"var(--wp--preset--spacing--80)"}}}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">

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
