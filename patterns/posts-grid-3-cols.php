<?php
/**
 * Title: Posts Grid (3 Columns)
 * Slug: shanti/posts-grid-3-cols
 * Categories: shanti-posts
 * Inserter: true
 * Description: “Latest Posts” section with three-column grid (featured image, title, excerpt, meta). Self-contained spacing.
 *
 * @package Shanti
 */

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|outer","bottom":"var:preset|spacing|outer"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-top:var(--wp--preset--spacing--outer);margin-bottom:var(--wp--preset--spacing--outer)">
	<!-- wp:pattern {"slug":"shanti/hidden-section-header"} /-->

	<!-- wp:query {"queryId":3,"query":{"perPage":3,"postType":"post","order":"desc","orderBy":"date"},"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-query alignwide">

		<!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/5","width":"100%"} /-->

			<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"fontSize":"x-large"} /-->

			<!-- wp:post-excerpt {"excerptLength":34,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|large"}}}} /-->

			<!-- wp:pattern {"slug":"shanti/hidden-post-meta"} /-->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
