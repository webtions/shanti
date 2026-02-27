<?php
/**
 * Title: Posts Stacked
 * Description: Query loop with one post per row: featured image, title, excerpt, and meta.
 * Slug: shanti/posts-stacked
 * Categories: posts
 * Keywords: query, loop, posts, blog, stacked, one column
 * Block Types: core/query
 * Viewport Width: 1200
 * Inserter: true
 *
 * @package Shanti
 */

?>

<!-- wp:query {"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide">

	<!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40","padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">

		<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} /-->

		<!-- wp:post-title {"level":2,"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"fontSize":"x-large"} /-->

		<!-- wp:post-excerpt {"excerptLength":55,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}}} /-->

		<!-- wp:pattern {"slug":"shanti/hidden-post-meta"} /-->

	</div>
	<!-- /wp:group -->

	<!-- /wp:post-template -->

	<!-- wp:query-no-results -->
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"fontSize":"large"} -->
		<h2 class="wp-block-heading has-large-font-size"><?php echo esc_html_x( 'Nothing Found', 'Empty query message', 'shanti' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p><?php echo esc_html_x( 'Sorry, no posts matched your criteria. Try searching for something else.', 'Empty query body', 'shanti' ); ?></p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- /wp:query-no-results -->

	<!-- wp:group {"metadata":{"name":"Query Pagination"},"className":"query-pagination","align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|80"}}}} -->
	<div class="wp-block-group query-pagination alignwide" style="margin-top:var(--wp--preset--spacing--80)">

		<!-- wp:separator {"className":"is-style-wavy","style":{"spacing":{"margin":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}}} -->
		<hr class="wp-block-separator has-alpha-channel-opacity is-style-wavy" style="margin-top:var(--wp--preset--spacing--80);margin-bottom:var(--wp--preset--spacing--80)"/>
		<!-- /wp:separator -->

		<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between","orientation":"horizontal"}} -->
			<!-- wp:query-pagination-previous {"fontSize":"medium"} /-->
			<!-- wp:query-pagination-next {"fontSize":"medium"} /-->
		<!-- /wp:query-pagination -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:query -->
