<?php
/**
 * File containing Sensei_Extensions class.
 *
 * @package Sensei\Admin
 * @since 2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Sensei_Extensions class.
 *
 * All functionality pertaining to the admin area's extension directory.
 *
 * @since 2.0.0
 */
final class Sensei_Extensions {
	const SENSEILMS_PRODUCTS_API_BASE_URL = 'https://senseilms.com/wp-json/senseilms-products/1.0';

	/**
	 * Instance of class.
	 *
	 * @var self
	 */
	private static $instance;

	/**
	 * Courses constructor. Prevents other instances from being created outside of `Sensei_Extensions::instance()`.
	 */
	private function __construct() {}

	/**
	 * Initializes the class and adds all filters and actions related to the extension directory.
	 *
	 * @since 2.0.0
	 */
	public function init() {
		add_action( 'admin_enqueue_scripts', array( $this, 'enqueue_admin_assets' ) );
		add_action( 'admin_menu', array( $this, 'add_admin_menu_item' ), 60 );
	}

	/**
	 * Enqueues admin scripts when needed on different screens.
	 *
	 * @since  2.0.0
	 * @access private
	 */
	public function enqueue_admin_assets() {
		$screen = get_current_screen();
		if ( in_array( $screen->id, [ 'sensei-lms_page_sensei-extensions' ], true ) ) {
			if ( Sensei()->feature_flags->is_enabled( 'extensions_management_enhancement' ) ) {
				Sensei()->assets->enqueue( 'sensei-extensions', 'extensions/index.js', [], true );
				Sensei()->assets->enqueue( 'sensei-extensions-style', 'extensions/extensions.css' );

				return;
			}

			Sensei()->assets->enqueue( 'sensei-admin-extensions', 'css/extensions.css', [], 'screen' );
		}
	}

	/**
	 * Call API to get Sensei extensions.
	 *
	 * @since  2.0.0
	 * @since  3.1.0 The method is public.
	 *
	 * @param  string $type                  Product type ('plugin' or 'theme').
	 * @param  string $category              Category to fetch (null = all).
	 * @param  string $additional_query_args Additional query arguments.
	 * @return array
	 */
	public function get_extensions( $type = null, $category = null, $additional_query_args = [] ) {
		$extension_request_key = md5( $type . '|' . $category . '|' . wp_json_encode( $additional_query_args ) );
		$extensions            = get_transient( 'sensei_extensions_' . $extension_request_key );

		if ( false === $extensions ) {
			$url = add_query_arg(
				[
					array_merge(
						[
							'category' => $category,
							'type'     => $type,
						],
						$additional_query_args
					),
				],
				self::SENSEILMS_PRODUCTS_API_BASE_URL . '/search'
			);

			$raw_extensions = wp_safe_remote_get( $url );
			if ( ! is_wp_error( $raw_extensions ) ) {
				$json       = json_decode( wp_remote_retrieve_body( $raw_extensions ) );
				$extensions = isset( $json->products ) ? $json->products : [];

				set_transient( 'sensei_extensions_' . $extension_request_key, $extensions, DAY_IN_SECONDS );
			}
		}

		if ( 'plugin' === $type ) {
			return $this->add_installed_extensions_properties( $extensions );
		}

		return $extensions;
	}

	/**
	 * Map the extensions array, adding the installed properties.
	 *
	 * @param array $extensions Extensions.
	 *
	 * @return array Extensions with installed properties.
	 */
	private function add_installed_extensions_properties( $extensions ) {
		require_once ABSPATH . 'wp-admin/includes/plugin.php';

		$installed_plugins = get_plugins();

		// Includes installed version, and whether it has update.
		$extensions = array_map(
			function( $extension ) use ( $installed_plugins ) {
				if ( isset( $installed_plugins[ $extension->plugin_file ] ) ) {
					$extension->installed_version = $installed_plugins[ $extension->plugin_file ]['Version'];
					$extension->has_update        = isset( $extension->version ) && version_compare( $extension->version, $extension->installed_version, '>' );
				}

				return $extension;
			},
			$extensions
		);

		return $extensions;
	}

