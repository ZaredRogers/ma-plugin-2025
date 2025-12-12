<?php
namespace medical_academic_enhancements\classes;

/**
 * Options Pages Registration using Secure Custom Fields.
 *
 * Creates global settings pages for site-wide configuration that is not
 * tied to individual posts, pages, or taxonomies.
 *
 * @package example_plugin
 * @see https://github.com/WordPress/secure-custom-fields/blob/trunk/docs/tutorials/first-options-page.md
 * @see https://github.com/WordPress/secure-custom-fields/blob/trunk/docs/code-reference/api/index.md
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Options class.
 *
 * Registers options pages and their associated field groups using SCF.
 */
class Options {

	/**
	 * Main options page slug.
	 *
	 * @var string
	 */
	const OPTIONS_PAGE = 'medical-academic-settings';

	/**
	 * Field group key for main settings.
	 *
	 * @var string
	 */
	const FIELD_GROUP = 'group_medical_academic_options';

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'acf/init', array( $this, 'register_options_pages' ) );
		add_action( 'acf/init', array( $this, 'register_options_fields' ) );
	}

	/**
	 * Check if Secure Custom Fields is active.
	 *
	 * @return bool
	 */
	public function is_scf_active() {
		return function_exists( 'acf_add_options_page' );
	}

	/**
	 * Register options pages.
	 *
	 * Creates the main settings page and any sub-pages.
	 *
	 * @see https://github.com/WordPress/secure-custom-fields/blob/trunk/docs/tutorials/first-options-page.md
	 * @return void
	 */
	public function register_options_pages() {
		if ( ! $this->is_scf_active() ) {
			return;
		}

		acf_add_options_page(
			array(
				'page_title'  => __( 'Medical Academic Settings', 'medical-academic-enhancements' ),
				'menu_title'  => __( 'Medical Academic', 'medical-academic-enhancements' ),
				'menu_slug'   => self::OPTIONS_PAGE,
				'capability'  => 'manage_options',
				'parent_slug' => 'options-general.php',
				'redirect'    => false,
			)
		);
	}

	/**
	 * Register options page fields.
	 *
	 * @return void
	 */
	public function register_options_fields() {
		if ( ! $this->is_scf_active() ) {
			return;
		}

		acf_add_local_field_group(
			array(
				'key'      => self::FIELD_GROUP,
				'title'    => __( 'General Settings', 'medical-academic-enhancements' ),
				'fields'   => array(
					array(
						'key'   => 'field_ma_api_key',
						'label' => __( 'API Key', 'medical-academic-enhancements' ),
						'name'  => 'ma_api_key',
						'type'  => 'text',
					),
				),
				'location' => array(
					array(
						array(
							'param'    => 'options_page',
							'operator' => '==',
							'value'    => self::OPTIONS_PAGE,
						),
					),
				),
			)
		);
	}
}
