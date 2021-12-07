<?php
/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Woo_Gallery_Slider
 * @subpackage Woo_Gallery_Slider/includes
 * @author     ShapedPlugin <support@shapedplugin.com>
 */

/**
 * Woo Gallery Slider i18n class
 */
class Woo_Gallery_Slider_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'woo-gallery-slider',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}
}
