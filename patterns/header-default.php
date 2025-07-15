<?php
/**
 * Title: Header with logo, site title, navigation.
 * Slug: shanti/header-default
 * Categories: shanti-header
 * Block Types: core/template-part/header
 */
?>

<!-- wp:group {"layout":{"inherit":true}} -->
<div class="wp-block-group">

	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<div class="wp-block-group alignwide">

		<!-- wp:group {"layout":{"type":"flex"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo /-->
			<!-- wp:site-title {"fontSize":"large"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:navigation {"isResponsive":true,"layout":{"type":"flex","orientation":"horizontal","justifyContent":"right"}} /-->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
