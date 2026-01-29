<?php
/**
 * Title: Comments
 * Slug: shanti/comments
 * Categories: shanti-blog
 * Block Types: core/comments
 * Inserter: false
 * Description: Comments area with comments list, pagination, and comment form
 */
?>

<!-- wp:comments {"className":"wp-block-comments-query-loop","style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}}} -->
<div class="wp-block-comments wp-block-comments-query-loop" style="margin-top:var(--wp--preset--spacing--x-large);margin-bottom:var(--wp--preset--spacing--x-large)">

	<!-- wp:heading {"fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-x-large-font-size"><?php esc_html_e( 'Comments', 'shanti' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:comments-title {"level":3,"fontSize":"large"} /-->

	<!-- wp:comment-template -->
	<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--x-large)">

		<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"},"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
		<div class="wp-block-group">
			<!-- wp:avatar {"size":50,"style":{"border":{"radius":"0px","width":"1px","style":"solid","color":"var(--wp--preset--color--contrast)"},"shadow":"var:preset|shadow|hard"}} /-->

			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"constrained"}} -->
			<div class="wp-block-group">
				<!-- wp:comment-author-name /-->
				<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:comment-date /-->
					<!-- wp:comment-edit-link {"textColor":"contrast-medium","fontSize":"small"} /-->
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

	<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:comments-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
		<!-- wp:comments-pagination-previous {"fontSize":"medium"} /-->
		<!-- wp:comments-pagination-numbers /-->
		<!-- wp:comments-pagination-next {"fontSize":"medium"} /-->
		<!-- /wp:comments-pagination -->
	</div>
	<!-- /wp:group -->

	<!-- wp:post-comments-form /-->

</div>
<!-- /wp:comments -->
