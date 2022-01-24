<?php
/**
 * Shanti: Footer with social links & copyright text
 *
 * @package Shanti
 */

return array(
	'title'      => __( 'Default footer', 'shanti' ),
	'categories' => array( 'shanti-footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
	'content'    => '<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"4rem","bottom":"4rem"}}}} -->
					<div class="wp-block-group alignwide" style="padding-top:4rem;padding-bottom:4rem">

						<!-- wp:separator {"className":"is-style-default"} -->
						<hr class="wp-block-separator aligncenter is-style-default"/>
						<!-- /wp:separator -->
						
						<!-- wp:spacer {"height":"40px"} -->
						<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
						<!-- /wp:spacer -->

						<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"28px"}}} -->
						<p class="has-text-align-center" style="font-size:28px">Stay in touch</p>
						<!-- /wp:paragraph -->

						<!-- wp:spacer {"height":"16px"} -->
						<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
						<!-- /wp:spacer -->

						<!-- wp:social-links {"iconColor":"background","iconColorValue":"#ffffff","iconBackgroundColor":"foreground","iconBackgroundColorValue":"#000000","openInNewTab":true,"className":"has-icon-color has-icon-background-color is-style-default","layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"blockGap":"20px"}}} -->
						<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default">
							<!-- wp:social-link {"url":"#","service":"twitter"} /-->
							<!-- wp:social-link {"url":"#","service":"instagram"} /-->
							<!-- wp:social-link {"service":"goodreads"} /-->
						</ul>
						<!-- /wp:social-links -->

						<!-- wp:spacer {"height":80} -->
						<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
						<!-- /wp:spacer -->

						<!-- wp:group {"layout":{"type":"flex","justifyContent":"center"}} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"fontSize":"small"} -->
								<p class="has-small-font-size"><strong>© 2022</strong> </p>
							<!-- /wp:paragraph -->
							<!-- wp:site-title {"level":0,"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"small"} /-->
						</div>
						<!-- /wp:group -->
						<!-- wp:group {} -->
						<div class="wp-block-group">
							<!-- wp:paragraph {"fontSize":"small"} -->
							<p class="has-text-align-center" style="font-size:16px">Made with <a href="https://wordpress.org" target="_blank" rel="noreferrer noopener">WordPress</a> & <a href="https://github.com/webtions/shanti" target="_blank" rel="noreferrer noopener">Shanti theme</a>.</p>
							<!-- /wp:paragraph -->
						</div>
						<!-- /wp:group -->

					</div>
					<!-- /wp:group -->',
);
