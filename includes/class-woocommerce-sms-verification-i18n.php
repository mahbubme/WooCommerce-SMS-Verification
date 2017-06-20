<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://wordpress.org/plugins/woocommerce-sms-verification/
 * @since      1.0.0
 *
 * @package    WooCommerce SMS Verification
 * @subpackage woocommerce-sms-verification/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    WooCommerce SMS Verification
 * @subpackage woocommerce-sms-verification/includes
 * @author     Mahbub <mail@mahbub.me>
 */
class Woocommerce_SMS_Verification_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'woocommerce-sms-verification',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
