<?php


namespace PaymentPlugins\WooCommerce\PPCP\Payments\Gateways;

use PaymentPlugins\WooCommerce\PPCP\Customer;
use PaymentPlugins\WooCommerce\PPCP\Assets\AssetsApi;
use PaymentPlugins\WooCommerce\PPCP\Constants;
use PaymentPlugins\WooCommerce\PPCP\Logger;
use PaymentPlugins\WooCommerce\PPCP\PaymentHandler;
use PaymentPlugins\WooCommerce\PPCP\PaymentResult;
use PaymentPlugins\WooCommerce\PPCP\PluginIntegrationController;
use PaymentPlugins\WooCommerce\PPCP\RefundsManager;
use PaymentPlugins\WooCommerce\PPCP\TemplateLoader;
use PaymentPlugins\WooCommerce\PPCP\Tokens\AbstractToken;
use PaymentPlugins\WooCommerce\PPCP\Tokens\CreditCardToken;
use PaymentPlugins\WooCommerce\PPCP\Traits\FeaturesTrait;
use PaymentPlugins\WooCommerce\PPCP\Traits\Settings as SettingsTrait;
use PaymentPlugins\WooCommerce\PPCP\Utilities\OrderLock;
use PaymentPlugins\WooCommerce\PPCP\Utilities\PayPalFee;

/**
 * Class AbstractGateway
 *
 * @package PaymentPlugins\WooCommerce\PPCP\Payments\Gateways
 */
abstract class AbstractGateway extends \WC_Payment_Gateway {

	use SettingsTrait;
	use FeaturesTrait;

	/**
	 * @var PaymentHandler
	 */
	public $payment_handler;

	/**
	 * @var Logger
	 */
	public $logger;

	/**
	 * @var AssetsApi
	 */
	public $assets;

	/**
	 * @var TemplateLoader
	 */
	public $template_loader;

	/**
	 * @var PluginIntegrationController
	 * @deprecated
	 */
	public $integration_controller;

	protected $template;

	protected $token_class;

	protected $paypal_flow;

	protected $payment_method_type;

	private $save_payment_method = false;

	public function __construct( $payment_handler, $logger, $assets, $template_loader ) {
		$this->payment_handler = $payment_handler;
		$this->payment_handler->set_payment_method( $this );
		$this->logger          = $logger;
		$this->assets          = $assets;
		$this->template_loader = $template_loader;
		$this->has_fields      = true;
		$this->init_form_fields();
		$this->init_settings();
		$this->init_hooks();
		$this->init_supports();
		$this->title       = $this->get_option( 'title_text' );
		$this->description = $this->get_option( 'description' );
	}

	protected function init_hooks() {
		add_action( 'woocommerce_update_options_payment_gateways_' . $this->id, [ $this, 'process_admin_options' ] );
		add_filter( 'wc_ppcp_admin_nav_tabs', [ $this, 'add_navigation_tab' ] );
	}

	public function get_admin_script_dependencies() {
		return [];
	}

	public function get_checkout_script_handles() {
		return [];
	}

	public function get_cart_script_handles() {
		return [];
	}

	public function get_product_script_handles() {
		return [];
	}

	public function get_express_checkout_script_handles() {
		return [];
	}

	/**
	 * @param \PaymentPlugins\WooCommerce\PPCP\ContextHandler $context
	 *
	 * @return array
	 */
	public function get_payment_method_data( $context ) {
		return [];
	}

	public function get_admin_script_data() {
	}

	public function add_section_enabled( $key ) {
		$sections = $this->get_option( 'sections', [] );
		if ( ! in_array( $key, $sections ) ) {
			$sections[] = $key;
		}
		$this->settings['sections'] = $sections;
	}

	public function is_section_enabled( $key ) {
		return in_array( $key, $this->get_option( 'sections', [] ) );
	}

	public function is_cart_section_enabled() {
		return $this->is_section_enabled( 'cart' );
	}

	public function is_product_section_enabled( $product ) {
		return $this->is_section_enabled( 'product' );
	}

	public function is_express_section_enabled() {
		return $this->is_section_enabled( 'express_checkout' );
	}

	public function is_minicart_section_enabled() {
		return $this->is_section_enabled( 'minicart' );
	}

	public function payment_fields() {
		$this->render_html_data();
		if ( ( $description = $this->get_description() ) ) {
			echo '<p>' . wp_kses_post( wptexturize( $description ) ) . '</p>';
		}
		printf( '<input type="hidden" id="%1$s" name="%1$s"/>', esc_attr( $this->id . '_paypal_order_id' ) );
		printf( '<input type="hidden" id="%1$s" name="%1$s"/>', esc_attr( $this->id . '_payment_token' ) );
		printf( '<input type="hidden" id="%1$s" name="%1$s"/>', esc_attr( $this->id . '_billing_token' ) );

		$client = $this->payment_handler->client;

		$this->template_loader->load_template( "checkout/{$this->template}", [
			'gateway'   => $this,
			'assets'    => $this->assets,
			'connected' => $client->getAPISettings()->is_connected()
		] );
	}

