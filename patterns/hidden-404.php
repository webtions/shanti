<?php
/**
 * Title: 404
 * Slug: shanti/hidden-404
 * Inserter: no
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/shanti-cover.svg","dimRatio":0,"align":"wide","contentPosition":"center center","isDark":false,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignwide is-light"><span aria-hidden="true"
		class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img
		class="wp-block-cover__image-background" alt=""
		src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/shanti-cover.svg"
		data-object-fit="cover" />
	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"
			style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
			<!-- wp:heading {"textAlign":"center","level":1} -->
			<h1 class="wp-block-heading has-text-align-center">404</h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
			<p class="has-text-align-center has-medium-font-size">This page no longer exists. The rest of the site is still here. Use the search, or return to the homepage.</p>
			<!-- /wp:paragraph -->

			<!-- wp:spacer {"height":"var:preset|spacing|small"} -->
			<div style="height:var(--wp--preset--spacing--small)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search","buttonText":"Search","buttonUseIcon":true,"align":"center"} /-->

			<!-- wp:spacer {"height":"var:preset|spacing|x-small"} -->
			<div style="height:var(--wp--preset--spacing--x-small)" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-ghost"} -->
				<div class="wp-block-button is-style-ghost"><a class="wp-block-button__link wp-element-button" href="/">Return to
						Homepage <span class="shanti-icon shanti-icon-return" aria-hidden="true"></span></a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
</div>
<!-- /wp:cover -->
