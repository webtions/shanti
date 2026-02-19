<?php
/**
 * Title: Post meta (date + terms)
 * Slug: shanti/hidden-post-meta
 * Categories: text
 * Inserter: false
 * Description: Date and terms row for post cards.
 *
 * @package Shanti
 */

?>

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
<div class="wp-block-group">
	<!-- wp:post-date /-->
	<!-- wp:post-terms {"term":"post_tag","className":"has-hashtag-prefix"} /-->
</div>
<!-- /wp:group -->
