<?php
/**
 * Title: Posts with Sidebar (2x2 Grid)
 * Slug: shanti/posts-sidebar-grid
 * Categories: shanti-blog
 * Inserter: true
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var(--wp--preset--spacing--xxx-large)","right":"var(--wp--preset--spacing--xxx-large)"}}},"backgroundColor":"accent-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-accent-light-background-color has-background"
	style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--xxx-large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--xxx-large)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide"
		style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)">
		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large"}}}} -->
		<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%">
				<!-- wp:heading {"level":2,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}},"fontSize":"xx-large"} -->
				<h2 class="wp-block-heading has-xx-large-font-size"
					style="margin-bottom:var(--wp--preset--spacing--30)">
					Featured</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|small"}}},"textColor":"contrast-medium"} -->
				<p class="has-contrast-medium-color has-text-color"
					style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30)">Showcase posts from your chosen
					category or tag, with a tag cloud or category list to guide visitors to more content.</p>
				<!-- /wp:paragraph -->

				<!-- wp:tag-cloud {"numberOfTags":20,"smallestFontSize":"1rem","largestFontSize":"1rem","className":"has-hashtag-prefix","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|small"},"blockGap":"var:preset|spacing|x-small"}}} /-->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"66.66%"} -->
			<div class="wp-block-column" style="flex-basis:66.66%">
				<!-- wp:query {"queryId":27,"query":{"perPage":4,"postType":"post","order":"desc","orderBy":"date"},"align":"wide","layout":{"type":"default"}} -->
				<div class="wp-block-query alignwide">
					<!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"grid","columnCount":2}} -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/5","width":"100%","style":{"border":{"radius":"0px","width":"1px","style":"solid","color":"var(--wp--preset--color--contrast)"},"shadow":"var:preset|shadow|hard"}} /-->

						<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"fontSize":"x-large"} /-->

						<!-- wp:post-excerpt {"excerptLength":20,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|large"}}}} /-->

						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="wp-block-group">
							<!-- wp:post-date {"format":"M j, Y","metadata":{"bindings":{"datetime":{"source":"core/post-data","args":{"field":"date"}}}},"textColor":"contrast-medium"} /-->

							<!-- wp:post-terms {"term":"post_tag","className":"has-hashtag-prefix","textColor":"contrast-medium"} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
					<!-- /wp:post-template -->
				</div>
				<!-- /wp:query -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
