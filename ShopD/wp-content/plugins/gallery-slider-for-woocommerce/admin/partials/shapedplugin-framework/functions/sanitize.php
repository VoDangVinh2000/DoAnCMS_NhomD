<?php
/**
 * Framework sanitize file.
 *
 * @package    Woo_Gallery_Slider
 * @subpackage Woo_Gallery_Slider/public
 */

if ( ! defined( 'ABSPATH' ) ) {
	die;
} // Cannot access directly.

if ( ! function_exists( 'wcgs_sanitize_replace_a_to_b' ) ) {
	/**
	 *
	 * Sanitize
	 * Replace letter a to letter b
	 *
	 * @param  string $value string.
	 *
	 * @return string
	 * @since 1.0.0
	 * @version 1.0.0
	 */
	function wcgs_sanitize_replace_a_to_b( $value ) {

		return str_replace( 'a', 'b', $value );
	}
}

if ( ! function_exists( 'wcgs_sanitize_title' ) ) {
	/**
	 *
	 * Sanitize title
	 *
	 * @param  string $value string.
	 *
	 * @return string
	 * @since 1.0.0
	 * @version 1.0.0
	 */
	function wcgs_sanitize_title( $value ) {

		return sanitize_title( $value );
	}
}

