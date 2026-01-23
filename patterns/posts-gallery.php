<?php
/**
 * Title: Blog posts in gallery layout.
 * Slug: shanti/blog-gallery
 * Categories: shanti-blog
 */
?>

<!-- wp:query {"queryId":2,"query":{"inherit":true,"perPage":12,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date"},"displayLayout":{"type":"flex","columns":4},"align":"wide","layout":{"inherit":false}} -->
<div class="wp-block-query alignwide">

	<!-- wp:post-template {} -->
	<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"1","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} /-->
	<!-- wp:post-title {"isLink":true,"fontSize":"small"} /-->
	<!-- wp:post-date {"format":"F j, Y","isLink":true,"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"x-small"} /-->
	<!-- wp:spacer {"height":"var:preset|spacing|50"} -->
	<div style="height:var(--wp--preset--spacing--50)" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
	<!-- wp:query-pagination-previous {"fontSize":"small"} /-->
	<!-- wp:query-pagination-numbers /-->
	<!-- wp:query-pagination-next {"fontSize":"small"} /-->
	<!-- /wp:query-pagination -->

</div>
<!-- /wp:query -->
