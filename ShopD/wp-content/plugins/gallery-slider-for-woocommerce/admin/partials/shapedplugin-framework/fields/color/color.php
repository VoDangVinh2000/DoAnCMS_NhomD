<?php
/**
 * Framework color field.
 *
 * @package    Woo_Gallery_Slider
 * @subpackage Woo_Gallery_Slider/public
 */

if ( ! defined( 'ABSPATH' ) ) {
	die; } // Cannot access directly.

if ( ! class_exists( 'WCGS_Field_color' ) ) {
	/**
	 *
	 * Field: color
	 *
	 * @since 1.0.0
	 * @version 1.0.0
	 */
	class WCGS_Field_color extends WCGS_Fields {

		/**
		 * Field constructor.
		 *
		 * @param array  $field The field type.
		 * @param string $value The values of the field.
		 * @param string $unique The unique ID for the field.
		 * @param string $where To where show the output CSS.
		 * @param string $parent The parent args.
		 */
		public function __construct( $field, $value = '', $unique = '', $where = '', $parent = '' ) {
			parent::__construct( $field, $value, $unique, $where, $parent );
		}

		/**
		 * Render field
		 *
		 * @return void
		 */
		public function render() {

			$default_attr = ( ! empty( $this->field['default'] ) ) ? ' data-default-color="' . $this->field['default'] . '"' : '';

			echo wp_kses_post( $this->field_before() );
			echo '<input type="text" name="' . esc_attr( $this->field_name() ) . '" value="' . esc_attr( $this->value ) . '" class="wcgs-color"' . wp_kses_post( $default_attr ) . $this->field_attributes() . '/>'; // phpcs:ignore
			echo wp_kses_post( $this->field_after() );

		}

		/**
		 * Output
		 *
		 * @return statement
		 */
		public function output() {

			$output    = '';
			$elements  = ( is_array( $this->field['output'] ) ) ? $this->field['output'] : array_filter( (array) $this->field['output'] );
			$important = ( ! empty( $this->field['output_important'] ) ) ? '!important' : '';
			$mode      = ( ! empty( $this->field['output_mode'] ) ) ? $this->field['output_mode'] : 'color';

			if ( ! empty( $elements ) && isset( $this->value ) && '' !== $this->value ) {
				foreach ( $elements as $key_property => $element ) {
					if ( is_numeric( $key_property ) ) {
						$output = implode( ',', $elements ) . '{' . $mode . ':' . $this->value . $important . ';}';
						break;
					} else {
						$output .= $element . '{' . $key_property . ':' . $this->value . $important . '}';
					}
				}
			}

			$this->parent->output_css .= $output;

			return $output;

		}

	}
}
