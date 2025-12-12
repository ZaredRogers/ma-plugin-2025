<?php
/**
 * Title: Item Grid
 * Slug: medical-academic-enhancements/grid
 * Categories: medical-academic-enhancements
 * Keywords: grid, collection
 * Description: A grid of items.
 * Viewport Width: 1200
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'title'       => __( 'Item Grid', 'medical-academic-enhancements' ),
	'slug'        => 'medical-academic-enhancements/grid',
	'categories'  => array( 'medical-academic-enhancements' ),
	'description' => __( 'A grid of items.', 'medical-academic-enhancements' ),
	'content'     => '<!-- wp:query {"queryId":3,"query":{"postType":"cpd_article","perPage":6},"layout":{"type":"constrained"}} -->
<div class="wp-block-query">
	<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:pattern {"slug":"medical-academic-enhancements/card"} /-->
	<!-- /wp:post-template -->
	
	<!-- wp:query-pagination -->
		<!-- wp:query-pagination-numbers /-->
	<!-- /wp:query-pagination -->
</div>
<!-- /wp:query -->',
);

