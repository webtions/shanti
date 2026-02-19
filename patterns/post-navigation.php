<?php
/**
 * Title: Post navigation
 * Description: Previous and next post links in a two-column layout.
 * Slug: shanti/post-navigation
 * Categories: text
 * Keywords: navigation, previous, next, post
 * Block Types: core/post-navigation-link
 * Template Types: single
 * Viewport Width: 1600
 * Inserter: true
 *
 * @package Shanti
 */

?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|80","right":"var:preset|spacing|80"}},"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"bottom":{"color":"var:preset|color|background","width":"2px"},"left":{"width":"0px","style":"none"}}}} -->
<div class="wp-block-group alignwide" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--background);border-bottom-width:2px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--80)">
	<!-- wp:columns {"className":"alignwide"} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:post-navigation-link {"type":"previous","label":"<?php echo esc_attr( _x( 'Previous ', 'Post navigation label', 'shanti' ) ); ?>","showTitle":true,"linkLabel":true,"arrow":"arrow","fontSize":"medium"} /-->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%">
			<!-- wp:post-navigation-link {"textAlign":"right","label":"<?php echo esc_attr( _x( 'Next ', 'Post navigation label', 'shanti' ) ); ?>","showTitle":true,"arrow":"arrow","fontSize":"medium"} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
