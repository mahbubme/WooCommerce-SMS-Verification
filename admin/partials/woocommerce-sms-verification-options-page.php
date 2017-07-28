<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://wordpress.org/plugins/woocommerce-sms-verification/
 * @since      1.0.0
 *
 * @package    WooCommerce SMS Verification
 * @subpackage woocommerce-sms-verification/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<?php 

	$active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'wsv-general-options'; 

?>

<h2><?php esc_attr_e( 'WooCommerce SMS Verification', 'woocommerce-sms-verification' ); ?></h2>
<h2 class="nav-tab-wrapper">
	<a href="?page=woocommerce-sms-verification&tab=wsv-general-options" class="nav-tab <?php echo  $active_tab == 'wsv-general-options' ? 'nav-tab-active' : ''; ?>" id="wsv-general-options-tab"><?php _e( 'General Options', 'woocommerce-sms-verification' ); ?></a>
	<a href="?page=woocommerce-sms-verification&tab=wsv-gateways" class="nav-tab <?php echo  $active_tab == 'wsv-gateways' ? 'nav-tab-active' : ''; ?>" id="wsv-gateways-tab"><?php _e( 'SMS Gateways', 'woocommerce-sms-verification' ); ?></a>
</h2>

<div class="wrap">

	<div id="icon-options-general" class="icon32"></div>

	<div id="poststuff">

		<div id="post-body" class="metabox-holder">

			<!-- main content -->
			<div id="post-body-content">

				<div class="meta-box-sortables ui-sortable">

					<div class="postbox">
							
						<?php if( $active_tab == 'wsv-general-options' ) : ?>

							<div class="inside">
								
								<?php 

									// if ( isset( $_POST['submit'] ) ) {
									// 	if ( isset( $_POST['number'] ) &&  isset( $_POST['message'] ) ) {
										
									// 		$client = new Twilio\Rest\Client( $twilio_account_sid, $twilio_auth_token );

									// 		$client->messages->create( 
									// 			$_POST['number'], 
									// 			array(
								 //        			'from' => $twilio_phone_number,
								 //        			'body' => $_POST['message']
								 //    			) 
								 //    		);

									// 		echo "<h3 class='text-center bg-success'>Message has been sent</h3>";

									// 	}
									// }

								?>

							    <form name="" method="post" action="">
									<table class="form-table">
										<tr>
											<td>
												<label for="wsv_enable_register_verification">
													<input name="wsv_enable_register_verification" type="checkbox" id="wsv_enable_register_verification" value="1" />
													<span><?php esc_attr_e( 'Enable SMS verification while user registering using WooCommerce registration form', 'woocommerce-sms-verification' ); ?></span>
												</label>
											</td>
										</tr>
										<tr>
											<td>
												<label for="wsv_enable_checkout_verification">
													<input name="wsv_enable_checkout_verification" type="checkbox" id="wsv_enable_checkout_verification" value="1" />
													<span><?php esc_attr_e( 'Enable WooCommerce checkout verfication', 'woocommerce-sms-verification' ); ?></span>
												</label>
											</td>
										</tr>

										<!-- <tr>
											<td>
												<label for="number"><?php _e( 'Number', 'woocommerce-sms-verification' ); ?></label>
											</td>
											<td>
												<input type="text" name="number" id="number" class="regular-text" />
											</td>
										</tr>
										<tr>
											<td>
												<label for="message"><?php _e( 'Message', 'woocommerce-sms-verification' ); ?></label>
											</td>
											<td>
												<textarea id="" name="message" cols="80" rows="10" class="all-options"></textarea>
											</td>
										</tr> -->
									</table>

									<p>
										<input class="button-primary" type="submit" name="submit" value="Send" />	
									</p>
								</form>
							</div>
							<!-- .inside -->

						<?php else : ?>
							
							<div class="inside">
								
								<form name="wsv_gateways_form" method="post" action="">
									<input type="hidden" name="wsv_gateways_form_submitted" value="Y">
									<table class="form-table">
										<tr>
											<td>
												<h4><?php _e( 'Enable the SMS gateway from the following available gateways.', 'woocommerce-sms-verification' ); ?></h4>
												<label>
													<input type="radio" name="wsv_enable_sms_gateway" value="twilio" />
													<span><?php esc_attr_e( 'Enable Twilio', 'woocommerce-sms-verification' ); ?></span>
												</label>
												<label>
													<input type="radio" name="wsv_enable_sms_gateway" value="nexmo" />
													<span><?php esc_attr_e( 'Enable Nexmo', 'woocommerce-sms-verification' ); ?></span>
												</label>
											</td>
										</tr>
										<tr>
											<td>
												<h4><?php _e( 'Insert API keys for the selected SMS gateway.', 'woocommerce-sms-verification' ); ?></h4>
											</td>
										</tr>
										<tr>
											<td>
												<label for="wsv_twilio_account_sid"><?php _e( 'Twilio Account SID', 'woocommerce-sms-verification' ); ?></label>
											</td>
											<td>
												<input type="text" name="wsv_twilio_account_sid" id="wsv_twilio_account_sid" value="<?php echo isset( $twilio_account_sid ) ? $twilio_account_sid : ''; ?>" class="regular-text" />
											</td>
										</tr>
										<tr>
											<td>
												<label for="wsv_twilio_auth_token"><?php _e( 'Twilio Auth Token', 'woocommerce-sms-verification' ); ?></label>
											</td>
											<td>
												<input type="text" name="wsv_twilio_auth_token" id="wsv_twilio_auth_token" value="<?php echo isset( $twilio_auth_token ) ? $twilio_auth_token : ''; ?>" class="regular-text" />
											</td>
										</tr>
										<tr>
											<td>
												<label for="wsv_twilio_phone_number"><?php _e( 'Twilio Phone Number', 'woocommerce-sms-verification' ); ?></label>
											</td>
											<td>
												<input type="text" name="wsv_twilio_phone_number" id="wsv_twilio_phone_number" value="<?php echo isset( $twilio_phone_number ) ? $twilio_phone_number : ''; ?>" class="regular-text" />
											</td>
										</tr>
									</table>

									<p>
										<input class="button-primary" type="submit" name="wsv_gateways_submit" value="Save" />	
									</p>
								</form>

							</div>
							<!-- .inside -->

						<?php endif; ?>

					</div>
					<!-- .postbox -->
				</div>
				<!-- .meta-box-sortables .ui-sortable -->

			</div>
			<!-- post-body-content -->

		</div>
		<!-- #post-body .metabox-holder .columns-2 -->

		<br class="clear">
	</div>
	<!-- #poststuff -->

</div> <!-- .wrap -->