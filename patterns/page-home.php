<?php
/**
 * Title: Home page content
 * Slug: shanti/page-home
 * Categories: shanti-page
 * Template Types: front-page, home
 * Inserter: true
 */
?>

<!-- wp:group {"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull">

	<!-- wp:group {"align":"full","layout":{"type":"default"}} -->
	<div class="wp-block-group alignfull">
		<!-- wp:pattern {"slug":"shanti/hero-cover"} /-->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"layout":{"type":"constrained"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"left":"var(--wp--preset--spacing--outer)","right":"var(--wp--preset--spacing--outer)"}}}} -->
	<div class="wp-block-group" style="margin-top: 0; margin-bottom: 0; padding-left: var(--wp--preset--spacing--outer); padding-right: var(--wp--preset--spacing--outer);">

		<!-- wp:pattern {"slug":"shanti/posts-showcase"} /-->

		<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
		<div class="wp-block-group alignwide" id="site-content">

			<!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
			<div class="wp-block-group alignwide">

				<!-- wp:pattern {"slug":"shanti/hidden-section-header"} /-->

				<!-- wp:pattern {"slug":"shanti/posts-grid-3-cols"} /-->

				<!-- wp:spacer {"height":"40px"} -->
				<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
				<!-- /wp:spacer -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->
