<?php
/**
 * Title: Footer (With background)
 * Description: Footer with centered social links and a background color.
 * Slug: shanti/footer-with-background
 * Categories: footer
 * Keywords: footer, social, links
 * Block Types: core/template-part/footer
 * Post Types: wp_template
 * Viewport Width: 1600
 * Inserter: true
 *
 * @package Shanti
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"backgroundColor":"accent-light","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-accent-light-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"metadata":{"name":"footer-wrapper"},"style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group">

			<!-- wp:group {"metadata":{"name":"footer-inner-wrapper"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group alignwide">
				<!-- wp:group {"metadata":{"name":"Social Links"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"default"}} -->
				<div class="wp-block-group alignwide">
					<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"large"} -->
					<h3 class="wp-block-heading has-text-align-center has-large-font-size" id="stay-in-touch">Stay in touch</h3>
					<!-- /wp:heading -->

					<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#000000","openInNewTab":true,"size":"has-large-icon-size","className":"has-icon-color has-icon-background-color is-style-logos-only","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|60","left":"var:preset|spacing|60"}},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
					<ul class="wp-block-social-links has-large-icon-size has-icon-color has-icon-background-color is-style-logos-only" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px">
						<!-- wp:social-link {"url":"#","service":"instagram"} /-->
						<!-- wp:social-link {"url":"#","service":"facebook"} /-->
						<!-- wp:social-link {"url":"#","service":"youtube"} /-->
						<!-- wp:social-link {"url":"#","service":"x"} /-->
					</ul>
					<!-- /wp:social-links -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"metadata":{"name":"Copyright"},"align":"wide","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
				<div class="wp-block-group alignwide">
					<!-- wp:paragraph {"fontSize":"small"} -->
					<p class="has-small-font-size">© <?php echo esc_html( gmdate( 'Y' ) ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:site-title {"level":0,"style":{"typography":{"fontWeight":"400"}},"fontSize":"small"} /-->

					<!-- wp:paragraph {"fontSize":"small"} -->
					<p class="has-small-font-size">-
					<?php
					printf(
						/* translators: %s: Shanti theme link. */
						esc_html__( 'Made with %s', 'shanti' ),
						'<a href="' . esc_url( 'https://themeist.com/themes/shanti/' ) . '" target="_blank" rel="noreferrer noopener">' . esc_html__( 'Shanti Theme', 'shanti' ) . '</a>'
					);
					?>
					</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
