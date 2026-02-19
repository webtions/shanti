<?php
/**
 * Title: Footer with columns
 * Description: Footer columns with site title, tagline, search, social and links.
 * Slug: shanti/footer-columns
 * Categories: footer
 * Keywords: footer, columns, social, links
 * Block Types: core/template-part/footer
 * Post Types: wp_template
 * Viewport Width: 1600
 * Inserter: true
 *
 * @package Shanti
 */

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--80)">
	<!-- wp:separator {"className":"is-style-wavy","backgroundColor":"foreground"} -->
	<hr class="wp-block-separator has-text-color has-foreground-color has-alpha-channel-opacity has-foreground-background-color has-background is-style-wavy"/>
	<!-- /wp:separator -->

	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"metadata":{"name":"footer-columns-wrapper"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
			<!-- wp:group {"metadata":{"name":"footer-columns-inner"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"default"}} -->
			<div class="wp-block-group alignwide">
				<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|80","left":"var:preset|spacing|80"}}}} -->
				<div class="wp-block-columns">
					<!-- wp:column {"width":"50%"} -->
					<div class="wp-block-column" style="flex-basis:50%">
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50","padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
						<div class="wp-block-group" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
							<!-- wp:site-title {"level":2,"fontSize":"large"} /-->
							<!-- wp:site-tagline /-->
							<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"search","width":300,"widthUnit":"px","buttonText":"Search"} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"width":"50%"} -->
					<div class="wp-block-column" style="flex-basis:50%">
						<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|80"}},"layout":{"type":"grid","columnCount":null,"minimumColumnWidth":"12rem"}} -->
						<div class="wp-block-group">
							<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
							<div class="wp-block-group" style="padding-right:0;padding-left:0">
								<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} -->
								<h3 class="wp-block-heading has-large-font-size" style="font-style:normal;font-weight:700"><?php echo esc_html_x( 'Explore', 'Footer column heading', 'shanti' ); ?></h3>
								<!-- /wp:heading -->
								<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"fontSize":"medium","layout":{"type":"flex","orientation":"vertical"},"ariaLabel":"Explore"} -->
								<!-- wp:navigation-link {"label":"About","url":"#","kind":"custom"} /-->
								<!-- wp:navigation-link {"label":"Contact","url":"#","kind":"custom"} /-->
								<!-- wp:navigation-link {"label":"Newsletter","url":"#","kind":"custom"} /-->
								<!-- wp:navigation-link {"label":"Archive","url":"#","kind":"custom"} /-->
								<!-- /wp:navigation -->
							</div>
							<!-- /wp:group -->

							<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
							<div class="wp-block-group" style="padding-right:0;padding-left:0">
								<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} -->
								<h3 class="wp-block-heading has-large-font-size" style="font-style:normal;font-weight:700"><?php echo esc_html_x( 'Categories', 'Footer column heading', 'shanti' ); ?></h3>
								<!-- /wp:heading -->
								<!-- wp:navigation {"overlayMenu":"never","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"fontSize":"medium","layout":{"type":"flex","orientation":"vertical"},"ariaLabel":"Categories"} -->
								<!-- wp:navigation-link {"label":"Journal","url":"#","kind":"custom"} /-->
								<!-- wp:navigation-link {"label":"Travel","url":"#","kind":"custom"} /-->
								<!-- wp:navigation-link {"label":"Reading","url":"#","kind":"custom"} /-->
								<!-- wp:navigation-link {"label":"Notes","url":"#","kind":"custom"} /-->
								<!-- /wp:navigation -->
							</div>
							<!-- /wp:group -->

							<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
							<div class="wp-block-group" style="padding-right:0;padding-left:0">
								<!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontSize":"large"} -->
								<h3 class="wp-block-heading has-large-font-size" style="font-style:normal;font-weight:700"><?php echo esc_html_x( 'Social', 'Footer column heading', 'shanti' ); ?></h3>
								<!-- /wp:heading -->
								<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#000000","openInNewTab":true,"showLabels":true,"className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"wrap"}} -->
								<ul class="wp-block-social-links has-visible-labels has-icon-color is-style-logos-only">
									<!-- wp:social-link {"url":"#","service":"instagram"} /-->
									<!-- wp:social-link {"url":"#","service":"tiktok"} /-->
									<!-- wp:social-link {"url":"#","service":"facebook"} /-->
									<!-- wp:social-link {"url":"#","service":"youtube"} /-->
								</ul>
								<!-- /wp:social-links -->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->

				<!-- wp:separator {"className":"is-style-wavy","backgroundColor":"foreground"} -->
				<hr class="wp-block-separator has-text-color has-foreground-color has-alpha-channel-opacity has-foreground-background-color has-background is-style-wavy"/>
				<!-- /wp:separator -->

				<!-- wp:group {"align":"full","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group alignfull">
					<!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"fontSize":"small"} -->
						<p class="has-small-font-size">© <?php echo esc_html( gmdate( 'Y' ) ); ?></p>
						<!-- /wp:paragraph -->

						<!-- wp:site-title {"level":0,"style":{"typography":{"fontWeight":"400"}},"fontSize":"small"} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:paragraph {"fontSize":"small"} -->
					<p class="has-small-font-size">
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
