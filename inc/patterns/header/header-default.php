<?php
/**
 * Shanti: Header with site logo, navigation
 *
 * @package Shanti
 */

return array(
	'title'         => __( 'Header with site title, navigation.', 'frost' ),
	'categories'    => array( 'frost-header' ),
	'blockTypes'    => array( 'core/template-part/header' ),
	'viewportWidth' => 1280,
	'content'       => '<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group">
	
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var(--wp--custom--spacing--large, 8rem)","top":"var(--wp--custom--spacing--small, 1.25rem)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide" style="padding-top:var(--wp--custom--spacing--small, 1.25rem);padding-bottom:var(--wp--custom--spacing--large, 8rem)">

		<!-- wp:group {"layout":{"type":"flex"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":64} /-->
			<!-- wp:site-title /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"overlayMenu":"always"} /-->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->',
);