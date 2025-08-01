<?php
/**
 * Theme Info page for the Shanti theme.
 *
 * @package ShantiTheme
 */

/**
 * Render the admin page under Appearance > Shanti Info.
 *
 * Displays theme information and recommended plugins.
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

	<div class="wrap">
		<h1><?php esc_html_e( 'Shanti Theme Info', 'shanti' ); ?></h1>

		<p><?php esc_html_e( 'A clean and fast WordPress block theme crafted for simplicity and clarity.', 'shanti' ); ?></p>
		<p>
			<strong><?php esc_html_e( 'Version:', 'shanti' ); ?></strong>
			<?php echo esc_html( wp_get_theme()->get( 'Version' ) ); ?><br>
			<strong><?php esc_html_e( 'Author:', 'shanti' ); ?></strong>
			<?php echo esc_html( wp_get_theme()->get( 'Author' ) ); ?><br>
			<strong><?php esc_html_e( 'Theme URI:', 'shanti' ); ?></strong>
			<a href="<?php echo esc_url( wp_get_theme()->get( 'ThemeURI' ) ); ?>" target="_blank" rel="noopener">
				<?php echo esc_html( wp_get_theme()->get( 'ThemeURI' ) ); ?>
			</a>
		</p>

		<hr>

		<h2><?php esc_html_e( 'Recommended Plugins', 'shanti' ); ?></h2>
		<div class="shanti-plugin-cards">
			<?php
			$plugin_slugs = array(
				'i-recommend-this',
				'custom-favicon',
				'koko-analytics',
			);

			if ( ! function_exists( 'plugins_api' ) ) {
				require_once ABSPATH . 'wp-admin/includes/plugin-install.php';
			}

			if ( ! function_exists( 'install_plugin_install_status' ) ) {
				require_once ABSPATH . 'wp-admin/includes/plugin-install.php';
			}

			if ( ! function_exists( 'is_plugin_active' ) ) {
				require_once ABSPATH . 'wp-admin/includes/plugin.php';
			}

			foreach ( $plugin_slugs as $slug ) {
				$slug = sanitize_key( $slug );
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
							$status = install_plugin_install_status( $plugin );

							switch ( $status['status'] ) {
								case 'install':
								case 'update_available':
									?>
									<a class="button button-primary"
									   data-slug="<?php echo esc_attr( $plugin->slug ); ?>"
									   data-name="<?php echo esc_attr( $plugin->name ); ?>"
									   href="<?php echo esc_url( $status['url'] ); ?>"
									   target="_blank" rel="noopener">
										<?php
										echo ( 'install' === $status['status'] )
											? esc_html__( 'Install Now', 'shanti' )
											: esc_html__( 'Update Now', 'shanti' );
										?>
									</a>
									<?php
									break;

								case 'latest_installed':
								case 'newer_installed':
									$plugin_file = $plugin->slug . '/' . $plugin->slug . '.php';

									if ( is_plugin_active( $plugin_file ) ) {
										echo '<span class="active-label">' . esc_html__( 'Active', 'shanti' ) . '</span>';
									} else {
										echo '<span class="active-label">' . esc_html__( 'Not Active', 'shanti' ) . '</span>';
										echo '<a class="manage-link" href="' . esc_url( admin_url( 'plugins.php' ) ) . '" target="_blank" rel="noopener">'
											. esc_html__( 'Manage Plugin', 'shanti' ) . '</a>';
									}
									break;
							}
							?>
						</div>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>
	<?php
}
