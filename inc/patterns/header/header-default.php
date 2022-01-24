<?php
/**
 * Shanti: Header with site logo, navigation
 *
 * @package Shanti
 */

return array(
	'title'      => __( 'Header with logo, site title, navigation.', 'shanti' ),
	'categories' => array( 'shanti-header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
							<div class="wp-block-group alignwide">
								
								!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var(--wp--custom--spacing--outer, 80px)","top":"var(--wp--custom--spacing--outer, 80px)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
								<div class="wp-block-group alignwide" style="padding-top:var(--wp--custom--spacing--outer, 80px);padding-bottom:var(--wp--custom--spacing--outer, 80px)">

									<!-- wp:group {"layout":{"type":"flex"}} -->
									<div class="wp-block-group">
										<!-- wp:site-logo {} /-->
										<!-- wp:site-title {"fontSize":"large"} /-->
									</div>
									<!-- /wp:group -->

									<!-- wp:navigation {"layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} /-->

								</div>
								<!-- /wp:group -->
							</div>
							<!-- /wp:group -->',
);
