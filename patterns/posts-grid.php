<?php
/**
 * Title: Posts Grid
 * Description: Default query loop for index and archive pages with 3-column grid layout.
 * Slug: shanti/posts-grid
 * Categories: posts
 * Keywords: query, loop, grid, posts, blog
 * Block Types: core/query
 * Viewport Width: 1600
 * Inserter: true
 *
 * @package Shanti
 */

?>

<!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
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
