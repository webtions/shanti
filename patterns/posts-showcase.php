<?php
/**
 * Title: Posts showcase
 * Description: Showcase section with text and info alongside a 2×2 posts grid.
 * Slug: shanti/posts-showcase
 * Categories: featured
 * Keywords: footer, social, links
 * Viewport width: 1600
 * Inserter: true
 *
 * @package Shanti
 */

?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|80","right":"var:preset|spacing|80"}}},"backgroundColor":"accent-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-accent-light-background-color has-background"
	style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--80)">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"33.33%"} -->
			<div class="wp-block-column" style="flex-basis:33.33%">
				<!-- wp:heading {"level":2,"fontSize":"xx-large"} -->
				<h2 class="wp-block-heading has-xx-large-font-size"><?php echo esc_html_x( 'Featured', 'Section heading', 'shanti' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"textColor":"contrast-medium"} -->
				<p class="has-contrast-medium-color has-text-color"><?php echo esc_html_x( 'Highlight your latest or featured posts with a custom heading and call-to-action button. Customize the query to show posts from a specific category or tag.', 'Posts showcase description', 'shanti' ); ?></p>
				<!-- /wp:paragraph -->

				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button -->
					<div class="wp-block-button">
						<a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'View all', 'Button label', 'shanti' ); ?></a>
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
					<!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"grid","columnCount":2}} -->
					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group">
						<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/5"} /-->

						<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"fontSize":"x-large"} /-->

						<!-- wp:post-excerpt {"excerptLength":34,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|50"}}}} /-->

						<!-- wp:pattern {"slug":"shanti/hidden-post-meta"} /-->
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
