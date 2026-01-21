<?php
/**
 * Title: Posts Grid (3 Columns)
 * Slug: shanti/posts-grid-3-columns
 * Categories: shanti-blog
 * Inserter: true
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"
	style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:query {"queryId":3,"query":{"perPage":3,"postType":"post","order":"desc","orderBy":"date"},"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-query alignwide">

		<!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/5","width":"100%","style":{"border":{"radius":"0px","width":"8px","color":"var(--wp--preset--color--border-light)"}}} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"8px","margin":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20)">
				<!-- wp:post-terms {"term":"post_tag","style":{"typography":{"fontSize":"11px","textTransform":"uppercase","letterSpacing":"0.5px"}},"textColor":"contrast-medium"} /-->

				<!-- wp:paragraph {"style":{"typography":{"fontSize":"11px"}},"textColor":"contrast-medium"} -->
				<p class="has-contrast-medium-color has-text-color" style="font-size:11px">•</p>
				<!-- /wp:paragraph -->

				<!-- wp:post-date {"format":"M j, Y","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"style":{"typography":{"fontSize":"11px"}},"textColor":"contrast-medium"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"typography":{"lineHeight":"1.2","fontWeight":"400"}},"fontSize":"large"} /-->

			<!-- wp:post-excerpt {"excerptLength":25,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"contrast-medium"} /-->
		</div>
		<!-- /wp:group -->
		<!-- /wp:post-template -->

	</div>
	<!-- /wp:query -->

</div>
<!-- /wp:group -->
