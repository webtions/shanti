<?php
/**
 * Title: Posts List (Compact)
 * Description: Query loop in a compact list with a separator between each post.
 * Slug: shanti/posts-list-compact
 * Categories: posts
 * Keywords: query, loop, list, posts, blog, compact
 * Block Types: core/query
 * Viewport Width: 1200
 * Inserter: true
 *
 * @package Shanti
 */

?>

<!-- wp:query {"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide">

	<!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40)">

		<!-- wp:post-title {"level":2,"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}},"fontSize":"large"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:post-date {"format":"M j, Y"} /-->
			<!-- wp:post-terms {"term":"post_tag"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:post-excerpt {"excerptLength":34,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

	</div>
	<!-- /wp:group -->

	<!-- wp:separator {"className":"is-style-wide","style":{"spacing":{"margin":{"top":"0","bottom":"0"}},"border":{"width":"0 0 1px 0"}}} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" style="border-width:0 0 1px 0;margin-top:0;margin-bottom:0"/>
	<!-- /wp:separator -->

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

	<!-- wp:group {"metadata":{"name":"Query Pagination"},"className":"query-pagination","align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}}} -->
	<div class="wp-block-group query-pagination alignwide" style="margin-top:var(--wp--preset--spacing--60)">

		<!-- wp:separator {"className":"is-style-wide","style":{"border":{"width":"0 0 4px 0"},"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}}} -->
		<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" style="border-width:0 0 4px 0;margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)"/>
		<!-- /wp:separator -->

		<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:query-pagination-previous {"fontSize":"medium"} /-->
			<!-- wp:query-pagination-next {"fontSize":"medium"} /-->
		<!-- /wp:query-pagination -->

	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:query -->
