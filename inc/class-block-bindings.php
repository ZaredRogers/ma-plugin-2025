<?php
namespace medical_academic_enhancements\classes;

/**
 * Block Bindings Registration.
 *
 * @package example_plugin
 * @since 6.5.0 Block Bindings API
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Block Bindings class.
 */
class Block_Bindings {

	/**
	 * Binding source name.
	 *
	 * @var string
	 */
	const SOURCE = 'medical-academic-enhancements/field';

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'register_sources' ) );
	}

	/**
	 * Register bindings sources.
	 *
	 * @return void
	 */
	public function register_sources() {
		if ( ! function_exists( 'register_block_bindings_source' ) ) {
			return;
		}

		register_block_bindings_source(
			self::SOURCE,
			array(
				'label'              => __( 'Medical Academic Field', 'medical-academic-enhancements' ),
				'get_value_callback' => array( $this, 'get_field_value' ),
				'uses_context'       => array( 'postId' ),
			)
		);
	}

	/**
	 * Get the value of a field.
	 *
	 * @param array $args    Binding arguments (expects 'key').
	 * @param array $context Binding context (expects 'postId').
	 * @return string|null
	 */
	public function get_field_value( $args, $context ) {
		if ( empty( $args['key'] ) || empty( $context['postId'] ) ) {
			return null;
		}

		$post_id = (int) $context['postId'];
		$key     = $args['key'];
		$value   = null;

		// Use SCF/ACF if available.
		if ( function_exists( 'get_field' ) ) {
			$value = get_field( $key, $post_id );
		} else {
			// Fallback to post meta.
			$value = get_post_meta( $post_id, $key, true );
		}

		if ( is_scalar( $value ) ) {
			return (string) $value;
		}

		if ( is_array( $value ) ) {
			// Handle array values (e.g., images, relationships) simply for now.
			// For images, if it's an array with 'url', return that.
			if ( isset( $value['url'] ) ) {
				return $value['url'];
			}
			
			// For other arrays, return a comma-separated list if possible, or JSON.
			return implode( ', ', array_filter( $value, 'is_scalar' ) );
		}

		return null;
	}
}
