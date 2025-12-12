<?php
namespace medical_academic_enhancements\classes;

/**
 * Block Templates Registration.
 *
 * @package example_plugin
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Plugin block templates registration.
 */
class Block_Templates {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'register_block_templates' ) );
	}

	/**
	 * Register plugin block templates via the WP 6.7+ API.
	 *
	 * @return void
	 */
	public function register_block_templates() {
		if ( ! function_exists( 'register_block_template' ) ) {
			return; // Pre-6.7: no-op.
		}

		// Register block templates here when needed.
		// $templates_dir = MEDICAL_ACADEMIC_ENHANCEMENTS_PLUGIN_DIR . 'templates/';
	}
}
