<?php
namespace medical_academic_enhancements\classes;

/**
 * Custom Post Type Registration.
 *
 * @package example_plugin
 */

namespace example_plugin\classes;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Post Types class.
 */
class Post_Types {

	/**
	 * Post type slug.
	 *
	 * @var string
	 */
	const POST_TYPE = 'cpd_article';

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'init', array( $this, 'register_post_types' ) );
	}

	/**
	 * Register custom post types.
	 *
	 * @return void
	 */
	public function register_post_types() {
		$labels = array(
			'name'                  => _x( 'Items', 'Post type general name', 'medical-academic-enhancements' ),
			'singular_name'         => _x( 'Item', 'Post type singular name', 'medical-academic-enhancements' ),
			'menu_name'             => _x( 'Items', 'Admin Menu text', 'medical-academic-enhancements' ),
			'add_new'               => __( 'Add New', 'medical-academic-enhancements' ),
			'add_new_item'          => __( 'Add New Item', 'medical-academic-enhancements' ),
			'edit_item'             => __( 'Edit Item', 'medical-academic-enhancements' ),
			'new_item'              => __( 'New Item', 'medical-academic-enhancements' ),
			'view_item'             => __( 'View Item', 'medical-academic-enhancements' ),
			'view_items'            => __( 'View Items', 'medical-academic-enhancements' ),
			'search_items'          => __( 'Search Items', 'medical-academic-enhancements' ),
			'not_found'             => __( 'No items found.', 'medical-academic-enhancements' ),
			'not_found_in_trash'    => __( 'No items found in Trash.', 'medical-academic-enhancements' ),
			'all_items'             => __( 'All Items', 'medical-academic-enhancements' ),
			'archives'              => __( 'Item Archives', 'medical-academic-enhancements' ),
			'attributes'            => __( 'Item Attributes', 'medical-academic-enhancements' ),
			'insert_into_item'      => __( 'Insert into item', 'medical-academic-enhancements' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'medical-academic-enhancements' ),
			'filter_items_list'     => __( 'Filter items list', 'medical-academic-enhancements' ),
			'items_list_navigation' => __( 'Items list navigation', 'medical-academic-enhancements' ),
			'items_list'            => __( 'Items list', 'medical-academic-enhancements' ),
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'show_in_rest'       => true, // Required for block editor.
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'medical-academic-enhancements' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 20,
			'menu_icon'          => 'dashicons-admin-generic',
			'supports'           => array(
				'title',
				'editor',
				'author',
				'thumbnail',
				'excerpt',
				'custom-fields',
				'revisions',
			),
			'template'           => array(
				array( 'example_plugin/example-plugin-single' ),
			),
			'template_lock'      => false,
		);

		register_post_type( self::POST_TYPE, $args );
	}
}
