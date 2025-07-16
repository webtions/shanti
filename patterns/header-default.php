<?php
/**
 * Title: Header with logo, site title, navigation.
 * Slug: shanti/header-default
 * Categories: shanti-header
 * Block Types: core/template-part/header
 */
?>

<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"padding":{"top":"var(--wp--custom--spacing--outer)","bottom":"var(--wp--custom--spacing--outer)"}}}} -->
<div class="wp-block-group" style="padding-top:var(--wp--custom--spacing--outer);padding-bottom:var(--wp--custom--spacing--outer)">

	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:group {"layout":{"type":"flex"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"isResponsive":true,"layout":{"type":"flex","orientation":"horizontal","justifyContent":"right"}} /-->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
