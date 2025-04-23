<?php
/**
 * Plugin Name: Shiptastic integration for UPS
 * Plugin URI: https://vendidero.com/doc/shiptastic/integrate-with-ups
 * Description: Seamlessly integrate UPS with Shiptastic and create labels from within your admin dashboard.
 * Author: vendidero
 * Author URI: https://vendidero.com
 * Version: 1.0.1
 * Requires PHP: 7.0
 * License: GPLv3
 * Requires Plugins: shiptastic-for-woocommerce
 *
 * Text Domain: shiptastic-integration-for-ups
 * Domain Path: /i18n/languages/
 */
defined( 'ABSPATH' ) || exit;

if ( version_compare( PHP_VERSION, '7.0.0', '<' ) ) {
	return;
}

$autoloader = __DIR__ . '/vendor/autoload_packages.php';

if ( is_readable( $autoloader ) ) {
	require $autoloader;
} else {
	return;
}

register_activation_hook( __FILE__, array( '\Vendidero\Shiptastic\UPS\Package', 'install' ) );
add_action( 'plugins_loaded', array( '\Vendidero\Shiptastic\UPS\Package', 'init' ) );
