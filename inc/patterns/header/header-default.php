<?php
/**
 * Shanti: Header with site logo, title, navigation
 *
 * @package Shanti
 */

return array(
	'title'      => __( 'Header with logo, site title, navigation.', 'shanti' ),
	'categories' => array( 'shanti-header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"layout":{"inherit":true}} -->
							<div class="wp-block-group">
								
								<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
								<div class="wp-block-group alignwide">

									<!-- wp:group {"layout":{"type":"flex"}} -->
									<div class="wp-block-group">
										<!-- wp:site-logo {} /-->
										<!-- wp:site-title {"fontSize":"large"} /-->
									</div>
									<!-- /wp:group -->

									<!-- wp:navigation {"isResponsive":true,"layout":{"type":"flex","orientation":"horizontal","justifyContent":"right"}} /-->

								</div>
								<!-- /wp:group -->
							</div>
							<!-- /wp:group -->',
);
