<?php
/**
 * Title: Author box
 * Description: Author box with avatar, name, bio, and links.
 * Slug: shanti/author-box
 * Categories: text
 * Keywords: author, bio, profile, user
 * Block Types:
 * Post Types:
 * Template Types:
 * Viewport width: 1600
 * Inserter: true
 *
 * @package Shanti
 */

?>

<!-- wp:group {"metadata":{"name":"Author Box"},"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide has-link-color" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

	<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
	<div class="wp-block-group">
		<!-- wp:avatar {"size":80,"isLink":true} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:post-author-name {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"fontSize":"large"} /-->

			<!-- wp:post-author-biography {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast-alt"}}}},"textColor":"contrast-alt"} /-->

			<!-- wp:social-links {"iconColor":"contrast","iconColorValue":"#000000","size":"has-large-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|20","left":"var:preset|spacing|20"}}}} -->
			<ul class="wp-block-social-links has-large-icon-size has-icon-color is-style-logos-only">
				<!-- wp:social-link {"url":"#","service":"twitter"} /-->
				<!-- wp:social-link {"url":"#","service":"facebook"} /-->
				<!-- wp:social-link {"url":"#","service":"instagram"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->

