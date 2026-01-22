<?php
/**
 * Title: Default footer
 * Slug: shanti/footer-default
 * Categories: shanti-footer
 * Block Types: core/template-part/footer
 */
?>

<!-- wp:group {"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|large"}}} -->
	<div class="wp-block-group alignwide"
		style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","level":3} -->
			<h3 class="wp-block-heading has-text-align-center" id="stay-in-touch">Stay in touch</h3>
			<!-- /wp:heading -->

			<!-- wp:social-links {"iconColor":"background","iconBackgroundColor":"foreground","openInNewTab":true,"className":"has-icon-color has-icon-background-color is-style-default","style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","justifyContent":"center"}} -->
			<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default">
				<!-- wp:social-link {"url":"#","service":"twitter"} /-->

				<!-- wp:social-link {"url":"#","service":"instagram"} /-->

				<!-- wp:social-link {"service":"goodreads"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|x-small"}},"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"}} -->
		<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">© 2026</p>
			<!-- /wp:paragraph -->

			<!-- wp:site-title {"level":0,"style":{"typography":{"fontWeight":"400"}},"fontSize":"small"} /-->

			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">· Theme by <a href="https://github.com/webtions/shanti" target="_blank"
					rel="noreferrer noopener">Shanti</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