	public function cart_fields() {
		$this->render_html_data( 'cart' );
		printf( '<input type="hidden" id="%1$s" name="%1$s"/>', esc_attr( $this->id . '_paypal_order_id' ) );
		$this->template_loader->load_template( "cart/{$this->template}", [
			'gateway' => $this
		] );
	}

	public function product_fields() {
		$this->render_html_data( 'product' );
		printf( '<input type="hidden" id="%1$s" name="%1$s"/>', esc_attr( $this->id . '_paypal_order_id' ) );
		$this->template_loader->load_template( "product/{$this->template}", [
			'gateway' => $this
		] );
	}

	public function express_checkout_fields() {
	}

	public function process_payment( $order_id ) {
		$order  = wc_get_order( $order_id );
		$result = apply_filters( 'wc_ppcp_process_payment_result', false, $order, $this );
		if ( $result ) {
			if ( is_wp_error( $result ) ) {
				wc_add_notice( $result->get_error_message(), 'error' );

				return ( new PaymentResult( $result, $order, $this ) )->get_failure_response();
			} elseif ( $result === false && wc_notice_count( 'error' ) > 0 ) {
				return ( new PaymentResult( false, $order, $this ) )->get_failure_response();
			} elseif ( \is_array( $result ) ) {
				return $result;
			}

			return ( new PaymentResult( null, $order, $this ) )->get_success_response();
		} else {
			$result = $this->payment_handler->process_payment( $order );
			if ( ! $result->success() ) {
				if ( ! $result->needs_approval() ) {
					$result->set_error_message( sprintf( __( 'There was an error processing your payment. Reason: %s', 'pymntpl-paypal-woocommerce' ), $result->get_error_message() ) );
					wc_add_notice( $result->get_error_message(), 'error' );
				}

				return $result->get_failure_response();
			} else {
				if ( $result->needs_approval() ) {
					return $result->get_approval_response();
				}
				WC()->cart->empty_cart();

				return $result->get_success_response();
			}
		}
	}

	public function process_refund( $order_id, $amount = null, $reason = '' ) {
		try {
			$order  = wc_get_order( $order_id );
			$result = $this->payment_handler->process_refund( $order, $amount, $reason );
			if ( is_wp_error( $result ) ) {
				$msg = sprintf( __( 'Error processing refund. Reason: %s', 'pymntpl-paypal-woocommerce' ), $result->get_error_message() );
				$order->add_order_note( $msg );
				$this->logger->info( $msg );
				throw new \Exception( $msg );
			} else {
				/**
				 * @var \WC_Order_Refund $refund
				 */
				$refund = wc_ppcp_get_container()->get( RefundsManager::class )->refund;
				if ( $refund ) {
					$refund->update_meta_data( Constants::PAYPAL_REFUND, $result->id );
				}
				OrderLock::set_order_lock( $order, MINUTE_IN_SECONDS );
				PayPalFee::update_net_from_refund( $result, $order, true );
				$order->add_order_note(
					sprintf(
						__( 'Order refunded in PayPal. Amount: %1$s. Refund ID: %2$s', 'pymntpl-paypal-woocommerce' ),
						wc_price( $amount, [ 'currency' => $order->get_currency() ] ),
						$result->id
					)
				);
			}
		} catch ( \Exception $e ) {
			return new \WP_Error( 'refund-error', $e->getMessage() );
		}

		return true;
	}

	public function add_payment_method() {
		$result = [
			'result'   => 'success',
			'redirect' => wc_get_account_endpoint_url( 'payment-methods' ),
		];
		try {
			if ( ! is_user_logged_in() ) {
				throw new \Exception( __( 'You must be logged in to add a payment method.', 'pymntpl-paypal-woocommerce' ) );
			}

			$payment_token_id = $this->get_payment_token_id_from_request();

			if ( ! $payment_token_id ) {
				throw new \Exception( __( 'A payment token ID is required when adding a payment method.', 'pymntpl-paypal-woocommerce' ) );
			}

			$user_id = get_current_user_id();

			$customer = Customer::instance( $user_id );


			$response = $this->payment_handler->client->paymentTokensV3->retrieve( $payment_token_id );

			if ( is_wp_error( $response ) ) {
				throw new \Exception( $response->get_error_message() );
			}

			/**
			 * @param CreditCardToken $token
			 */
			$token = $this->get_payment_method_token_instance();
			$token->initialize_from_payment_token( $response );
			$token->set_customer_id( $response->getCustomer()->getId() );
			$token->set_user_id( $user_id );
			$token->save();

			if ( ! $customer->has_id() ) {
				$customer->set_id( $token->get_customer_id() );
				$customer->save();
			}
		} catch ( \Exception $e ) {
			\wc_add_notice( $e->getMessage(), 'error' );
			$result['result']   = 'error';
			$result['redirect'] = '';
		}

		return $result;
	}

