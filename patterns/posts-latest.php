<?php
/**
 * Title: Posts Latest
 * Description: Latest posts in a three-column grid (no pagination). For home or section blocks.
 * Slug: shanti/posts-latest
 * Categories: shanti-posts
 * Inserter: true
 *
 * @package Shanti
 */

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:pattern {"slug":"shanti/hidden-section-header"} /-->

	<!-- wp:query {"queryId":3,"query":{"perPage":3,"postType":"post","order":"desc","orderBy":"date"},"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-query alignwide">

		<!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/5","width":"100%"} /-->

			<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"fontSize":"x-large"} /-->

			<!-- wp:post-excerpt {"excerptLength":34,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}}} /-->

			<!-- wp:pattern {"slug":"shanti/hidden-post-meta"} /-->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
