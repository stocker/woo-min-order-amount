<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/stocker
 * @since      1.0.0
 *
 * @package    Woo_Min_Order_Amount
 * @subpackage Woo_Min_Order_Amount/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Woo_Min_Order_Amount
 * @subpackage Woo_Min_Order_Amount/includes
 * @author     Scott Stocker <scott@refactorr. om>
 */
class Woo_Min_Order_Amount_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'woo-min-order-amount',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
