<?php
namespace medical_academic_enhancements\classes;

/**
 * Custom Fields Registration using Secure Custom Fields.
 *
 * @package example_plugin
 * @see https://wordpress.org/plugins/secure-custom-fields/
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Fields class.
 */
class Fields {

	/**
	 * Constructor.
	 */
	public function __construct() {
		add_action( 'acf/init', array( $this, 'register_fields' ) );
		add_action( 'admin_notices', array( $this, 'scf_dependency_notice' ) );
	}

	/**
	 * Check if Secure Custom Fields is active.
	 *
	 * @return bool
	 */
	public function is_scf_active() {
		return function_exists( 'acf_add_local_field_group' );
	}

	/**
	 * Display admin notice if SCF is not active.
	 *
	 * @return void
	 */
	public function scf_dependency_notice() {
		if ( ! $this->is_scf_active() ) {
			?>
			<div class="notice notice-warning">
				<p>
					<?php
					printf(
						/* translators: %s: Plugin name */
						esc_html__( '%s requires Secure Custom Fields plugin to be installed and activated for custom fields functionality.', 'medical-academic-enhancements' ),
						'<strong>Medical Academic Enhancements</strong>'
					);
					?>
				</p>
			</div>
			<?php
		}
	}

	/**
	 * Register custom fields.
	 *
	 * @return void
	 */
	public function register_fields() {
		if ( ! $this->is_scf_active() ) {
			return;
		}

		// CPD Article Fields.
		acf_add_local_field_group(
			array(
				'key'      => 'group_cpd_article',
				'title'    => __( 'CPD Article Details', 'medical-academic-enhancements' ),
				'fields'   => array(
					array(
						'key'   => 'field_headline',
						'label' => __( 'Headline', 'medical-academic-enhancements' ),
						'name'  => 'headline',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_subheading',
						'label' => __( 'Subheading', 'medical-academic-enhancements' ),
						'name'  => 'subheading',
						'type'  => 'textarea',
					),
					array(
						'key'           => 'field_cpd_points',
						'label'         => __( 'CPD Points', 'medical-academic-enhancements' ),
						'name'          => 'cpd_points',
						'type'          => 'number',
						'default_value' => 1,
						'min'           => 1,
						'max'           => 5,
					),
					array(
						'key'        => 'field_cpd_accreditation_numbers',
						'label'      => __( 'CPD Accreditation Numbers', 'medical-academic-enhancements' ),
						'name'       => 'cpd_accreditation_numbers',
						'type'       => 'repeater',
						'sub_fields' => array(
							array(
								'key'   => 'field_accreditation_number',
								'label' => __( 'Number', 'medical-academic-enhancements' ),
								'name'  => 'number',
								'type'  => 'text',
							),
						),
					),
					array(
						'key'   => 'field_accreditation_expiry',
						'label' => __( 'Accreditation Expiry', 'medical-academic-enhancements' ),
						'name'  => 'accreditation_expiry',
						'type'  => 'date_picker',
					),
					array(
						'key'           => 'field_pass_mark',
						'label'         => __( 'Pass Mark (%)', 'medical-academic-enhancements' ),
						'name'          => 'pass_mark',
						'type'          => 'number',
						'default_value' => 75,
					),
					array(
						'key'       => 'field_quiz_group',
						'label'     => __( 'Quiz Group', 'medical-academic-enhancements' ),
						'name'      => 'quiz_group',
						'type'      => 'relationship',
						'post_type' => array( 'quiz' ), // Assuming 'quiz' CPT exists or will exist.
					),
					array(
						'key'   => 'field_certificate_template',
						'label' => __( 'Certificate Template', 'medical-academic-enhancements' ),
						'name'  => 'certificate_template',
						'type'  => 'file',
					),
					array(
						'key'       => 'field_related_articles',
						'label'     => __( 'Related Articles', 'medical-academic-enhancements' ),
						'name'      => 'related_articles',
						'type'      => 'relationship',
						'post_type' => array( 'cpd_article' ),
						'max'       => 3,
					),
				),
				'location' => array(
					array(
						array(
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'cpd_article',
						),
					),
				),
			)
		);

		// Webinar Fields.
		acf_add_local_field_group(
			array(
				'key'      => 'group_webinar',
				'title'    => __( 'Webinar Details', 'medical-academic-enhancements' ),
				'fields'   => array(
					array(
						'key'   => 'field_webinarjam_id',
						'label' => __( 'WebinarJam ID / Integration ID', 'medical-academic-enhancements' ),
						'name'  => 'webinarjam_id',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_start_datetime',
						'label' => __( 'Start Date & Time', 'medical-academic-enhancements' ),
						'name'  => 'start_datetime',
						'type'  => 'date_time_picker',
					),
					array(
						'key'   => 'field_end_datetime',
						'label' => __( 'End Date & Time', 'medical-academic-enhancements' ),
						'name'  => 'end_datetime',
						'type'  => 'date_time_picker',
					),
					array(
						'key'     => 'field_status',
						'label'   => __( 'Status', 'medical-academic-enhancements' ),
						'name'    => 'status',
						'type'    => 'select',
						'choices' => array(
							'upcoming' => 'Upcoming',
							'live'     => 'Live',
							'replay'   => 'Replay',
						),
					),
					array(
						'key'   => 'field_webinar_cpd_points',
						'label' => __( 'CPD Points', 'medical-academic-enhancements' ),
						'name'  => 'cpd_points',
						'type'  => 'number',
					),
					array(
						'key'   => 'field_webinar_accreditation_expiry',
						'label' => __( 'Accreditation Expiry', 'medical-academic-enhancements' ),
						'name'  => 'accreditation_expiry',
						'type'  => 'date_picker',
					),
					array(
						'key'        => 'field_speakers',
						'label'      => __( 'Speakers', 'medical-academic-enhancements' ),
						'name'       => 'speakers',
						'type'       => 'repeater',
						'sub_fields' => array(
							array(
								'key'   => 'field_speaker_name',
								'label' => __( 'Name', 'medical-academic-enhancements' ),
								'name'  => 'speaker_name',
								'type'  => 'text',
							),
							array(
								'key'   => 'field_speaker_title',
								'label' => __( 'Title', 'medical-academic-enhancements' ),
								'name'  => 'speaker_title',
								'type'  => 'text',
							),
							array(
								'key'   => 'field_speaker_bio',
								'label' => __( 'Bio', 'medical-academic-enhancements' ),
								'name'  => 'speaker_bio',
								'type'  => 'textarea',
							),
							array(
								'key'   => 'field_speaker_photo',
								'label' => __( 'Photo', 'medical-academic-enhancements' ),
								'name'  => 'speaker_photo',
								'type'  => 'image',
							),
						),
					),
					array(
						'key'   => 'field_registration_form_config',
						'label' => __( 'Registration Form Config', 'medical-academic-enhancements' ),
						'name'  => 'registration_form_config',
						'type'  => 'textarea', // Or JSON/Group depending on needs.
					),
					array(
						'key'   => 'field_replay_url',
						'label' => __( 'Replay URL / Embed', 'medical-academic-enhancements' ),
						'name'  => 'replay_url',
						'type'  => 'url',
					),
					array(
						'key'   => 'field_is_paid',
						'label' => __( 'Is Paid?', 'medical-academic-enhancements' ),
						'name'  => 'is_paid',
						'type'  => 'true_false',
						'ui'    => 1,
					),
					array(
						'key'               => 'field_price',
						'label'             => __( 'Price', 'medical-academic-enhancements' ),
						'name'              => 'price',
						'type'              => 'number',
						'conditional_logic' => array(
							array(
								array(
									'field'    => 'field_is_paid',
									'operator' => '==',
									'value'    => '1',
								),
							),
						),
					),
				),
				'location' => array(
					array(
						array(
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'webinar',
						),
					),
				),
			)
		);

		// Digital Magazine Fields.
		acf_add_local_field_group(
			array(
				'key'      => 'group_digital_magazine',
				'title'    => __( 'Digital Magazine Details', 'medical-academic-enhancements' ),
				'fields'   => array(
					array(
						'key'   => 'field_issue_title',
						'label' => __( 'Issue Title', 'medical-academic-enhancements' ),
						'name'  => 'issue_title',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_volume',
						'label' => __( 'Volume', 'medical-academic-enhancements' ),
						'name'  => 'volume',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_issue_number',
						'label' => __( 'Issue Number', 'medical-academic-enhancements' ),
						'name'  => 'issue_number',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_publication_date',
						'label' => __( 'Publication Date', 'medical-academic-enhancements' ),
						'name'  => 'publication_date',
						'type'  => 'date_picker',
					),
					array(
						'key'   => 'field_issuu_document_id',
						'label' => __( 'Issuu Document ID / Embed', 'medical-academic-enhancements' ),
						'name'  => 'issuu_document_id',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_pdf_download',
						'label' => __( 'PDF Download', 'medical-academic-enhancements' ),
						'name'  => 'pdf_download',
						'type'  => 'file',
					),
					array(
						'key'   => 'field_is_open_access',
						'label' => __( 'Is Open Access?', 'medical-academic-enhancements' ),
						'name'  => 'is_open_access',
						'type'  => 'true_false',
						'ui'    => 1,
					),
				),
				'location' => array(
					array(
						array(
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'digital_magazine',
						),
					),
				),
			)
		);

		// Supplement Fields.
		acf_add_local_field_group(
			array(
				'key'      => 'group_supplement',
				'title'    => __( 'Supplement Details', 'medical-academic-enhancements' ),
				'fields'   => array(
					array(
						'key'   => 'field_supplement_issue_title',
						'label' => __( 'Issue Title', 'medical-academic-enhancements' ),
						'name'  => 'issue_title',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_supplement_publication_date',
						'label' => __( 'Publication Date', 'medical-academic-enhancements' ),
						'name'  => 'publication_date',
						'type'  => 'date_picker',
					),
					array(
						'key'       => 'field_related_magazine_issue',
						'label'     => __( 'Related Magazine Issue', 'medical-academic-enhancements' ),
						'name'      => 'related_magazine_issue',
						'type'      => 'relationship',
						'post_type' => array( 'digital_magazine' ),
						'max'       => 1,
					),
				),
				'location' => array(
					array(
						array(
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'supplement',
						),
					),
				),
			)
		);

		// Research Paper Fields.
		acf_add_local_field_group(
			array(
				'key'      => 'group_research_paper',
				'title'    => __( 'Research Paper Details', 'medical-academic-enhancements' ),
				'fields'   => array(
					array(
						'key'   => 'field_abstract',
						'label' => __( 'Abstract', 'medical-academic-enhancements' ),
						'name'  => 'abstract',
						'type'  => 'textarea',
					),
					array(
						'key'        => 'field_authors',
						'label'      => __( 'Authors', 'medical-academic-enhancements' ),
						'name'       => 'authors',
						'type'       => 'repeater',
						'sub_fields' => array(
							array(
								'key'   => 'field_author_name',
								'label' => __( 'Name', 'medical-academic-enhancements' ),
								'name'  => 'name',
								'type'  => 'text',
							),
							array(
								'key'   => 'field_author_affiliation',
								'label' => __( 'Affiliation', 'medical-academic-enhancements' ),
								'name'  => 'affiliation',
								'type'  => 'text',
							),
							array(
								'key'   => 'field_author_role',
								'label' => __( 'Role', 'medical-academic-enhancements' ),
								'name'  => 'role',
								'type'  => 'text',
							),
							array(
								'key'   => 'field_author_bio',
								'label' => __( 'Bio', 'medical-academic-enhancements' ),
								'name'  => 'bio',
								'type'  => 'textarea',
							),
							array(
								'key'   => 'field_author_photo',
								'label' => __( 'Photo', 'medical-academic-enhancements' ),
								'name'  => 'photo',
								'type'  => 'image',
							),
						),
					),
					array(
						'key'   => 'field_doi',
						'label' => __( 'DOI', 'medical-academic-enhancements' ),
						'name'  => 'doi',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_journal',
						'label' => __( 'Journal / Publication', 'medical-academic-enhancements' ),
						'name'  => 'journal',
						'type'  => 'text',
					),
					array(
						'key'   => 'field_research_cpd_points',
						'label' => __( 'CPD Points', 'medical-academic-enhancements' ),
						'name'  => 'cpd_points',
						'type'  => 'number',
					),
					array(
						'key'   => 'field_pagination_breaks',
						'label' => __( 'Pagination Breaks', 'medical-academic-enhancements' ),
						'name'  => 'pagination_breaks',
						'type'  => 'text', // Or appropriate type for pagination logic.
					),
				),
				'location' => array(
					array(
						array(
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'research_paper',
						),
					),
				),
			)
		);

		// Journey Fields.
		acf_add_local_field_group(
			array(
				'key'      => 'group_journey',
				'title'    => __( 'Journey Details', 'medical-academic-enhancements' ),
				'fields'   => array(
					array(
						'key'   => 'field_hero_summary',
						'label' => __( 'Hero Summary', 'medical-academic-enhancements' ),
						'name'  => 'hero_summary',
						'type'  => 'textarea',
					),
					array(
						'key'        => 'field_learning_objectives',
						'label'      => __( 'Learning Objectives', 'medical-academic-enhancements' ),
						'name'       => 'learning_objectives',
						'type'       => 'repeater',
						'sub_fields' => array(
							array(
								'key'   => 'field_objective',
								'label' => __( 'Objective', 'medical-academic-enhancements' ),
								'name'  => 'objective',
								'type'  => 'text',
							),
						),
					),
					array(
						'key'   => 'field_estimated_duration',
						'label' => __( 'Estimated Duration', 'medical-academic-enhancements' ),
						'name'  => 'estimated_duration',
						'type'  => 'text',
					),
					array(
						'key'        => 'field_included_items',
						'label'      => __( 'Included Items', 'medical-academic-enhancements' ),
						'name'       => 'included_items',
						'type'       => 'repeater',
						'sub_fields' => array(
							array(
								'key'     => 'field_item_type',
								'label'   => __( 'Item Type', 'medical-academic-enhancements' ),
								'name'    => 'item_type',
								'type'    => 'select',
								'choices' => array(
									'cpd_article'    => 'CPD Article',
									'webinar'        => 'Webinar',
									'research_paper' => 'Research Paper',
								),
							),
							array(
								'key'   => 'field_item_post_id',
								'label' => __( 'Item Post ID', 'medical-academic-enhancements' ),
								'name'  => 'item_post_id',
								'type'  => 'number', // Or post object/relationship if possible to make dynamic.
							),
							array(
								'key'   => 'field_order',
								'label' => __( 'Order', 'medical-academic-enhancements' ),
								'name'  => 'order',
								'type'  => 'number',
							),
							array(
								'key'   => 'field_is_required',
								'label' => __( 'Is Required?', 'medical-academic-enhancements' ),
								'name'  => 'is_required',
								'type'  => 'true_false',
								'ui'    => 1,
							),
						),
					),
					array(
						'key'   => 'field_journey_badge_label',
						'label' => __( 'Journey Badge Label', 'medical-academic-enhancements' ),
						'name'  => 'journey_badge_label',
						'type'  => 'text',
					),
				),
				'location' => array(
					array(
						array(
							'param'    => 'post_type',
							'operator' => '==',
							'value'    => 'journey',
						),
					),
				),
			)
		);
	}
}
