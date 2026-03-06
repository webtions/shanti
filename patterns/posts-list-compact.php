<?php
/**
 * Title: Posts List (Compact)
 * Description: Query loop in a compact list with a separator between each post.
 * Slug: shanti/posts-list-compact
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

<!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"metadata":{"name":"Posts List (Compact)"},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide">

	<!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"default"}} -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group">
			<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->
			<!-- wp:post-date {"format":"M j, Y", "fontSize":"x-small"} /-->
		</div>
		<!-- /wp:group -->

	<!-- /wp:post-template -->

	<!-- wp:pattern {"slug":"shanti/hidden-query-no-results"} /-->

	<!-- wp:pattern {"slug":"shanti/hidden-query-pagination"} /-->


</div>
<!-- /wp:query -->

