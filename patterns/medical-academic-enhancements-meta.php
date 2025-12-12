<?php
/**
 * Title: Item Meta
 * Slug: medical-academic-enhancements/meta
 * Categories: medical-academic-enhancements
 * Keywords: meta, taxonomy
 * Description: Display item metadata and taxonomies.
 * Viewport Width: 720
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'title'       => __( 'Item Meta', 'medical-academic-enhancements' ),
	'slug'        => 'medical-academic-enhancements/meta',
	'categories'  => array( 'medical-academic-enhancements' ),
	'description' => __( 'Display item metadata and taxonomies.', 'medical-academic-enhancements' ),
	'content'     => '<!-- wp:group {"className":"medical-academic-enhancements-meta","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|40"}}},"backgroundColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group medical-academic-enhancements-meta has-contrast-background-color has-background" style="margin-top:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
	<!-- wp:heading {"level":4} -->
	<h4>' . esc_html__( 'Details', 'medical-academic-enhancements' ) . '</h4>
	<!-- /wp:heading -->

	<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"}} -->
	<div class="wp-block-group">
		<!-- wp:post-terms {"term":"specialty","prefix":"' . esc_attr__( 'Specialty: ', 'medical-academic-enhancements' ) . '"} /-->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->',
);

