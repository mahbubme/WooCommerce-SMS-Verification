<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://wordpress.org/plugins/woocommerce-sms-verification/
 * @since             1.0.0
 * @package           WooCommerce SMS Verification
 *
 * @wordpress-plugin
 * Plugin Name:       WooCommerce SMS Verification
 * Plugin URI:        https://wordpress.org/plugins/woocommerce-sms-verification/
 * Description:       Verify customer mobile number on the checkout page.
 * Version:           1.0.0
 * Author:            Mahbubur Rahman
 * Author URI:        https://mahbub.me
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       woocommerce-sms-verification
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-woocommerce-sms-verification-activator.php
 */
function activate_woocommerce_sms_verification() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-sms-verification-activator.php';
	Woocommerce_SMS_Verification_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-woocommerce-sms-verification-deactivator.php
 */
function deactivate_woocommerce_sms_verification() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-sms-verification-deactivator.php';
	Woocommerce_SMS_Verification_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_woocommerce_sms_verification' );
register_deactivation_hook( __FILE__, 'deactivate_woocommerce_sms_verification' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-woocommerce-sms-verification.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_woocommerce_sms_verification() {

	$plugin = new Woocommerce_SMS_Verification();
	$plugin->run();

}
run_woocommerce_sms_verification();
