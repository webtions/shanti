<?php
/**
 * Title: Comments
 * Description: Comments area with comments list, pagination, and comment form
 * Slug: shanti/comments
 * Categories: text
 * Keywords: comments, form, pagination
 * Block Types: core/comments
 * Post Types: wp_template
 * Template Types: single
 * Viewport Width: 1600
 * Inserter: true
 *
 * @package Shanti
 */

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"left":"var:preset|spacing|80","right":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-left: var(--wp--preset--spacing--80); padding-right: var(--wp--preset--spacing--80)">
	<!-- wp:comments {"className":"wp-block-comments-query-loop","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"0"}}}} -->
	<div class="wp-block-comments wp-block-comments-query-loop" style="margin-top: var(--wp--preset--spacing--60); margin-bottom: 0">
		<!-- wp:heading {"fontSize":"x-large"} -->
		<h2 class="wp-block-heading has-x-large-font-size"><?php echo esc_html_x( 'Comments', 'Comments section heading', 'shanti' ); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:comments-title {"level":3,"fontSize":"large"} /-->

		<!-- wp:comment-template -->
		<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group" style="margin-top: 0; margin-bottom: var(--wp--preset--spacing--60)">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group">
				<!-- wp:avatar {"size":50,"style":{"border":{"radius":"0px","width":"1px","style":"solid","color":"var(--wp--preset--color--contrast)"},"shadow":"var:preset|shadow|hard"}} /-->

				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:comment-author-name /-->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
					<div class="wp-block-group">
						<!-- wp:comment-date /-->

						<!-- wp:comment-edit-link {"fontSize":"small","textColor":"contrast-medium"} /-->
					</div>
					<!-- /wp:group -->

					<!-- wp:comment-content /-->

					<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
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
