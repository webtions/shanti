<?php
/**
 * Theme Info page for the Shanti theme.
 *
 * @package Shanti
 */

/**
 * Render the admin page under Appearance > Recommended Plugins.
 *
 * Displays recommended plugins and more plugins we recommend.
 *
 * @return void
 */
function shanti_theme_info_page() {
	?>
<style>
	/**
	 * Styles for Recommended Plugins section in Shanti Theme Info admin page.
	 */

	.shanti-plugin-cards {
		display: flex;
		flex-wrap: wrap;
		gap: 24px;
		margin-top: 24px;
	}

	.shanti-plugin-card {
		display: flex;
		flex: 1 1 calc(33.333% - 24px);
		min-width: 280px;
		max-width: 380px;
		align-items: flex-start;
		gap: 20px;
		padding: 20px;
		border: 1px solid #ccd0d4;
		border-radius: 8px;
		background: #fff;
		box-sizing: border-box;
		transition: box-shadow 0.2s ease-in-out, transform 0.2s ease-in-out;
	}

	.shanti-plugin-card:hover {
		box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
		transform: translateY(-2px);
	}

	.shanti-plugin-icon {
		width: 64px;
		height: 64px;
		flex-shrink: 0;
	}

	.shanti-plugin-icon img {
		width: 64px;
		height: 64px;
		object-fit: contain;
		border-radius: 4px;
	}

	.shanti-plugin-details {
		display: flex;
		flex-direction: column;
		flex: 1;
		min-width: 0; /* Fixes overflow in flex layout */
	}

	.shanti-plugin-details h3 {
		margin: 0 0 8px;
		font-size: 15px;
		font-weight: 600;
		line-height: 1.4;
	}

	.shanti-plugin-details p {
		margin: 0 0 12px;
		font-size: 14px;
		color: #444;
		line-height: 1.5;
	}

	.plugin-actions {
		margin-top: auto;
		display: flex;
		flex-wrap: wrap;
		gap: 12px;
		align-items: center;
	}

	.plugin-actions .button,
	.plugin-actions .active-label {
		min-height: 36px;
		line-height: 1.4;
		font-size: 13px;
		padding: 0 16px;
		display: inline-flex;
		align-items: center;
		justify-content: center;
	}

	.plugin-actions .active-label {
		background: #e5e5e5;
		color: #333;
		border-radius: 4px;
	}

	.plugin-actions .manage-link {
		font-size: 13px;
		color: #0073aa;
		text-decoration: none;
		display: inline-flex;
		align-items: center;
	}

	.plugin-actions .manage-link:hover {
		text-decoration: underline;
	}

	.shanti-theme-link-wrap {
		margin: 8px 0 24px;
	}

	.shanti-theme-link {
		text-decoration: none;
	}

	.shanti-theme-link .dashicons {
		font-size: 16px;
		width: 16px;
		height: 16px;
		margin-left: 4px;
		vertical-align: middle;
	}

	.shanti-recommended-intro {
		margin: 0 0 16px;
		color: #50575e;
		font-size: 14px;
		line-height: 1.6;
	}

	.shanti-section-divider {
		margin: 48px 0 0;
	}

	.shanti-plugins-more {
		margin-top: 24px;
	}

	@media (max-width: 768px) {
		.shanti-plugin-card {
			flex: 1 1 100%;
		}
	}

	[dir="rtl"] .shanti-plugin-card {
		flex-direction: row-reverse;
	}

	[dir="rtl"] .plugin-actions .manage-link {
		direction: rtl;
	}
</style>

	<?php
			$recommended_slugs = array( 'build-mode', 'i-recommend-this', 'social-sharing-block', 'safe-svg' );
			$suggested_slugs   = array( 'custom-favicon', 'koko-analytics' );

	if ( ! function_exists( 'plugins_api' ) ) {
		require_once ABSPATH . 'wp-admin/includes/plugin-install.php';
	}

	if ( ! function_exists( 'install_plugin_install_status' ) ) {
		require_once ABSPATH . 'wp-admin/includes/plugin-install.php';
	}

	if ( ! function_exists( 'is_plugin_active' ) ) {
		require_once ABSPATH . 'wp-admin/includes/plugin.php';
	}

			$recommended_plugins = array();
	foreach ( $recommended_slugs as $slug ) {
		$slug          = sanitize_key( $slug );
		$transient_key = 'shanti_plugin_info_' . $slug;
		$plugin        = get_transient( $transient_key );
		if ( false === $plugin ) {
			$plugin = plugins_api(
				'plugin_information',
				array(
					'slug'   => $slug,
					'fields' => array(
						'short_description' => true,
						'icons'             => true,
					),
				)
			);
			if ( is_wp_error( $plugin ) || ! is_object( $plugin ) ) {
				continue;
			}
			set_transient( $transient_key, $plugin, HOUR_IN_SECONDS );
		}
		$icon = '';
		if ( ! empty( $plugin->icons ) && is_array( $plugin->icons ) ) {
			$icon = isset( $plugin->icons['default'] ) ? $plugin->icons['default'] : ( isset( $plugin->icons['1x'] ) ? $plugin->icons['1x'] : '' );
		}
		$recommended_plugins[] = array(
			'plugin' => $plugin,
			'icon'   => $icon,
		);
	}
	?>

	<div class="wrap">
		<h1><?php esc_html_e( 'Recommended Plugins', 'shanti' ); ?></h1>
		<p class="shanti-recommended-intro">
			<?php esc_html_e( 'Shanti is designed to work seamlessly with the plugins below. We highly recommend them, especially Social Sharing Block and I Recommend This, which have enhanced integration with the theme.', 'shanti' ); ?>
		</p>
		<?php
		$theme_uri = wp_get_theme()->get( 'ThemeURI' );
		if ( $theme_uri ) :
			?>
		<p class="shanti-theme-link-wrap">
			<a href="<?php echo esc_url( $theme_uri ); ?>" class="button button-primary shanti-theme-link" target="_blank" rel="noopener">
				<?php esc_html_e( 'View Shanti theme page', 'shanti' ); ?>
				<span class="dashicons dashicons-external" aria-hidden="true"></span>
			</a>
		</p>
		<?php endif; ?>

		<hr>

		<h2><?php esc_html_e( 'Recommended Plugins', 'shanti' ); ?></h2>
		<div class="shanti-plugin-cards">
			<?php
			foreach ( $recommended_plugins as $item ) {
				$plugin         = $item['plugin'];
				$icon           = $item['icon'];
				$requires_php   = isset( $plugin->requires_php ) ? $plugin->requires_php : '';
				$requires_wp    = isset( $plugin->requires ) ? $plugin->requires : '';
				$compatible_php = is_php_version_compatible( $requires_php );
				$compatible_wp  = is_wp_version_compatible( $requires_wp );
				?>
			<div class="shanti-plugin-card">
				<div class="shanti-plugin-icon">
					<?php if ( $icon ) : ?>
						<img src="<?php echo esc_url( $icon ); ?>" alt="">
					<?php endif; ?>
				</div>
				<div class="shanti-plugin-details">
					<h3><?php echo esc_html( $plugin->name ); ?></h3>
					<p><?php echo wp_kses_post( $plugin->short_description ); ?></p>
					<div class="plugin-actions">
						<?php
						echo wp_kses_post( wp_get_plugin_action_button( $plugin->name, $plugin, $compatible_php, $compatible_wp ) );
						?>
					</div>
				</div>
			</div>
				<?php
			}
			?>
		</div>

		<hr class="shanti-section-divider">

		<div class="shanti-plugins-more">
		<h2><?php esc_html_e( 'More plugins we recommend', 'shanti' ); ?></h2>
		<div class="shanti-plugin-cards">
			<?php
			foreach ( $suggested_slugs as $slug ) {
				$slug          = sanitize_key( $slug );
				$transient_key = 'shanti_plugin_info_' . $slug;

				$plugin = get_transient( $transient_key );

				if ( false === $plugin ) {
					$plugin = plugins_api(
						'plugin_information',
						array(
							'slug'   => $slug,
							'fields' => array(
								'short_description' => true,
								'icons'             => true,
							),
						)
					);

					if ( is_wp_error( $plugin ) || ! is_object( $plugin ) ) {
						continue;
					}

					set_transient( $transient_key, $plugin, HOUR_IN_SECONDS );
				}

				$icon = '';
				if ( ! empty( $plugin->icons ) && is_array( $plugin->icons ) ) {
					if ( isset( $plugin->icons['default'] ) ) {
						$icon = $plugin->icons['default'];
					} elseif ( isset( $plugin->icons['1x'] ) ) {
						$icon = $plugin->icons['1x'];
					}
				}

				?>
				<div class="shanti-plugin-card">
					<div class="shanti-plugin-icon">
						<?php if ( $icon ) : ?>
							<img src="<?php echo esc_url( $icon ); ?>" alt="">
						<?php endif; ?>
					</div>
					<div class="shanti-plugin-details">
						<h3><?php echo esc_html( $plugin->name ); ?></h3>
						<p><?php echo wp_kses_post( $plugin->short_description ); ?></p>

						<div class="plugin-actions">
							<?php
							$requires_php   = isset( $plugin->requires_php ) ? $plugin->requires_php : '';
							$requires_wp    = isset( $plugin->requires ) ? $plugin->requires : '';
							$compatible_php = is_php_version_compatible( $requires_php );
							$compatible_wp  = is_wp_version_compatible( $requires_wp );
							echo wp_kses_post( wp_get_plugin_action_button( $plugin->name, $plugin, $compatible_php, $compatible_wp ) );
							?>
						</div>
					</div>
				</div>
				<?php
			}
			?>
		</div>
		</div>
	</div>
	<?php
}
