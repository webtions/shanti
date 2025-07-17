<?php
/**
 * Title: Cover with text and background image
 * Slug: shanti/hero-cover
 * Categories: shanti-hero
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_theme_file_uri( 'assets/images/shanti-cover.svg' ) ); ?>","dimRatio":0,"contentPosition":"center left","isDark":false,"align":"full","className":"shanti-header-cover is-style-fullscreen-cover"} -->
<div class="wp-block-cover alignfull is-light has-custom-content-position is-position-center-left shanti-header-cover is-style-fullscreen-cover">

	<img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_theme_file_uri( 'assets/images/shanti-cover.svg' ) ); ?>" data-object-fit="cover" />
	<span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>

	<div class="wp-block-cover__inner-container">
		<!-- wp:group {"align":"wide","className":"shanti-cover-text"} -->
		<div class="wp-block-group alignwide shanti-cover-text">

			<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
			<h1 class="has-xx-large-font-size"><?php esc_html_e( 'A minimalist purpose-built blog theme for WordPress powered by blocks.', 'shanti' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"textColor":"secondary","className":"scroll-to","fontSize":"large"} -->
			<p class="scroll-to has-large-font-size has-secondary-color has-text-color">
				<a href="#site-content">&#8595;</a>
			</p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->
	</div>

</div>
<!-- /wp:cover -->
