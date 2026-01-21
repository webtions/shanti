<?php
/**
 * Title: Posts with Sidebar (2x2 Grid)
 * Slug: shanti/posts-sidebar-grid
 * Categories: shanti-blog
 * Inserter: true
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"
	style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--60)">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|70"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"width":"33.33%"} -->
		<div class="wp-block-column" style="flex-basis:33.33%">

			<!-- wp:heading {"level":2,"style":{"typography":{"fontWeight":"600","fontSize":"2rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontFamily":"system-serif"} -->
			<h2 class="wp-block-heading has-system-serif-font-family"
				style="margin-bottom:var(--wp--preset--spacing--30);font-size:2rem;font-weight:600">Featured</h2>
			<!-- /wp:heading -->

			<!-- wp:separator {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"backgroundColor":"border-light"} -->
			<hr class="wp-block-separator has-text-color has-border-light-background-color has-background"
				style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30)" />
			<!-- /wp:separator -->

			<!-- wp:categories {"showHierarchy":true,"showPostCounts":true,"style":{"typography":{"fontSize":"14px","lineHeight":"2"}}} /-->

		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"66.66%"} -->
		<div class="wp-block-column" style="flex-basis:66.66%">

			<!-- wp:query {"query":{"perPage":4,"postType":"post","order":"desc","orderBy":"date"},"align":"wide","layout":{"type":"default"}} -->
			<div class="wp-block-query alignwide">

				<!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"grid","columnCount":2}} -->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group" style="gap:var(--wp--preset--spacing--20)">

					<!-- wp:post-featured-image {"aspectRatio":"4/5","isLink":true,"width":"100%","style":{"border":{"radius":"0px","width":"8px","color":"var(--wp--preset--color--border-light)"}}} /-->

					<!-- wp:group {"style":{"spacing":{"blockGap":"8px","margin":{"top":"var:preset|spacing|20"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group" style="gap:8px;margin-top:var(--wp--preset--spacing--20)">
						<!-- wp:post-terms {"term":"post_tag","style":{"typography":{"fontSize":"11px","textTransform":"uppercase","letterSpacing":"0.5px"}},"textColor":"contrast-medium"} /-->
						<!-- wp:paragraph {"style":{"typography":{"fontSize":"11px"}},"textColor":"contrast-medium"} -->
						<p class="has-contrast-medium-color has-text-color" style="font-size:11px">•</p>
						<!-- /wp:paragraph -->
						<!-- wp:post-date {"format":"M j, Y","style":{"typography":{"fontSize":"11px"}},"textColor":"contrast-medium"} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}},"typography":{"lineHeight":"1.2","fontWeight":"400"}},"fontSize":"large","fontFamily":"system-serif"} /-->

					<!-- wp:post-excerpt {"excerptLength":20,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"contrast-medium"} /-->

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
