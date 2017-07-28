<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://wordpress.org/plugins/woocommerce-sms-verification/
 * @since      1.0.0
 *
 * @package    WooCommerce SMS Verification
 * @subpackage woocommerce-sms-verification/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    WooCommerce SMS Verification
 * @subpackage woocommerce-sms-verification/public
 * @author     Mahbub <mail@mahbub.me>
 */
class Woocommerce_SMS_Verification_Public {

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
	 * @param      string    $woocommerce_sms_verification       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $woocommerce_sms_verification, $version ) {

		$this->woocommerce_sms_verification = $woocommerce_sms_verification;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style( $this->woocommerce_sms_verification, plugin_dir_url( __FILE__ ) . 'css/woocommerce-sms-verification-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		wp_enqueue_script( $this->woocommerce_sms_verification, plugin_dir_url( __FILE__ ) . 'js/woocommerce-sms-verification-public.js', array( 'jquery' ), $this->version, false );

	}


	/**
	 *Add extra fields to WooCommerce registration form
	 *
	 * @since 1.0.0
	 * @author Mahbubur Rahman Rabbi <mail@mahbub.me>
	 */
	public function wsv_wooc_extra_register_fields() {
		?>
			<p class="form-row form-row-wide">
				<label for="wsv_reg_phone"><?php _e( 'Verify phone number', 'woocommerce-sms-verification' ); ?></label>
				<input type="text" class="input-text" name="wsv_reg_phone" id="wsv_reg_phone" value="<?php if ( ! empty( $_POST['wsv_reg_phone'] ) ) esc_attr_e( $_POST['wsv_reg_phone'] ); ?>" placeholder="Enter your mobile number" />
				<small>( e.g: +880123456789 )</small>
			</p>
			<div class="clear"></div>
		<?php
	}


	/**
 	* WooCommerce extra register fields validating.
 	*
 	* @since  1.0.0
 	* @author Mabubur Rahman Rabbi <mail@mahbub.me>
	*/
	public function wsv_wooc_validate_extra_register_fields( $username, $email, $validation_errors ) {
	 
	    if ( isset( $_POST['wsv_reg_phone'] ) && empty( $_POST['wsv_reg_phone'] ) ) {
	 		
	 		$validation_errors->add( 'wsv_reg_phone_error', __( '<strong>Error</strong>: Phone verify is required', 'woocommerce-sms-verification' ) );
	 
	    }
	      
	    return $validation_errors;
	}

	/**
	* Below code save extra fields.
	*
	* @since 1.0.0
	* @author Mabubur Rahman Rabbi <mail@mahbub.me>
	*/
	public function wsv_wooc_save_extra_register_fields( $customer_id ) {
	    
	    if ( isset( $_POST['wsv_reg_phone'] ) ) {
	        // Phone input filed which is used in WooCommerce
	        update_user_meta( $customer_id, 'wsv_reg_phone', sanitize_text_field( $_POST['wsv_reg_phone'] ) );
	    }
	
	}

}
