<?php
/**
 * Title: Featured + 4 Recent Posts (Side-by-Side)
 * Slug: shanti/posts-featured
 * Categories: shanti-blog
 * Inserter: true
 */
?>

<!-- wp:columns {"align":"wide","className":"shanti-featured-wrapper"} -->
<div class="wp-block-columns alignwide shanti-featured-wrapper">

	<!-- wp:column {"width":"60%"} -->
	<div class="wp-block-column" style="flex-basis:60%">

		<!-- wp:query {"query":{"perPage":1,"postType":"post","order":"desc","orderBy":"date"},"displayLayout":{"type":"list"},"layout":{"type":"default"}} -->
		<div class="wp-block-query">

			<!-- wp:post-template -->
				<!-- wp:group {"className":"shanti-featured-post"} -->
				<div class="wp-block-group shanti-featured-post">

					<!-- wp:post-featured-image {"aspectRatio":"3/4","isLink":true,"width":"100%"} /-->
					<!-- wp:post-title {"isLink":true,"fontSize":"x-large"} /-->
					<!-- wp:post-excerpt {"moreText":"Read More"} /-->
					<!-- wp:post-date {"format":"F j, Y"} /-->

				</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->

		</div>
		<!-- /wp:query -->

	</div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"40%"} -->
	<div class="wp-block-column" style="flex-basis:40%">

		<!-- wp:query {"query":{"perPage":4,"postType":"post","order":"desc","orderBy":"date","offset":1},"displayLayout":{"type":"list"},"layout":{"type":"default"}} -->
		<div class="wp-block-query">

			<!-- wp:post-template -->
				<!-- wp:group {"className":"shanti-small-post"} -->
				<div class="wp-block-group shanti-small-post">

					<!-- wp:columns -->
					<div class="wp-block-columns">
						<!-- wp:column {"width":"40%"} -->
						<div class="wp-block-column" style="flex-basis:40%">
							<!-- wp:post-featured-image {"aspectRatio":"3/4","isLink":true,"width":"100%"} /-->
						</div>
						<!-- /wp:column -->

						<!-- wp:column -->
						<div class="wp-block-column">
							<!-- wp:post-title {"isLink":true} /-->
							<!-- wp:post-date {"format":"F j, Y"} /-->
						</div>
						<!-- /wp:column -->
					</div>
					<!-- /wp:columns -->

				</div>
				<!-- /wp:group -->
			<!-- /wp:post-template -->

		</div>
		<!-- /wp:query -->

	</div>
	<!-- /wp:column -->

</div>
<!-- /wp:columns -->
