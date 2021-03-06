<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Field: Textarea
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class CSFramework_Option_textarea extends CSFramework_Options {

	public function __construct( $field, $value = '', $unique = '' ) {
		parent::__construct( $field, $value, $unique );
	}

	public function output() {

		print $this->element_before();
		print $this->shortcode_generator();
		print '<textarea name="'. $this->element_name() .'"'. $this->element_class() . $this->element_attributes() .'>'. $this->element_value() .'</textarea>';
		print $this->element_after();

	}

	public function shortcode_generator() {
		if( isset( $this->field['shortcode'] ) && CS_ACTIVE_SHORTCODE ) {
			print '<a href="#" class="button button-primary cs-shortcode cs-shortcode-textarea">'. __( 'Add Shortcode', CS_TEXTDOMAIN ) .'</a>';
		}
	}
}
