<?php
/**
 * Title: Call To Action
 * Description: A call to action with text and a button.
 * Slug: shanti/call-to-action
 * Categories: call-to-action
 * Keywords: cta, call to action, buttons, heading
 * Block Types:
 * Post Types:
 * Template Types:
 * Viewport width: 1600
 * Inserter: true
 *
 * @package Shanti
 */

?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/shanti-cover.svg","id":2006,"dimRatio":80,"overlayColor":"primary","isUserOverlayColor":true,"isDark":false,"sizeSlug":"thumbnail","metadata":{"categories":["call-to-action"],"patternName":"shanti/call-to-action","name":"Call To Action"},"className":"alignfull is-light has-parallax"} -->
<div class="wp-block-cover is-light alignfull has-parallax"><img class="wp-block-cover__image-background wp-image-2006 size-thumbnail" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/shanti-cover.svg" data-object-fit="cover"/>
	<span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-80 has-background-dim"></span>

	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"metadata":{"name":"CTA Content"},"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|60","padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignfull" style="padding-top:0;padding-bottom:0">
			<!-- wp:group {"metadata":{"name":"Text"},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
				<h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html_x( 'Ready to get started?', 'CTA heading', 'shanti' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
				<p class="has-text-align-center has-medium-font-size"><?php echo esc_html_x( 'Use this section to highlight an offer, download, or important link.', 'CTA description', 'shanti' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:buttons {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-fill"} -->
				<div class="wp-block-button is-style-fill">
					<a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Learn more', 'CTA primary button label', 'shanti' ); ?></a>
				</div>
				<!-- /wp:button -->

				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline">
					<a class="wp-block-button__link wp-element-button"><?php echo esc_html_x( 'Get started', 'CTA secondary button label', 'shanti' ); ?></a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>

</div>
<!-- /wp:cover -->
