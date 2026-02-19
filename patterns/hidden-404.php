<?php
/**
 * Title: 404
 * Description: Content for the 404 not found page.
 * Slug: shanti/hidden-404
 * Categories: pages
 * Keywords: pages, 404
 * Post Types: wp_template
 * Template Types: 404
 * Viewport Width: 1600
 * Inserter: no
 *
 * @package Shanti
 */

?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/shanti-cover.svg","dimRatio":0,"contentPosition":"center center","isDark":false,"align":"full","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull is-light"><img class="wp-block-cover__image-background" alt="" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/shanti-cover.svg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","level":1} -->
<h1 class="wp-block-heading has-text-align-center"><?php echo esc_html_x( '404', '404 page heading', 'shanti' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
<p class="has-text-align-center has-medium-font-size"><?php echo esc_html_x( 'This page no longer exists. The rest of the site is still here. Use the search, or return to the homepage.', '404 page body text', 'shanti' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:spacer {"height":"var:preset|spacing|30"} -->
<div style="height:var(--wp--preset--spacing--30)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:search {"label":"<?php echo esc_attr( __( 'Search', 'shanti' ) ); ?>","showLabel":false,"placeholder":"<?php echo esc_attr( __( 'Search', 'shanti' ) ); ?>","buttonText":"<?php echo esc_attr( __( 'Search', 'shanti' ) ); ?>","buttonUseIcon":true,"align":"center"} /-->

<!-- wp:spacer {"height":"var:preset|spacing|20"} -->
<div style="height:var(--wp--preset--spacing--20)" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-ghost"} -->
<div class="wp-block-button is-style-ghost"><a class="wp-block-button__link wp-element-button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html_x( 'Return to Homepage', '404 page button', 'shanti' ); ?> <span class="shanti-icon shanti-icon-return" aria-hidden="true"></span></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->
