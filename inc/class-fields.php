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

// Fields are now loaded from JSON files in the scf-json directory.
}
}
