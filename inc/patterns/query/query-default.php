<?php
/**
 * Shanti: Query list with one column
 *
 * @package Shanti
 */

return array(
	'title'         => __( 'List of posts in one column.', 'shanti' ),
	'categories'    => array( 'shanti-query' ),
	'viewportWidth' => 1370,
	'content'       => '	<!-- wp:query {"query":{"inherit":true,"perPage":10,"pages":0,"offset":0,"postType":"post","categoryIds":[],"tagIds":[],"order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":""},"displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"inherit":false}} -->
	<div class="wp-block-query alignwide">

		<!-- wp:post-template {} -->
	
			<!-- wp:post-title {"isLink":true,"fontSize":"medium"} /-->
			<!-- wp:post-featured-image {"isLink":true,"style":{"spacing":{"margin":{"top":"calc(1.75 * var(--wp--style--block-gap))"}}}} /-->
			<!-- wp:post-excerpt /-->
			<!-- wp:post-date {"format":"F j, Y","isLink":true,"style":{"typography":{"fontStyle":"italic","fontWeight":"400"}},"fontSize":"small"} /-->

			<!-- wp:spacer {"height":80} -->
			<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

		<!-- /wp:post-template -->

		<!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:query-pagination-previous {"fontSize":"small"} /-->
			<!-- wp:query-pagination-numbers /-->
			<!-- wp:query-pagination-next {"fontSize":"small"} /-->
		<!-- /wp:query-pagination -->

	</div>
	<!-- /wp:query -->',
);
