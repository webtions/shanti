<?php
/**
 * Title: Query pagination
 * Description: Wavy separator and prev/next links for query loops.
 * Slug: shanti/hidden-query-pagination
 * Categories: text
 * Inserter: false
 *
 * @package Shanti
 */

?>

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
