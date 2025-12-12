<?php
namespace medical_academic_enhancements\classes;

/**
 * Custom Taxonomy Registration.
 *
 * @package medical_academic_enhancements
 */

namespace medical_academic_enhancements\classes;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Taxonomies class.
 */
class Taxonomies {

	/**
	 * Taxonomy slug.
	 *
	 * @var string
	 */
	const TAXONOMY = 'medical-academic-enhancements_category';

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'register_taxonomies' ) );
	}

	/**
	 * Register custom taxonomies.
	 *
	 * @return void
	 */
	public function register_taxonomies() {
		$labels = array(
			'name'                       => _x( '', 'Taxonomy general name', 'medical-academic-enhancements' ),
			'singular_name'              => _x( '', 'Taxonomy singular name', 'medical-academic-enhancements' ),
			'search_items'               => __( 'Search ', 'medical-academic-enhancements' ),
			'popular_items'              => __( 'Popular ', 'medical-academic-enhancements' ),
			'all_items'                  => __( 'All ', 'medical-academic-enhancements' ),
			'edit_item'                  => __( 'Edit ', 'medical-academic-enhancements' ),
			'update_item'                => __( 'Update ', 'medical-academic-enhancements' ),
			'add_new_item'               => __( 'Add New ', 'medical-academic-enhancements' ),
			'new_item_name'              => __( 'New  Name', 'medical-academic-enhancements' ),
			'separate_items_with_commas' => __( 'Separate  with commas', 'medical-academic-enhancements' ),
			'add_or_remove_items'        => __( 'Add or remove ', 'medical-academic-enhancements' ),
			'choose_from_most_used'      => __( 'Choose from the most used ', 'medical-academic-enhancements' ),
			'not_found'                  => __( 'No  found.', 'medical-academic-enhancements' ),
			'menu_name'                  => __( '', 'medical-academic-enhancements' ),
		);

		$args = array(
			'labels'            => $labels,
			'hierarchical'      => true,
			'public'            => true,
			'show_ui'           => true,
			'show_in_rest'      => true, // Required for block editor.
			'show_admin_column' => true,
			'query_var'         => true,
			'rewrite'           => array( 'slug' => 'medical-academic-enhancements-category' ),
		);

		register_taxonomy(
			self::TAXONOMY,
			Post_Types::POST_TYPE,
			$args
		);
	}
}
