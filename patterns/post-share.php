<?php
/**
 * Title: Share post
 * Description: Share this post section with social sharing icons.
 * Slug: shanti/post-share
 * Categories: text
 * Keywords: share, social, post
 * Template Types: single
 * Viewport Width: 1600
 * Inserter: true
 *
 * @package Shanti
 */

?>

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom: var(--wp--preset--spacing--70)">
	<!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
	<h2 class="wp-block-heading has-text-align-center has-large-font-size"><?php echo esc_html_x( 'Share this post', 'Share section heading', 'shanti' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:outermost/social-sharing {"iconColor":"foreground","iconColorValue":"#000000","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-outermost-social-sharing has-icon-color is-style-logos-only">
		<!-- wp:outermost/social-sharing-link {"service":"facebook"} /-->

		<!-- wp:outermost/social-sharing-link {"service":"twitter","label":"<?php echo esc_attr( _x( 'Share on X', 'Social share label', 'shanti' ) ); ?>"} /-->

		<!-- wp:outermost/social-sharing-link {"service":"linkedin"} /-->

		<!-- wp:outermost/social-sharing-link {"service":"whatsapp"} /-->

		<!-- wp:outermost/social-sharing-link {"service":"threads"} /-->

		<!-- wp:outermost/social-sharing-link {"service":"mail"} /-->
	</ul>
	<!-- /wp:outermost/social-sharing -->
</div>
<!-- /wp:group -->
