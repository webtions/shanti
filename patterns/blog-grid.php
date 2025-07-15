<?php
/**
 * Title: Blog posts in three columns.
 * Slug: shanti/blog-grid
 * Categories: shanti-blog
 * Viewport Width: 1370
 */
?>

<!-- wp:query {"queryId":1,"query":{"inherit":true,"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date"},"displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"inherit":false}} -->
<div class="wp-block-query alignwide">

	<!-- wp:post-template {} -->
		<!-- wp:post-title {"isLink":true,"fontSize":"medium"} /-->
		<!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"top":"calc(1.75 * var(--wp--style--block-gap))"}}}} /-->
		<!-- wp:post-excerpt /-->
		<!-- wp:post-date {"format":"F j, Y","isLink":true,"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"small"} /-->
		<!-- wp:spacer {"height":80} --><div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div><!-- /wp:spacer -->
	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:query-pagination-previous {"fontSize":"small"} /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next {"fontSize":"small"} /-->
	<!-- /wp:query-pagination -->

</div>
<!-- /wp:query -->
