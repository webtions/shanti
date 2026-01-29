<?php
/**
 * Title: Posts showcase
 * Slug: shanti/posts-showcase
 * Categories: shanti-blog
 * Inserter: true
 * Description: Showcase section with text and info alongside a 2×2 posts grid.
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var(--wp--preset--spacing--outer)","right":"var(--wp--preset--spacing--outer)"}}},"backgroundColor":"accent-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-accent-light-background-color has-background"
	style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--outer);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--outer)">
	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide"
		style="margin-top:var(--wp--preset--spacing--large);margin-bottom:var(--wp--preset--spacing--large)">
		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|x-large"}}}} -->
		<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%">
				<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
				<h2 class="wp-block-heading has-xx-large-font-size">Featured</h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"contrast-medium"} -->
				<p class="has-contrast-medium-color has-text-color">Highlight your latest or featured posts with a
					custom heading and call-to-action button. Customize the query to show posts from a specific category
					or tag.</p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button -->
					<div class="wp-block-button">
						<a class="wp-block-button__link wp-element-button">View all</a>
					</div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"66.66%"} -->
			<div class="wp-block-column" style="flex-basis:66.66%">
				<!-- wp:query {"query":{"perPage":4,"postType":"post","order":"desc","orderBy":"date"},"align":"wide","layout":{"type":"default"}} -->
				<div class="wp-block-query alignwide">
					<!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"grid","columnCount":2}} -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/5","width":"100%","style":{"border":{"radius":"0px","width":"1px","style":"solid","color":"var(--wp--preset--color--contrast)"},"shadow":"var:preset|shadow|hard"}} /-->

						<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"fontSize":"x-large"} /-->

						<!-- wp:post-excerpt {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|large"}}}} /-->

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
