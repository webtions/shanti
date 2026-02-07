<?php
/**
 * Title: Comments
 * Slug: shanti/comments
 * Categories: shanti-posts
 * Block Types: core/comments
 * Inserter: false
 * Description: Comments area with comments list, pagination, and comment form
 *
 * @package Shanti
 */

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"left":"var:preset|spacing|outer","right":"var:preset|spacing|outer"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-left: var(--wp--preset--spacing--outer); padding-right: var(--wp--preset--spacing--outer)">
	<!-- wp:comments {"className":"wp-block-comments-query-loop","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"0"}}}} -->
	<div class="wp-block-comments wp-block-comments-query-loop" style="margin-top: var(--wp--preset--spacing--x-large); margin-bottom: 0">
		<!-- wp:heading {"fontSize":"x-large"} -->
		<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Comments', 'shanti' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:comments-title {"level":3,"fontSize":"large"} /-->

		<!-- wp:comment-template -->
		<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="margin-top: 0; margin-bottom: var(--wp--preset--spacing--x-large)">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group">
				<!-- wp:avatar {"size":50,"style":{"border":{"radius":"0px","width":"1px","style":"solid","color":"var(--wp--preset--color--contrast)"},"shadow":"var:preset|shadow|hard"}} /-->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:comment-author-name /-->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:comment-date /-->

						<!-- wp:comment-edit-link {"fontSize":"small","textColor":"contrast-medium"} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:comment-content /-->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:comment-reply-link {"fontSize":"small"} /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
		<!-- /wp:comment-template -->

		<!-- wp:group {"align":"wide"} -->
		<div class="wp-block-group alignwide">
			<!-- wp:comments-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
			<!-- wp:comments-pagination-previous {"fontSize":"medium"} /-->

			<!-- wp:comments-pagination-numbers /-->

			<!-- wp:comments-pagination-next {"fontSize":"medium"} /-->
			<!-- /wp:comments-pagination -->
		</div>
		<!-- /wp:group -->

		<!-- wp:post-comments-form {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","left":"0","right":"0"}}}} /-->
	</div>
	<!-- /wp:comments -->
</div>
<!-- /wp:group -->
