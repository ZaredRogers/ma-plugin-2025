<?php
/**
 * Title: Featured Items
 * Slug: medical-academic-enhancements/featured-pattern
 * Categories: medical-academic-enhancements
 * Keywords: featured, highlight
 * Description: Display featured items.
 * Viewport Width: 1200
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'title'       => __( 'Featured Items', 'medical-academic-enhancements' ),
	'slug'        => 'medical-academic-enhancements/featured-pattern',
	'categories'  => array( 'medical-academic-enhancements' ),
	'description' => __( 'Display featured items.', 'medical-academic-enhancements' ),
	'content'     => '<!-- wp:query {"queryId":2,"query":{"postType":"cpd_article","perPage":3},"layout":{"type":"constrained"}} -->
<div class="wp-block-query">
	<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:pattern {"slug":"medical-academic-enhancements/card"} /-->
	<!-- /wp:post-template -->
</div>
<!-- /wp:query -->',
);

