<?php
namespace medical_academic_enhancements\classes;

/**
 * Custom Post Type Registration.
 *
 * @package example_plugin
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Post Types class.
 */
class Post_Types {

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
		// CPD Article.
		register_post_type(
			'cpd_article',
			array(
				'labels'       => array(
					'name'                     => __( 'CPD Articles', 'medical-academic-enhancements' ),
					'singular_name'            => __( 'CPD Article', 'medical-academic-enhancements' ),
					'add_new'                  => __( 'Add New', 'medical-academic-enhancements' ),
					'add_new_item'             => __( 'Add New CPD Article', 'medical-academic-enhancements' ),
					'edit_item'                => __( 'Edit CPD Article', 'medical-academic-enhancements' ),
					'new_item'                 => __( 'New CPD Article', 'medical-academic-enhancements' ),
					'view_item'                => __( 'View CPD Article', 'medical-academic-enhancements' ),
					'view_items'               => __( 'View CPD Articles', 'medical-academic-enhancements' ),
					'search_items'             => __( 'Search CPD Articles', 'medical-academic-enhancements' ),
					'not_found'                => __( 'No CPD Articles found', 'medical-academic-enhancements' ),
					'not_found_in_trash'       => __( 'No CPD Articles found in Trash', 'medical-academic-enhancements' ),
					'parent_item_colon'        => __( 'Parent CPD Article:', 'medical-academic-enhancements' ),
					'all_items'                => __( 'All CPD Articles', 'medical-academic-enhancements' ),
					'archives'                 => __( 'CPD Article Archives', 'medical-academic-enhancements' ),
					'attributes'               => __( 'CPD Article Attributes', 'medical-academic-enhancements' ),
					'insert_into_item'         => __( 'Insert into CPD article', 'medical-academic-enhancements' ),
					'uploaded_to_this_item'    => __( 'Uploaded to this CPD article', 'medical-academic-enhancements' ),
					'featured_image'           => __( 'Featured image', 'medical-academic-enhancements' ),
					'set_featured_image'       => __( 'Set featured image', 'medical-academic-enhancements' ),
					'remove_featured_image'    => __( 'Remove featured image', 'medical-academic-enhancements' ),
					'use_featured_image'       => __( 'Use as featured image', 'medical-academic-enhancements' ),
					'menu_name'                => __( 'CPD Articles', 'medical-academic-enhancements' ),
					'filter_items_list'        => __( 'Filter CPD articles list', 'medical-academic-enhancements' ),
					'items_list_navigation'    => __( 'CPD articles list navigation', 'medical-academic-enhancements' ),
					'items_list'               => __( 'CPD articles list', 'medical-academic-enhancements' ),
					'item_published'           => __( 'CPD Article published.', 'medical-academic-enhancements' ),
					'item_published_privately' => __( 'CPD Article published privately.', 'medical-academic-enhancements' ),
					'item_reverted_to_draft'   => __( 'CPD Article reverted to draft.', 'medical-academic-enhancements' ),
					'item_scheduled'           => __( 'CPD Article scheduled.', 'medical-academic-enhancements' ),
					'item_updated'             => __( 'CPD Article updated.', 'medical-academic-enhancements' ),
				),
				'public'       => true,
				'show_in_rest' => true,
				'has_archive'  => true,
				'menu_icon'    => 'dashicons-book',
				'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt', 'author' ),
			)
		);

		// Webinar.
		register_post_type(
			'webinar',
			array(
				'labels'       => array(
					'name'                     => __( 'Webinars & Events', 'medical-academic-enhancements' ),
					'singular_name'            => __( 'Webinar/Event', 'medical-academic-enhancements' ),
					'add_new'                  => __( 'Add New', 'medical-academic-enhancements' ),
					'add_new_item'             => __( 'Add New Webinar/Event', 'medical-academic-enhancements' ),
					'edit_item'                => __( 'Edit Webinar/Event', 'medical-academic-enhancements' ),
					'new_item'                 => __( 'New Webinar/Event', 'medical-academic-enhancements' ),
					'view_item'                => __( 'View Webinar/Event', 'medical-academic-enhancements' ),
					'view_items'               => __( 'View Webinars & Events', 'medical-academic-enhancements' ),
					'search_items'             => __( 'Search Webinars & Events', 'medical-academic-enhancements' ),
					'not_found'                => __( 'No Webinars & Events found', 'medical-academic-enhancements' ),
					'not_found_in_trash'       => __( 'No Webinars & Events found in Trash', 'medical-academic-enhancements' ),
					'parent_item_colon'        => __( 'Parent Webinar/Event:', 'medical-academic-enhancements' ),
					'all_items'                => __( 'All Webinars & Events', 'medical-academic-enhancements' ),
					'archives'                 => __( 'Webinar/Event Archives', 'medical-academic-enhancements' ),
					'attributes'               => __( 'Webinar/Event Attributes', 'medical-academic-enhancements' ),
					'insert_into_item'         => __( 'Insert into webinar/event', 'medical-academic-enhancements' ),
					'uploaded_to_this_item'    => __( 'Uploaded to this webinar/event', 'medical-academic-enhancements' ),
					'featured_image'           => __( 'Featured image', 'medical-academic-enhancements' ),
					'set_featured_image'       => __( 'Set featured image', 'medical-academic-enhancements' ),
					'remove_featured_image'    => __( 'Remove featured image', 'medical-academic-enhancements' ),
					'use_featured_image'       => __( 'Use as featured image', 'medical-academic-enhancements' ),
					'menu_name'                => __( 'Webinars & Events', 'medical-academic-enhancements' ),
					'filter_items_list'        => __( 'Filter webinars & events list', 'medical-academic-enhancements' ),
					'items_list_navigation'    => __( 'Webinars & events list navigation', 'medical-academic-enhancements' ),
					'items_list'               => __( 'Webinars & events list', 'medical-academic-enhancements' ),
					'item_published'           => __( 'Webinar/Event published.', 'medical-academic-enhancements' ),
					'item_published_privately' => __( 'Webinar/Event published privately.', 'medical-academic-enhancements' ),
					'item_reverted_to_draft'   => __( 'Webinar/Event reverted to draft.', 'medical-academic-enhancements' ),
					'item_scheduled'           => __( 'Webinar/Event scheduled.', 'medical-academic-enhancements' ),
					'item_updated'             => __( 'Webinar/Event updated.', 'medical-academic-enhancements' ),
				),
				'public'       => true,
				'show_in_rest' => true,
				'has_archive'  => true,
				'menu_icon'    => 'dashicons-video-alt2',
				'supports'     => array( 'title', 'editor', 'thumbnail', 'excerpt', 'author', 'custom-fields' ),
			)
		);

		// Digital Magazine.
		register_post_type(
			'digital_magazine',
			array(
				'labels'       => array(
					'name'                     => __( 'Digital Magazines', 'medical-academic-enhancements' ),
					'singular_name'            => __( 'Digital Magazine', 'medical-academic-enhancements' ),
					'add_new'                  => __( 'Add New', 'medical-academic-enhancements' ),
					'add_new_item'             => __( 'Add New Digital Magazine', 'medical-academic-enhancements' ),
					'edit_item'                => __( 'Edit Digital Magazine', 'medical-academic-enhancements' ),
					'new_item'                 => __( 'New Digital Magazine', 'medical-academic-enhancements' ),
					'view_item'                => __( 'View Digital Magazine', 'medical-academic-enhancements' ),
					'view_items'               => __( 'View Digital Magazines', 'medical-academic-enhancements' ),
					'search_items'             => __( 'Search Digital Magazines', 'medical-academic-enhancements' ),
					'not_found'                => __( 'No Digital Magazines found', 'medical-academic-enhancements' ),
					'not_found_in_trash'       => __( 'No Digital Magazines found in Trash', 'medical-academic-enhancements' ),
					'parent_item_colon'        => __( 'Parent Digital Magazine:', 'medical-academic-enhancements' ),
					'all_items'                => __( 'All Digital Magazines', 'medical-academic-enhancements' ),
					'archives'                 => __( 'Digital Magazine Archives', 'medical-academic-enhancements' ),
					'attributes'               => __( 'Digital Magazine Attributes', 'medical-academic-enhancements' ),
					'insert_into_item'         => __( 'Insert into digital magazine', 'medical-academic-enhancements' ),
					'uploaded_to_this_item'    => __( 'Uploaded to this digital magazine', 'medical-academic-enhancements' ),
					'featured_image'           => __( 'Featured image', 'medical-academic-enhancements' ),
					'set_featured_image'       => __( 'Set featured image', 'medical-academic-enhancements' ),
					'remove_featured_image'    => __( 'Remove featured image', 'medical-academic-enhancements' ),
					'use_featured_image'       => __( 'Use as featured image', 'medical-academic-enhancements' ),
					'menu_name'                => __( 'Digital Magazines', 'medical-academic-enhancements' ),
					'filter_items_list'        => __( 'Filter digital magazines list', 'medical-academic-enhancements' ),
					'items_list_navigation'    => __( 'Digital magazines list navigation', 'medical-academic-enhancements' ),
					'items_list'               => __( 'Digital magazines list', 'medical-academic-enhancements' ),
					'item_published'           => __( 'Digital Magazine published.', 'medical-academic-enhancements' ),
					'item_published_privately' => __( 'Digital Magazine published privately.', 'medical-academic-enhancements' ),
					'item_reverted_to_draft'   => __( 'Digital Magazine reverted to draft.', 'medical-academic-enhancements' ),
					'item_scheduled'           => __( 'Digital Magazine scheduled.', 'medical-academic-enhancements' ),
					'item_updated'             => __( 'Digital Magazine updated.', 'medical-academic-enhancements' ),
				),
				'public'       => true,
				'show_in_rest' => true,
				'has_archive'  => true,
				'menu_icon'    => 'dashicons-media-document',
				'supports'     => array( 'title', 'thumbnail', 'custom-fields' ),
			)
		);

		// Supplement.
		register_post_type(
			'supplement',
			array(
				'labels'       => array(
					'name'                     => __( 'Supplements', 'medical-academic-enhancements' ),
					'singular_name'            => __( 'Supplement', 'medical-academic-enhancements' ),
					'add_new'                  => __( 'Add New', 'medical-academic-enhancements' ),
					'add_new_item'             => __( 'Add New Supplement', 'medical-academic-enhancements' ),
					'edit_item'                => __( 'Edit Supplement', 'medical-academic-enhancements' ),
					'new_item'                 => __( 'New Supplement', 'medical-academic-enhancements' ),
					'view_item'                => __( 'View Supplement', 'medical-academic-enhancements' ),
					'view_items'               => __( 'View Supplements', 'medical-academic-enhancements' ),
					'search_items'             => __( 'Search Supplements', 'medical-academic-enhancements' ),
					'not_found'                => __( 'No Supplements found', 'medical-academic-enhancements' ),
					'not_found_in_trash'       => __( 'No Supplements found in Trash', 'medical-academic-enhancements' ),
					'parent_item_colon'        => __( 'Parent Supplement:', 'medical-academic-enhancements' ),
					'all_items'                => __( 'All Supplements', 'medical-academic-enhancements' ),
					'archives'                 => __( 'Supplement Archives', 'medical-academic-enhancements' ),
					'attributes'               => __( 'Supplement Attributes', 'medical-academic-enhancements' ),
					'insert_into_item'         => __( 'Insert into supplement', 'medical-academic-enhancements' ),
					'uploaded_to_this_item'    => __( 'Uploaded to this supplement', 'medical-academic-enhancements' ),
					'featured_image'           => __( 'Featured image', 'medical-academic-enhancements' ),
					'set_featured_image'       => __( 'Set featured image', 'medical-academic-enhancements' ),
					'remove_featured_image'    => __( 'Remove featured image', 'medical-academic-enhancements' ),
					'use_featured_image'       => __( 'Use as featured image', 'medical-academic-enhancements' ),
					'menu_name'                => __( 'Supplements', 'medical-academic-enhancements' ),
					'filter_items_list'        => __( 'Filter supplements list', 'medical-academic-enhancements' ),
					'items_list_navigation'    => __( 'Supplements list navigation', 'medical-academic-enhancements' ),
					'items_list'               => __( 'Supplements list', 'medical-academic-enhancements' ),
					'item_published'           => __( 'Supplement published.', 'medical-academic-enhancements' ),
					'item_published_privately' => __( 'Supplement published privately.', 'medical-academic-enhancements' ),
					'item_reverted_to_draft'   => __( 'Supplement reverted to draft.', 'medical-academic-enhancements' ),
					'item_scheduled'           => __( 'Supplement scheduled.', 'medical-academic-enhancements' ),
					'item_updated'             => __( 'Supplement updated.', 'medical-academic-enhancements' ),
				),
				'public'       => true,
				'show_in_rest' => true,
				'has_archive'  => false,
				'menu_icon'    => 'dashicons-plus',
				'supports'     => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
			)
		);

		// Research Paper.
		register_post_type(
			'research_paper',
			array(
				'labels'       => array(
					'name'                     => __( 'Research Papers', 'medical-academic-enhancements' ),
					'singular_name'            => __( 'Research Paper', 'medical-academic-enhancements' ),
					'add_new'                  => __( 'Add New', 'medical-academic-enhancements' ),
					'add_new_item'             => __( 'Add New Research Paper', 'medical-academic-enhancements' ),
					'edit_item'                => __( 'Edit Research Paper', 'medical-academic-enhancements' ),
					'new_item'                 => __( 'New Research Paper', 'medical-academic-enhancements' ),
					'view_item'                => __( 'View Research Paper', 'medical-academic-enhancements' ),
					'view_items'               => __( 'View Research Papers', 'medical-academic-enhancements' ),
					'search_items'             => __( 'Search Research Papers', 'medical-academic-enhancements' ),
					'not_found'                => __( 'No Research Papers found', 'medical-academic-enhancements' ),
					'not_found_in_trash'       => __( 'No Research Papers found in Trash', 'medical-academic-enhancements' ),
					'parent_item_colon'        => __( 'Parent Research Paper:', 'medical-academic-enhancements' ),
					'all_items'                => __( 'All Research Papers', 'medical-academic-enhancements' ),
					'archives'                 => __( 'Research Paper Archives', 'medical-academic-enhancements' ),
					'attributes'               => __( 'Research Paper Attributes', 'medical-academic-enhancements' ),
					'insert_into_item'         => __( 'Insert into research paper', 'medical-academic-enhancements' ),
					'uploaded_to_this_item'    => __( 'Uploaded to this research paper', 'medical-academic-enhancements' ),
					'featured_image'           => __( 'Featured image', 'medical-academic-enhancements' ),
					'set_featured_image'       => __( 'Set featured image', 'medical-academic-enhancements' ),
					'remove_featured_image'    => __( 'Remove featured image', 'medical-academic-enhancements' ),
					'use_featured_image'       => __( 'Use as featured image', 'medical-academic-enhancements' ),
					'menu_name'                => __( 'Research Papers', 'medical-academic-enhancements' ),
					'filter_items_list'        => __( 'Filter research papers list', 'medical-academic-enhancements' ),
					'items_list_navigation'    => __( 'Research papers list navigation', 'medical-academic-enhancements' ),
					'items_list'               => __( 'Research papers list', 'medical-academic-enhancements' ),
					'item_published'           => __( 'Research Paper published.', 'medical-academic-enhancements' ),
					'item_published_privately' => __( 'Research Paper published privately.', 'medical-academic-enhancements' ),
					'item_reverted_to_draft'   => __( 'Research Paper reverted to draft.', 'medical-academic-enhancements' ),
					'item_scheduled'           => __( 'Research Paper scheduled.', 'medical-academic-enhancements' ),
					'item_updated'             => __( 'Research Paper updated.', 'medical-academic-enhancements' ),
				),
				'public'       => true,
				'show_in_rest' => true,
				'has_archive'  => true,
				'menu_icon'    => 'dashicons-id-alt',
				'supports'     => array( 'title', 'editor', 'thumbnail', 'author', 'custom-fields' ),
			)
		);

		// Journey.
		register_post_type(
			'journey',
			array(
				'labels'       => array(
					'name'                     => __( 'Journeys', 'medical-academic-enhancements' ),
					'singular_name'            => __( 'Journey', 'medical-academic-enhancements' ),
					'add_new'                  => __( 'Add New', 'medical-academic-enhancements' ),
					'add_new_item'             => __( 'Add New Journey', 'medical-academic-enhancements' ),
					'edit_item'                => __( 'Edit Journey', 'medical-academic-enhancements' ),
					'new_item'                 => __( 'New Journey', 'medical-academic-enhancements' ),
					'view_item'                => __( 'View Journey', 'medical-academic-enhancements' ),
					'view_items'               => __( 'View Journeys', 'medical-academic-enhancements' ),
					'search_items'             => __( 'Search Journeys', 'medical-academic-enhancements' ),
					'not_found'                => __( 'No Journeys found', 'medical-academic-enhancements' ),
					'not_found_in_trash'       => __( 'No Journeys found in Trash', 'medical-academic-enhancements' ),
					'parent_item_colon'        => __( 'Parent Journey:', 'medical-academic-enhancements' ),
					'all_items'                => __( 'All Journeys', 'medical-academic-enhancements' ),
					'archives'                 => __( 'Journey Archives', 'medical-academic-enhancements' ),
					'attributes'               => __( 'Journey Attributes', 'medical-academic-enhancements' ),
					'insert_into_item'         => __( 'Insert into journey', 'medical-academic-enhancements' ),
					'uploaded_to_this_item'    => __( 'Uploaded to this journey', 'medical-academic-enhancements' ),
					'featured_image'           => __( 'Featured image', 'medical-academic-enhancements' ),
					'set_featured_image'       => __( 'Set featured image', 'medical-academic-enhancements' ),
					'remove_featured_image'    => __( 'Remove featured image', 'medical-academic-enhancements' ),
					'use_featured_image'       => __( 'Use as featured image', 'medical-academic-enhancements' ),
					'menu_name'                => __( 'Journeys', 'medical-academic-enhancements' ),
					'filter_items_list'        => __( 'Filter journeys list', 'medical-academic-enhancements' ),
					'items_list_navigation'    => __( 'Journeys list navigation', 'medical-academic-enhancements' ),
					'items_list'               => __( 'Journeys list', 'medical-academic-enhancements' ),
					'item_published'           => __( 'Journey published.', 'medical-academic-enhancements' ),
					'item_published_privately' => __( 'Journey published privately.', 'medical-academic-enhancements' ),
					'item_reverted_to_draft'   => __( 'Journey reverted to draft.', 'medical-academic-enhancements' ),
					'item_scheduled'           => __( 'Journey scheduled.', 'medical-academic-enhancements' ),
					'item_updated'             => __( 'Journey updated.', 'medical-academic-enhancements' ),
				),
				'public'       => true,
				'show_in_rest' => true,
				'has_archive'  => true,
				'menu_icon'    => 'dashicons-list-view',
				'supports'     => array( 'title', 'editor', 'custom-fields' ),
			)
		);
	}
}
