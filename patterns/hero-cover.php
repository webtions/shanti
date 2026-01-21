<?php
/**
 * Title: Cover with text and background image
 * Slug: shanti/hero-cover
 * Categories: shanti-hero
 */
?>

<!-- wp:cover {"align":"full","layout":{"type":"constrained"},"className":"shanti-header-cover is-style-fullscreen","url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/shanti-cover.svg' ) ); ?>","dimRatio":0,"minHeight":600,"isDark":false,"style":{"spacing":{"margin":{"top":"0"}}}} -->
<div class="wp-block-cover alignfull is-light shanti-header-cover is-style-fullscreen" style="margin-top:0;min-height:600px">
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/shanti-cover.svg' ) ); ?>" data-object-fit="cover" />
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
	<div class="wp-block-cover__inner-container">

		<!-- wp:group {"align":"wide"} -->
		<div class="wp-block-group alignwide">

			<!-- wp:group {"className":"constrain-text"} -->
			<div class="wp-block-group constrain-text">

				<!-- wp:heading {"level":2,"fontSize":"gigantic"} -->
				<h2 class="has-gigantic-font-size"><?php esc_html_e( 'A minimalist purpose-built blog theme for WordPress powered by blocks.', 'shanti' ); ?></h2>
				<!-- /wp:heading -->

				<!-- wp:paragraph {"className":"scroll-to","fontSize":"large","textColor":"secondary"} -->
				<p class="scroll-to has-large-font-size has-secondary-color has-text-color">
					<a href="#site-content">&#8595;</a>
				</p>
				<!-- /wp:paragraph -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:group -->

	</div>
</div>
<!-- /wp:cover -->

