<?php
namespace medical_academic_enhancements\classes;

/**
 * Custom Taxonomy Registration.
 *
 * @package medical_academic_enhancements
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Taxonomies class.
 */
class Taxonomies {

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
		// Brand.
		register_taxonomy(
			'brand',
			array( 'cpd_article', 'webinar', 'digital_magazine', 'supplement', 'research_paper', 'journey', 'advertiser' ),
			array(
				'labels'            => array(
					'name'          => __( 'Brands', 'medical-academic-enhancements' ),
					'singular_name' => __( 'Brand', 'medical-academic-enhancements' ),
				),
				'hierarchical'      => false,
				'public'            => true,
				'show_in_rest'      => true,
				'show_admin_column' => true,
			)
		);

		// Speciality.
		register_taxonomy(
			'speciality',
			array( 'cpd_article', 'webinar', 'research_paper' ),
			array(
				'labels'            => array(
					'name'          => __( 'Medical Specialities', 'medical-academic-enhancements' ),
					'singular_name' => __( 'Medical Speciality', 'medical-academic-enhancements' ),
				),
				'hierarchical'      => true,
				'public'            => true,
				'show_in_rest'      => true,
				'show_admin_column' => true,
			)
		);

		// CPD Type.
		register_taxonomy(
			'cpd_type',
			array( 'cpd_article', 'webinar' ),
			array(
				'labels'            => array(
					'name'          => __( 'CPD Types', 'medical-academic-enhancements' ),
					'singular_name' => __( 'CPD Type', 'medical-academic-enhancements' ),
				),
				'hierarchical'      => false,
				'public'            => true,
				'show_in_rest'      => true,
				'show_admin_column' => true,
			)
		);

		// Topic.
		register_taxonomy(
			'topic',
			array( 'cpd_article', 'webinar', 'digital_magazine', 'supplement', 'research_paper', 'journey', 'advertiser' ),
			array(
				'labels'            => array(
					'name'          => __( 'Topics', 'medical-academic-enhancements' ),
					'singular_name' => __( 'Topic', 'medical-academic-enhancements' ),
				),
				'hierarchical'      => true,
				'public'            => true,
				'show_in_rest'      => true,
				'show_admin_column' => true,
			)
		);

		// Region.
		register_taxonomy(
			'region',
			array( 'user', 'advertiser', 'event' ),
			array(
				'labels'            => array(
					'name'          => __( 'Regions', 'medical-academic-enhancements' ),
					'singular_name' => __( 'Region', 'medical-academic-enhancements' ),
				),
				'hierarchical'      => false,
				'public'            => true,
				'show_in_rest'      => true,
				'show_admin_column' => true,
			)
		);

		// Magazine Issue.
		register_taxonomy(
			'magazine_issue',
			array( 'digital_magazine' ),
			array(
				'labels'            => array(
					'name'          => __( 'Issues/Editions', 'medical-academic-enhancements' ),
					'singular_name' => __( 'Issue/Edition', 'medical-academic-enhancements' ),
				),
				'hierarchical'      => true,
				'public'            => true,
				'show_in_rest'      => true,
				'show_admin_column' => true,
			)
		);

		// Journey Group.
		register_taxonomy(
			'journey_group',
			array( 'journey', 'cpd_article', 'webinar', 'research_paper' ),
			array(
				'labels'            => array(
					'name'          => __( 'Journey Groupings', 'medical-academic-enhancements' ),
					'singular_name' => __( 'Journey Grouping', 'medical-academic-enhancements' ),
				),
				'hierarchical'      => false,
				'public'            => true,
				'show_in_rest'      => true,
				'show_admin_column' => true,
			)
		);

		// Sponsor.
		register_taxonomy(
			'sponsor',
			array( 'webinar', 'digital_magazine' ),
			array(
				'labels'            => array(
					'name'          => __( 'Sponsors', 'medical-academic-enhancements' ),
					'singular_name' => __( 'Sponsor', 'medical-academic-enhancements' ),
				),
				'hierarchical'      => false,
				'public'            => true,
				'show_in_rest'      => true,
				'show_admin_column' => true,
			)
		);

		// Tag.
		register_taxonomy(
			'tag',
			array( 'cpd_article', 'webinar', 'digital_magazine', 'supplement', 'research_paper', 'journey', 'advertiser' ),
			array(
				'labels'            => array(
					'name'          => __( 'Tags', 'medical-academic-enhancements' ),
					'singular_name' => __( 'Tag', 'medical-academic-enhancements' ),
				),
				'hierarchical'      => false,
				'public'            => true,
				'show_in_rest'      => true,
				'show_admin_column' => true,
			)
		);

		// Ads Category.
		register_taxonomy(
			'ads_category',
			array( 'digital_magazine', 'supplement', 'advertiser' ),
			array(
				'labels'            => array(
					'name'          => __( 'Ad Categories', 'medical-academic-enhancements' ),
					'singular_name' => __( 'Ad Category', 'medical-academic-enhancements' ),
				),
				'hierarchical'      => false,
				'public'            => true,
				'show_in_rest'      => true,
				'show_admin_column' => true,
			)
		);
	}
}
