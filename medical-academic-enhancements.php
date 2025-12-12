<?php
/**
 * Plugin Name:       Medical Academic Enhancements
 * Plugin URI:        
 * Description:       Registers CPTs, taxonomies, and blocks for the Medical Academic platform.
 * Version:           1.0.0
 * Requires at least: 6.5
 * Requires PHP:      8.0
 * Requires Plugins:  secure-custom-fields
 * Author:            LightSpeed
 * Author URI:        https://lightspeedwp.agency
 * License:           GPL-3.0-or-later
 * License URI:       
 * Text Domain:       medical-academic-enhancements
 * Domain Path:       /languages
 *
 * @package medical_academic_enhancements
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Plugin constants.
define( 'MEDICAL_ACADEMIC_ENHANCEMENTS_VERSION', '1.0.0' );
define( 'MEDICAL_ACADEMIC_ENHANCEMENTS_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'MEDICAL_ACADEMIC_ENHANCEMENTS_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'MEDICAL_ACADEMIC_ENHANCEMENTS_PLUGIN_BASENAME', plugin_basename( __FILE__ ) );

/**
 * Defensive coding: Check for SCF/ACF functions before using them.
 *
 * While Plugin Dependencies ensures SCF is active, defensive coding is still
 * recommended for:
 * - Edge cases (FTP deletion, deployment issues)
 * - Loading order variations
 * - Future compatibility
 *
 * @see https://make.wordpress.org/core/2024/03/05/introducing-plugin-dependencies-in-wordpress-6-5/
 */
if ( ! function_exists( 'acf_add_local_field_group' ) ) {
	add_action(
		'admin_notices',
		function () {
			echo '<div class="error"><p>' .
				esc_html__( 'Medical Academic Enhancements requires Secure Custom Fields to be active.', 'medical-academic-enhancements' ) .
				'</p></div>';
		}
	);
	return;
}

// Include the Core class.
require_once MEDICAL_ACADEMIC_ENHANCEMENTS_PLUGIN_DIR . 'inc/class-core.php';

/**
 * Initialise the plugin and return the main instance.
 *
 * @return \medical_academic_enhancements\classes\Core Main plugin instance.
 */
function medical_academic_enhancements_plugin() {
	global $medical_academic_enhancements_plugin;
	if ( null === $medical_academic_enhancements_plugin ) {
		$medical_academic_enhancements_plugin = new \medical_academic_enhancements\classes\Core();
	}
	return $medical_academic_enhancements_plugin;
}

// Initialize the plugin.
medical_academic_enhancements_plugin();
