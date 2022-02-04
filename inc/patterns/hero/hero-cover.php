<?php
/**
 * Shanti: Header with site logo, navigation
 *
 * @package Shanti
 */

return array(
	'title'      => __( 'Cover with text and background image', 'shanti' ),
	'categories' => array( 'shanti-hero' ),
	'blockTypes' => array( 'core/template-part/header' ),
	'content'    => '<!-- wp:cover {"url":"https://harishchouhan.test/wp-content/uploads/2022/01/website-cover.svg","dimRatio":0,"contentPosition":"center left","isDark":false,"align":"full","className":"is-position-center-left is-style-full-height shanti-header-cover","style":{"color":{"duotone":["#E5E5E5","#F8CD5F"]}}} -->
						<div class="wp-block-cover alignfull is-light has-custom-content-position is-position-center-left shanti-header-cover is-style-full-height">

							<span aria-hidden="true" class="has-background-dim-0 wp-block-cover__gradient-background has-background-dim"></span>
							<img class="wp-block-cover__image-background" alt="" src="https://harishchouhan.test/wp-content/uploads/2022/01/website-cover.svg" data-object-fit="cover"/>

							<div class="wp-block-cover__inner-container">

								<!-- wp:group {"layout":{"inherit":true}} -->
								<div class="wp-block-group">

									<!-- wp:group {"align":"wide"} -->
									<div class="wp-block-group alignwide">

										<!-- wp:group {"className":"alignwide shanti-cover-text","layout":{"inherit":false}} -->
										<div class="wp-block-group alignwide shanti-cover-text">

												<!-- wp:spacer {"height":120} -->
		<div style="height:120px" aria-hidden="true" class="wp-block-spacer"></div>
		<!-- /wp:spacer -->

											<!-- wp:heading {"level":1,"fontSize":"xx-large"} -->
											<h1 class="has-xx-large-font-size" id="a-record-of-my-journey-to-discover-the-world-and-myself">A record of my journey to discover the world and myself.</h1>
											<!-- /wp:heading -->

											<!-- wp:paragraph {"textColor":"secondary","className":"scroll-to","fontSize":"large"} -->
											<p class="scroll-to has-large-font-size has-secondary-color has-text-color"><a href="#site-content">↓</a></p>
											<!-- /wp:paragraph -->

										</div>
										<!-- /wp:group -->

									</div>
									<!-- /wp:group -->

								</div>
								<!-- /wp:group -->

							</div>

						</div>
						<!-- /wp:cover -->',
);
