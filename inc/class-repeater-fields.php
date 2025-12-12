<?php
namespace medical_academic_enhancements\classes;

/**
 * Repeater and Flexible Content Fields using Secure Custom Fields.
 *
 * @package medical_academic_enhancements
 * @see https://wordpress.org/plugins/secure-custom-fields/
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Repeater Fields class.
 */
class Repeater_Fields {

	/**
	 * Constructor.
	 */
	public function __construct() {
		// add_action( 'acf/init', array( $this, 'register_repeater_fields' ) );
	}

	/**
	 * Register repeater field groups.
	 *
	 * @return void
	 */
	public function register_repeater_fields() {
		if ( ! function_exists( 'acf_add_local_field_group' ) ) {
			return;
		}

		// Repeater fields are currently defined in Fields class for better organization by CPT.
		// This class is reserved for global or shared repeater definitions if needed in the future.
	}
}

