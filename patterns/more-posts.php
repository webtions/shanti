<?php
/**
 * Title: More posts
 * Description: Displays a list of posts with image, title, excerpt, and meta. For use below single post content.
 * Slug: shanti/more-posts
 * Categories:
 * Keywords: query, loop, posts, more, single
 * Block Types: core/query
 * Template Types: single
 * Viewport Width: 1600
 * Inserter: true
 *
 * @package Shanti
 */

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"
	style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60);padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30)">

		<!-- wp:heading {"level":2} -->
		<h2 class="wp-block-heading">
			<?php esc_html_e( 'More posts', 'shanti' ); ?></h2>
		<!-- /wp:heading -->

	</div>
	<!-- /wp:group -->

	<!-- wp:query {"queryId":3,"query":{"perPage":3,"postType":"post","order":"desc","orderBy":"date"},"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-query alignwide">

		<!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:pattern {"slug":"shanti/hidden-blog-post-card"} /-->
		<!-- /wp:post-template -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
