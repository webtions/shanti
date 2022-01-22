<?php
/**
 * Shanti: Header with site logo, navigation
 *
 * @package Shanti
 */

return array(
	'title'      => __( 'Header with logo, navigation.', 'shanti' ),
	'categories' => array( 'shanti-header' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
							<div class="wp-block-group alignwide">
								
								<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"var(--wp--custom--spacing--large, 8rem)","top":"var(--wp--custom--spacing--small, 1.25rem)"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
								<div class="wp-block-group alignwide" style="padding-top:var(--wp--custom--spacing--small, 1.25rem);padding-bottom:var(--wp--custom--spacing--large, 8rem)">

									<!-- wp:group {"layout":{"type":"flex"}} -->
									<div class="wp-block-group">
										<!-- wp:site-logo {} /-->
									</div>
									<!-- /wp:group -->

									<!-- wp:navigation {} /-->

								</div>
								<!-- /wp:group -->
							</div>
							<!-- /wp:group -->',
);
