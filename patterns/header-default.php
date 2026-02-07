<?php
/**
 * Title: Header with logo, site title, navigation.
 * Slug: shanti/header-default
 * Categories: shanti-header
 * Block Types: core/template-part/header
 * Inserter: true
 *
 * @package Shanti
 */

?>
<!-- wp:group {"align":"full","layout":{"type":"default"},"style":{"spacing":{"padding":{"top":"var(--wp--preset--spacing--outer)","bottom":"var(--wp--preset--spacing--outer)","left":"var(--wp--preset--spacing--outer)","right":"var(--wp--preset--spacing--outer)"}}}} -->
<div class="wp-block-group alignfull"
	style="padding-top:var(--wp--preset--spacing--outer);padding-bottom:var(--wp--preset--spacing--outer);padding-left:var(--wp--preset--spacing--outer);padding-right:var(--wp--preset--spacing--outer)">

	<!-- wp:group {"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"align":"wide","className":"is-layout-flex","layout":{"type":"flex","justifyContent":"space-between","orientation":"horizontal"}} -->
		<div class="wp-block-group alignwide is-layout-flex">

		<!-- wp:group {"className":"is-layout-flex","layout":{"type":"flex"}} -->
		<div class="wp-block-group is-layout-flex">
			<!-- wp:site-logo /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"isResponsive":true,"layout":{"type":"flex"}} /-->

		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
