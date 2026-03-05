<?php
/**
 * Title: Query no results
 * Description: Message shown when a query returns no posts.
 * Slug: shanti/hidden-query-no-results
 * Categories: text
 * Inserter: false
 *
 * @package Shanti
 */

?>

<!-- wp:query-no-results -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:paragraph -->
	<p><?php echo esc_html_x( 'No posts to show yet.', 'No query results message', 'shanti' ); ?></p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- /wp:query-no-results -->
