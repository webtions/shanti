<?php
/**
 * Title: Posts Grid
 * Description: Default query loop for index and archive pages with 3-column grid layout.
 * Slug: shanti/posts-grid
 * Categories: posts
 * Keywords: query, loop, grid, posts, blog
 * Block Types: core/query
 * Post Types: page, wp_template
 * Viewport Width: 1600
 * Inserter: true
 *
 * @package Shanti
 */

?>

<!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide">

	<!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"grid","columnCount":3}} -->
	<!-- wp:pattern {"slug":"shanti/hidden-blog-post-card"} /-->
	<!-- /wp:post-template -->

	<!-- wp:pattern {"slug":"shanti/hidden-query-no-results"} /-->

	<!-- wp:pattern {"slug":"shanti/hidden-query-pagination"} /-->

</div>
<!-- /wp:query -->
