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
					'name'          => __( 'CPD Articles', 'medical-academic-enhancements' ),
					'singular_name' => __( 'CPD Article', 'medical-academic-enhancements' ),
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
					'name'          => __( 'Webinars & Events', 'medical-academic-enhancements' ),
					'singular_name' => __( 'Webinar/Event', 'medical-academic-enhancements' ),
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
					'name'          => __( 'Digital Magazines', 'medical-academic-enhancements' ),
					'singular_name' => __( 'Digital Magazine', 'medical-academic-enhancements' ),
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
					'name'          => __( 'Supplements', 'medical-academic-enhancements' ),
					'singular_name' => __( 'Supplement', 'medical-academic-enhancements' ),
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
					'name'          => __( 'Research Papers', 'medical-academic-enhancements' ),
					'singular_name' => __( 'Research Paper', 'medical-academic-enhancements' ),
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
					'name'          => __( 'Journeys/Collections', 'medical-academic-enhancements' ),
					'singular_name' => __( 'Journey', 'medical-academic-enhancements' ),
				),
				'public'       => true,
				'show_in_rest' => true,
				'has_archive'  => true,
				'menu_icon'    => 'dashicons-list-view',
				'supports'     => array( 'title', 'editor', 'custom-fields' ),
			)
		);

		// Advertiser.
		register_post_type(
			'advertiser',
			array(
				'labels'       => array(
					'name'          => __( 'Advertisers', 'medical-academic-enhancements' ),
					'singular_name' => __( 'Advertiser', 'medical-academic-enhancements' ),
				),
				'public'       => true,
				'show_in_rest' => true,
				'has_archive'  => false,
				'menu_icon'    => 'dashicons-businessman',
				'supports'     => array( 'title', 'thumbnail', 'custom-fields' ),
			)
		);
	}
}
