<?php
/**
 * Title: Homepage
 * Description: Homepage pattern with fullscreen hero cover & featured posts.
 * Slug: shanti/page-home
 * Categories: shanti-page
 * Keywords: home, front page, layout
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Template Types: page, front-page
 * Viewport Width: 1600
 * Inserter: true
 *
 * @package Shanti
 */

?>

<!-- wp:group {"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull">
<!-- wp:pattern {"slug":"shanti/hero-cover"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"anchor":"home-content","align":"full","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div id="home-content" class="wp-block-group alignfull" style="margin-top:0;margin-bottom:0">
	<!-- wp:pattern {"slug":"shanti/posts-showcase"} /-->

	<!-- wp:pattern {"slug":"shanti/posts-grid-3-cols"} /-->

</div>
<!-- /wp:group -->
