<?php
/**
 * Title: Blog post card
 * Description: Reusable post card for query loops — featured image, title, excerpt, and meta. Use inside a Query block's post template.
 * Slug: shanti/hidden-blog-post-card
 * Inserter: false
 *
 * @package Shanti
 */

?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/5","width":"100%"} /-->

	<!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"fontSize":"x-large"} /-->

	<!-- wp:post-excerpt {"excerptLength":34,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}}} /-->

	<!-- wp:pattern {"slug":"shanti/hidden-post-meta"} /-->
</div>
<!-- /wp:group -->
