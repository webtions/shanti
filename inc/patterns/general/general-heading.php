<?php
/**
 * Shanti: Header with divider
 *
 * @package Shanti
 */

return array(
	'title'      => __( 'Header with divider.', 'shanti' ),
	'categories' => array( 'shanti-general' ),
	'blockTypes' => array( 'core/template-part/general' ),
	'content'    => '<!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
					<div class="wp-block-columns alignwide are-vertically-aligned-center">

						<!-- wp:column {"verticalAlignment":"center"} -->
						<div class="wp-block-column is-vertically-aligned-center">

							<!-- wp:heading {"fontSize":"x-large"} -->
							<h2 class="has-x-large-font-size">Latest posts<br>about travel</h2>
							<!-- /wp:heading -->

						</div>
						<!-- /wp:column -->

						<!-- wp:column {"verticalAlignment":"center","style":{"spacing":{"padding":{"top":"0rem","bottom":"0rem","right":"0rem","left":"0rem"}}}} -->
						<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0rem;padding-right:0rem;padding-bottom:0rem;padding-left:0rem">

							<!-- wp:separator {"color":"primary","className":"is-style-wide"} -->
							<hr class="wp-block-separator has-text-color has-background has-primary-background-color has-primary-color is-style-wide"/>
							<!-- /wp:separator -->

							<!-- wp:paragraph {"align":"right"} -->
							<p class="has-text-align-right">List of posts</p>
							<!-- /wp:paragraph -->

						</div>
						<!-- /wp:column -->
					</div>
					<!-- /wp:columns -->',
);