	/**
	 * @param AbstractToken $token
	 *
	 * @return string
	 */
	public function get_saved_payment_method_option_html( $token ) {
		$token->set_format( $this->get_option( 'payment_format' ) );

		return parent::get_saved_payment_method_option_html( $token );
	}

	/**
	 * Render data that can change based on inputs provided by the user.
	 *
	 * @param string $context
	 */
	protected function render_html_data( $context = 'checkout' ) {
		$data = wp_json_encode( apply_filters( 'wc_ppcp_get_payment_method_data', [], $context, $this ) );
		$data = function_exists( 'wc_esc_json' ) ? wc_esc_json( $data ) : _wp_specialchars( $data, ENT_QUOTES, 'UTF-8', true );
		// phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
		printf( '<input type="hidden" class="wc-ppcp-payment-method-data" data-payment-method-data="%s"/>', $data );
	}

	/**
	 * @return AbstractToken
	 */
	public function get_payment_method_token_instance() {
		/**
		 * @param $token \WC_Payment_Token
		 */
		$token = new $this->token_class();
		$token->set_gateway_id( $this->id );
		$token->set_format( $this->get_option( 'payment_format' ) );
		$token->set_environment( $this->payment_handler->client->getEnvironment() );

		return $token;
	}

	public function get_product_form_fields( $fields ) {
		return $fields;
	}

	public function get_billing_token_from_request() {
		// phpcs:ignore WordPress.Security.NonceVerification.Missing
		return isset( $_POST["{$this->id}_billing_token"] ) ? sanitize_text_field( wp_unslash( $_POST["{$this->id}_billing_token"] ) ) : null;
	}

	public function get_transaction_url( $order ) {
		$this->view_transaction_url = 'https://www.paypal.com/activity/payment/%s';
		if ( $order->get_meta( Constants::PPCP_ENVIRONMENT ) === 'sandbox' ) {
			$this->view_transaction_url = 'https://www.sandbox.paypal.com/activity/payment/%s';
		}

		return parent::get_transaction_url( $order );
	}

	public function is_place_order_button() {
		return true;
	}

	/**
	 * @param \PaymentPlugins\PayPalSDK\Order $paypal_order
	 * @param \WC_Order                       $order
	 *
	 * @return void
	 */
	public function validate_paypal_order( \PaymentPlugins\PayPalSDK\Order $paypal_order, \WC_Order $order ) {
	}

	/**
	 * Returns true if the customer's payment method should be saved.
	 *
	 * @return bool
	 */
	public function should_save_payment_method() {
		return $this->save_payment_method;
	}

	public function get_save_payment_method() {
		return $this->get_save_payment_method();
	}

	public function set_save_payment_method( $bool ) {
		$this->save_payment_method = $bool;
	}

	/**
	 * Returns true if the payment method needs to be saved as part of this payment request. 3rd party code
	 * can use the filter wc_ppcp_payment_method_save_required & wc_ppcp_checkout_payment_method_save_required
	 * to trigger the saving of a payment method.
	 * Example - WooCommerce Subscriptions needs the payment method to be saved during checkout.
	 *
	 * @param \WC_Order|null $order
	 *
	 * @since 1.1.0
	 * @return bool
	 */
	public function is_payment_method_save_required( $order = null ) {
		if ( $order instanceof \WC_Order ) {
			return apply_filters( 'wc_ppcp_checkout_payment_method_save_required', $this->save_payment_method, $this, $order );
		} else {
			return apply_filters( 'wc_ppcp_payment_method_save_required', $this->save_payment_method, $this );
		}
	}

	public function get_payment_method_type() {
		return $this->payment_method_type;
	}

	public function add_payment_complete_note( \WC_Order $order, PaymentResult $result ) {
		$order->add_order_note(
			sprintf(
				__( 'PayPal order %s created. %s', 'pymntpl-paypal-woocommerce' ),
				$result->paypal_order->id,
				$result->is_captured() ? sprintf( __( 'Capture ID: %s', 'pymntpl-paypal-woocommerce' ), $result->get_capture_id() ) : sprintf( __( 'Authorization ID: %s', 'pymntpl-paypal-woocommerce' ), $result->get_authorization_id() )
			)
		);
	}

}