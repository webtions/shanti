<?php
/**
 * Title: Share post
 * Slug: shanti/share-post
 * Categories: shanti-posts
 * Inserter: true
 * Description: Share this post section with social sharing icons.
 *
 * @package Shanti
 */

?>

<!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xx-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="margin-bottom: var(--wp--preset--spacing--xx-large)">
	<!-- wp:heading {"textAlign":"center","fontSize":"large"} -->
	<h2 class="wp-block-heading has-text-align-center has-large-font-size"><?php esc_html_e( 'Share this post', 'shanti' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:outermost/social-sharing {"iconColor":"foreground","iconColorValue":"#000000","className":"is-style-logos-only","layout":{"type":"flex","justifyContent":"center"}} -->
	<ul class="wp-block-outermost-social-sharing has-icon-color is-style-logos-only">
		<!-- wp:outermost/social-sharing-link {"service":"facebook"} /-->

		<!-- wp:outermost/social-sharing-link {"service":"twitter","label":"Share on X"} /-->

		<!-- wp:outermost/social-sharing-link {"service":"linkedin"} /-->

		<!-- wp:outermost/social-sharing-link {"service":"whatsapp"} /-->

		<!-- wp:outermost/social-sharing-link {"service":"threads"} /-->

		<!-- wp:outermost/social-sharing-link {"service":"mail"} /-->
	</ul>
	<!-- /wp:outermost/social-sharing -->
</div>
<!-- /wp:group -->