	/**
	 * Get resources (such as categories and product types) for the extensions screen.
	 *
	 * @since  2.0.0
	 *
	 * @return array of objects.
	 */
	private function get_resources() {
		$extension_resources = get_transient( 'sensei_extensions_resources' );
		if ( false === $extension_resources ) {
			$raw_resources = wp_safe_remote_get(
				add_query_arg(
					array(
						'version' => Sensei()->version,
						'lang'    => get_locale(),
					),
					self::SENSEILMS_PRODUCTS_API_BASE_URL . '/resources'
				)
			);
			if ( ! is_wp_error( $raw_resources ) ) {
				$extension_resources = json_decode( wp_remote_retrieve_body( $raw_resources ) );
				if ( $extension_resources ) {
					set_transient( 'sensei_extensions_resources', $extension_resources, DAY_IN_SECONDS );
				}
			}
		}

		return $extension_resources;
	}

	/**
	 * Get messages for the extensions page.
	 *
	 * @since  2.0.0
	 *
	 * @return array
	 */
	private function get_messages() {
		$transient_key      = implode( '_', [ 'sensei_extensions_messages', Sensei()->version, get_locale() ] );
		$extension_messages = get_transient( $transient_key );
		if ( false === $extension_messages ) {
			$raw_messages = wp_safe_remote_get(
				add_query_arg(
					array(
						'version' => Sensei()->version,
						'lang'    => get_locale(),
					),
					self::SENSEILMS_PRODUCTS_API_BASE_URL . '/messages'
				)
			);

			if ( ! is_wp_error( $raw_messages ) ) {
				$extension_messages = json_decode( wp_remote_retrieve_body( $raw_messages ) );
				if ( $extension_messages ) {
					set_transient( $transient_key, $extension_messages, DAY_IN_SECONDS );
				}
			}
		}

		return $extension_messages;
	}

	/**
	 * Get updates count.
	 *
	 * @return int Updates count.
	 */
	private function get_has_update_count() {
		$extensions = $this->get_extensions( 'plugin' );

		return count(
			array_filter(
				array_column( $extensions, 'has_update' )
			)
		);
	}

	/**
	 * Adds the menu item for the Extensions page.
	 *
	 * @since  2.0.0
	 * @access private
	 */
	public function add_admin_menu_item() {
		$updates_html = '';

		if ( Sensei()->feature_flags->is_enabled( 'extensions_management_enhancement' ) ) {
			$updates = $this->get_has_update_count();

			if ( $updates > 0 ) {
				$updates_html = ' <span class="awaiting-mod">' . esc_html( $updates ) . '</span>';
			}
		}

		add_submenu_page(
			'sensei',
			__( 'Sensei LMS Extensions', 'sensei-lms' ),
			__( 'Extensions', 'sensei-lms' ) . $updates_html,
			'install_plugins',
			'sensei-extensions',
			[ $this, 'render' ]
		);
	}

	/**
	 * Renders the extensions page.
	 *
	 * @since  2.0.0
	 * @access private
	 */
	public function render() {
		if ( Sensei()->feature_flags->is_enabled( 'extensions_management_enhancement' ) ) {
			echo '<div id="sensei-extensions-page" class="sensei-extensions-page"></div>';
			return;
		}

		// phpcs:ignore WordPress.Security.NonceVerification
		$category = isset( $_GET['category'] ) ? sanitize_text_field( $_GET['category'] ) : null;

		// phpcs:ignore WordPress.Security.NonceVerification
		$type = isset( $_GET['type'] ) ? sanitize_text_field( $_GET['type'] ) : null;

		// phpcs:disable VariableAnalysis.CodeAnalysis.VariableAnalysis.UnusedVariable -- used in view
		$messages   = $this->get_messages();
		$resources  = $this->get_resources();
		$extensions = $this->get_extensions( $type, $category );
		// phpcs:enable

		sensei_log_event(
			'extensions_view',
			[
				'view' => $category ? $category : '_all',
			]
		);

		include_once dirname( __FILE__ ) . '/views/html-admin-page-extensions.php';
	}

	/**
	 * Fetches an instance of the class.
	 *
	 * @return self
	 */
	public static function instance() {
		if ( ! self::$instance ) {
			self::$instance = new self();
		}
		return self::$instance;
	}

}
