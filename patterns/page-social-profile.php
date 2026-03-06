<?php
/**
 * Title: Social profile landing page
 * Description: A link-in-bio style page with profile image, short bio, and social links.
 * Slug: shanti/page-social-profile
 * Categories: shanti-page
 * Keywords: social, profile, link in bio, landing, links, avatar, bio
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Template Types: page, front-page
 * Viewport Width: 1600
 * Inserter: true
 *
 * @package Shanti
 */

?>

<!-- wp:group {"metadata":{"categories":["featured"],"patternName":"shanti/page-social-profile","name":"Social profile landing page"},"align":"full","style":{"dimensions":{"minHeight":"50vh"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"var:preset|spacing|80"},"blockGap":"var:preset|spacing|80"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="min-height:50vh;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|80","padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"secondary","layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignfull has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|70"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">

			<!-- wp:image {"width":"120px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-rounded","style":{"border":{"radius":"50%"}}} -->
			<figure class="wp-block-image aligncenter size-full is-resized has-custom-border is-style-rounded"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/default-thumbnail.svg" alt="" style="border-radius:50%;aspect-ratio:1;object-fit:cover;width:120px"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"textAlign":"center","level":1} -->
			<h1 class="wp-block-heading has-text-align-center"><?php echo esc_html_x( 'Your Name', 'Social profile pattern: placeholder for name', 'shanti' ); ?></h1>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.6"}},"textColor":"contrast-alt"} -->
			<p class="has-text-align-center has-contrast-alt-color has-text-color" style="line-height:1.6"><?php esc_html_e( 'Use this page as a landing page for your social profiles. Share this link in your bio so people can find your website, latest posts, and important links in one place.', 'shanti' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->

		<!-- wp:separator {"className":"is-style-wavy"} -->
		<hr class="wp-block-separator has-alpha-channel-opacity is-style-wavy"/>
		<!-- /wp:separator -->

		<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#000000","size":"has-large-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
		<ul class="wp-block-social-links has-large-icon-size has-icon-color is-style-logos-only">
			<!-- wp:social-link {"url":"#","service":"x"} /-->
			<!-- wp:social-link {"url":"#","service":"instagram"} /-->
			<!-- wp:social-link {"url":"#","service":"facebook"} /-->
			<!-- wp:social-link {"url":"#","service":"youtube"} /-->
		</ul>
		<!-- /wp:social-links -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"metadata":{"name":"Button Group"},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group">
		<!-- wp:buttons {"style":{"layout":{"selfStretch":"fit","flexSize":null}},"layout":{"type":"flex","flexWrap":"nowrap","orientation":"vertical"}} -->
		<div class="wp-block-buttons">
			<!-- wp:button {"textAlign":"center","width":100} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-100">
				<a class="wp-block-button__link has-text-align-center wp-element-button"><?php echo esc_html_x( 'Visit Website', 'Social profile pattern: button label', 'shanti' ); ?></a>
			</div>
			<!-- /wp:button -->

			<!-- wp:button {"textAlign":"center","width":100} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-100">
				<a class="wp-block-button__link has-text-align-center wp-element-button"><?php echo esc_html_x( 'About', 'Social profile pattern: button label', 'shanti' ); ?></a>
			</div>
			<!-- /wp:button -->

			<!-- wp:button {"textAlign":"center","width":100} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-100">
				<a class="wp-block-button__link has-text-align-center wp-element-button"><?php echo esc_html_x( 'Blog', 'Social profile pattern: button label', 'shanti' ); ?></a>
			</div>
			<!-- /wp:button -->

			<!-- wp:button {"textAlign":"center","width":100} -->
			<div class="wp-block-button has-custom-width wp-block-button__width-100">
				<a class="wp-block-button__link has-text-align-center wp-element-button"><?php echo esc_html_x( 'Contact', 'Social profile pattern: button label', 'shanti' ); ?></a>
			</div>
			<!-- /wp:button -->
		</div>
		<!-- /wp:buttons -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
