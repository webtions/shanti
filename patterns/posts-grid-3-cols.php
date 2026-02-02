<?php
/**
 * Title: Posts Grid (3 Columns)
 * Slug: shanti/posts-grid-3-cols
 * Categories: shanti-posts
 * Inserter: true
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"
	style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">

	<!-- wp:query {"queryId":3,"query":{"perPage":3,"postType":"post","order":"desc","orderBy":"date"},"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-query alignwide">

		<!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/5","width":"100%","style":{"border":{"radius":"0px","width":"1px","style":"solid","color":"var(--wp--preset--color--contrast)"},"shadow":"var:preset|shadow|hard"}} /-->

			<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"fontSize":"x-large"} /-->

			<!-- wp:post-excerpt {"excerptLength":34,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|large"}}}} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group">
				<!-- wp:post-date /-->
				<!-- wp:post-terms {"term":"post_tag","className":"has-hashtag-prefix"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
