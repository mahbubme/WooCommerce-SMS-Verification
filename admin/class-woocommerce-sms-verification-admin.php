<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://wordpress.org/plugins/woocommerce-sms-verification/
 * @since      1.0.0
 *
 * @package    WooCommerce SMS Verification
 * @subpackage woocommerce-sms-verification/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    WooCommerce SMS Verification
 * @subpackage woocommerce-sms-verification/admin
 * @author     Mahbub <mail@mahbub.me>
 */
class Woocommerce_SMS_Verification_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $woocommerce_sms_verification    The ID of this plugin.
	 */
	private $woocommerce_sms_verification;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $woocommerce_sms_verification       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $woocommerce_sms_verification, $version ) {

		$this->woocommerce_sms_verification = $woocommerce_sms_verification;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Woocommerce_SMS_Verification_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Woocommerce_SMS_Verification_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->woocommerce_sms_verification, plugin_dir_url( __FILE__ ) . 'css/woocommerce-sms-verification-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Woocommerce_SMS_Verification_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Woocommerce_SMS_Verification_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->woocommerce_sms_verification, plugin_dir_url( __FILE__ ) . 'js/woocommerce-sms-verification-admin.js', array( 'jquery' ), $this->version, false );

	}

}
