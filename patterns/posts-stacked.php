<?php
/**
 * Title: Posts Stacked
 * Description: Query loop with one post per row: image and content in two columns.
 * Slug: shanti/posts-stacked
 * Categories: posts
 * Keywords: query, loop, posts, blog
 * Block Types: core/query
 * Post Types: page, wp_template
 * Viewport Width: 1600
 * Inserter: true
 *
 * @package Shanti
 */

?>

<!-- wp:query {"query":{"perPage":9,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide">

	<!-- wp:post-template {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|60"}},"layout":{"type":"default"}} -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">

		<!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|80"}}} -->
		<div class="wp-block-columns">

			<!-- wp:column {"width":"40%"} -->
			<div class="wp-block-column" style="flex-basis:40%">
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/5","width":"100%"} /-->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"60%"} -->
			<div class="wp-block-column" style="flex-basis:60%">
				<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left"}} -->
				<div class="wp-block-group">
					<!-- wp:post-title {"level":2,"isLink":true,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}}} /-->

					<!-- wp:post-excerpt {"excerptLength":34,"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}}} /-->

					<!-- wp:pattern {"slug":"shanti/hidden-post-meta"} /-->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

	</div>
	<!-- /wp:group -->

	<!-- /wp:post-template -->

	<!-- wp:pattern {"slug":"shanti/hidden-query-no-results"} /-->

	<!-- wp:pattern {"slug":"shanti/hidden-query-pagination"} /-->

</div>
<!-- /wp:query -->
