<?php
/**
 * Title: Posts List
 * Description: Query loop for search results with single-column list layout
 * Slug: shanti/posts-list
 * Categories: posts
 * Keywords: query, loop, posts, blog
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

	<!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"default"}} -->

	<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
	<div class="wp-block-group">

		<!-- wp:post-title {"isLink":true} /-->
		<!-- wp:post-excerpt {"showMoreOnNewLine":false,"excerptLength":34} /-->
		<!-- wp:post-date {"format":"M j, Y"} /-->

	</div>
	<!-- /wp:group -->

	<!-- /wp:post-template -->

	<!-- wp:pattern {"slug":"shanti/hidden-query-no-results"} /-->

	<!-- wp:pattern {"slug":"shanti/hidden-query-pagination"} /-->

</div>
<!-- /wp:query -->
