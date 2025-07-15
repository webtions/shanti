<?php
/**
 * Title: Cover with text and background image
 * Slug: shanti/hero-cover
 * Categories: shanti-hero
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/assets/images/shanti-cover.svg' ); ?>","dimRatio":0,"contentPosition":"center left","isDark":false,"align":"full","className":"shanti-header-cover is-style-full-height"} -->
<div class="wp-block-cover alignfull is-light has-custom-content-position is-position-center-left shanti-header-cover is-style-full-height">

	<span aria-hidden="true" class="has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span>
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/shanti-cover.svg' ); ?>" data-object-fit="cover"/>

	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"layout":{"inherit":true}} -->
		<div class="wp-block-group">

			<!-- wp:group {"align":"wide"} -->
			<div class="wp-block-group alignwide">

				<!-- wp:group {"className":"alignwide shanti-cover-text","layout":{"inherit":false}} -->
				<div class="wp-block-group alignwide shanti-cover-text">

					<!-- wp:spacer {"height":120} -->
					<div style="height:120px" aria-hidden="true" class="wp-block-spacer"></div>
					<!-- /wp:spacer -->

					<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
					<h1 class="has-xx-large-font-size">A minimalist purpose-built blog theme for WordPress powered by blocks.</h1>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"textColor":"secondary","className":"scroll-to","fontSize":"large"} -->
					<p class="scroll-to has-large-font-size has-secondary-color has-text-color">
						<a href="#site-content">↓</a>
					</p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->
	</div>

</div>
<!-- /wp:cover -->
