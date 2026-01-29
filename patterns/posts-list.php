<?php
/**
 * Title: Posts List (1 Column)
 * Slug: shanti/posts-list
 * Categories: shanti-blog
 * Block Types: core/query
 * Inserter: true
 * Description: Query loop for search results with single-column list layout
 */
?>

<!-- wp:query {"query":{"inherit":true},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide">

	<!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"default"}} -->

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">

		<!-- wp:post-title {"level":2,"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|small"}}},"fontSize":"x-large"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small","margin":{"bottom":"var:preset|spacing|small"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
		<div class="wp-block-group">
			<!-- wp:post-date {"format":"M j, Y"} /-->
			<!-- wp:post-terms {"term":"post_tag","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.5px"}},"textColor":"contrast-medium"} /-->
		</div>
		<!-- /wp:group -->

		<!-- wp:post-excerpt {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

	</div>
	<!-- /wp:group -->

	<!-- /wp:post-template -->

	<!-- wp:query-no-results -->
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:heading {"fontSize":"large"} -->
		<h2 class="wp-block-heading has-large-font-size">Nothing Found</h2>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>Sorry, no posts matched your criteria. Try searching for something else.</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->
	<!-- /wp:query-no-results -->

	<!-- wp:separator {"className":"is-style-wide","style":{"border":{"width":"0 0 4px 0"}}} -->
	<hr class="wp-block-separator is-style-wide" style="border-width:0 0 4px 0"/>
	<!-- /wp:separator -->

	<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:query-pagination-previous {"fontSize":"medium"} /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next {"fontSize":"medium"} /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:group -->

	<!-- wp:separator {"className":"is-style-wide","style":{"border":{"width":"0 0 4px 0"}}} -->
	<hr class="wp-block-separator is-style-wide" style="border-width:0 0 4px 0"/>
	<!-- /wp:separator -->

</div>
<!-- /wp:query -->
