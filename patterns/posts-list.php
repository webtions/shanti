<?php
/**
 * Title: Posts List (1 Column)
 * Slug: shanti/posts-list
 * Categories: posts
 * Block Types: core/query
 * Inserter: true
 * Description: Query loop for search results with single-column list layout
 *
 * @package Shanti
 */

?>

<!-- wp:query {"query":{"inherit":true},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide">

	<!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">

		<!-- wp:post-title {"level":2,"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"fontSize":"x-large"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"bottom":"var:preset|spacing|30"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:post-date {"format":"M j, Y"} /-->
			<!-- wp:post-terms {"term":"post_tag"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:post-excerpt {"excerptLength":34,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

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

	<!-- wp:separator {"className":"is-style-wide","style":{"border":{"width":"0 0 4px 0"}}} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" style="border-width:0 0 4px 0"/>
	<!-- /wp:separator -->

	<!-- wp:group {"className":"query-pagination","align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group query-pagination alignwide">
		<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:query-pagination-previous {"fontSize":"medium"} /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next {"fontSize":"medium"} /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:group -->

	<!-- wp:separator {"className":"is-style-wide","style":{"border":{"width":"0 0 4px 0"}}} -->
	<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide" style="border-width:0 0 4px 0"/>
	<!-- /wp:separator -->

</div>
<!-- /wp:query -->
