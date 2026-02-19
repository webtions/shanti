<?php
/**
 * Title: Cover with text and background image
 * Description: Full-width hero cover with heading and background image.
 * Slug: shanti/hero-cover
 * Categories: featured
 * Keywords: hero, cover, banner
 * Block Types: core/post-content
 * Viewport Width: 1600
 * Inserter: true
 *
 * @package Shanti
 */

?>

<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/shanti-cover.svg' ) ); ?>","dimRatio":0,"minHeight":600,"isDark":false,"align":"full","className":"shanti-header-cover is-style-fullscreen","style":{"spacing":{"margin":{"top":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light shanti-header-cover is-style-fullscreen" style="margin-top:0;min-height:600px">
	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/shanti-cover.svg' ) ); ?>" data-object-fit="cover"/>
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
		<div class="wp-block-cover__inner-container">

			<!-- wp:group {"align":"wide"} -->
			<div class="wp-block-group alignwide">
				<!-- wp:group {"className":"constrain-text"} -->
				<div class="wp-block-group constrain-text">
					<!-- wp:heading {"fontSize":"x-large"} -->
					<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html_x( 'A minimalist purpose-built blog theme for WordPress powered by blocks.', 'Hero tagline', 'shanti' ); ?></h2>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"className":"scroll-to","textColor":"secondary","fontSize":"large"} -->
					<p class="scroll-to has-secondary-color has-text-color has-large-font-size"><a href="#site-content">↓</a></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

		</div>
</div>
<!-- /wp:cover -->
