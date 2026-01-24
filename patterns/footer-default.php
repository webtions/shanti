<?php
/**
 * Title: Default footer
 * Slug: shanti/footer-default
 * Categories: shanti-footer
 * Block Types: core/template-part/footer
 * Inserter: true
 */
?>

<!-- wp:group {"metadata":{"name":"footer-wrapper"},"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|outer","right":"var:preset|spacing|outer"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--outer);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--outer)">
	<!-- wp:group {"metadata":{"name":"footer-inner-wrapper"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|x-large"}},"layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:group {"metadata":{"name":"Social Links"},"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:heading {"textAlign":"center","level":3} -->
			<h3 class="wp-block-heading has-text-align-center" id="stay-in-touch">Stay in touch</h3>
			<!-- /wp:heading -->

			<!-- wp:social-links {"iconColor":"foreground","iconColorValue":"#000000","openInNewTab":true,"size":"has-large-icon-size","className":"has-icon-color has-icon-background-color is-style-logos-only","style":{"spacing":{"blockGap":"var:preset|spacing|small"},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"0px","bottomRight":"0px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
			<ul class="wp-block-social-links has-large-icon-size has-icon-color has-icon-background-color is-style-logos-only" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:0px;border-bottom-right-radius:0px">
				<!-- wp:social-link {"url":"#","service":"instagram"} /-->

				<!-- wp:social-link {"url":"#","service":"facebook"} /-->

				<!-- wp:social-link {"url":"#","service":"youtube"} /-->

				<!-- wp:social-link {"url":"#","service":"x"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:group -->

		<!-- wp:group {"metadata":{"name":"Copyright"},"align":"wide","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
		<div class="wp-block-group alignwide">
			<!-- wp:paragraph {"fontSize":"small"} -->
			<p class="has-small-font-size">© 2026</p>
			<!-- /wp:paragraph -->

			<!-- wp:site-title {"level":0,"style":{"typography":{"fontWeight":"400"}},"fontSize":"small"} /-->

			<!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size">-   Theme by <a href="https://github.com/webtions/shanti" target="_blank" rel="noreferrer noopener">Shanti</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
