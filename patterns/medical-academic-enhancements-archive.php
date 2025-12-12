<?php
/**
 * Title: Item Archive
 * Slug: medical-academic-enhancements/archive
 * Categories: medical-academic-enhancements
 * Keywords: archive, grid
 * Description: Displays an archive grid of items.
 * Block Types: core/query
 * Viewport Width: 1200
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'title'       => __( 'Item Archive', 'medical-academic-enhancements' ),
	'slug'        => 'medical-academic-enhancements/archive',
	'categories'  => array( 'medical-academic-enhancements' ),
	'description' => __( 'Displays an archive grid of items.', 'medical-academic-enhancements' ),
	'content'     => '<!-- wp:query {"queryId":1,"query":{"postType":"cpd_article","perPage":12,"inherit":true},"layout":{"type":"constrained"}} -->
<div class="wp-block-query">
	<!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
		<!-- wp:pattern {"slug":"medical-academic-enhancements/card"} /-->
	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->
	<!-- /wp:query-pagination -->

	<!-- wp:query-no-results -->
		<!-- wp:paragraph {"align":"center"} -->
		<p class="has-text-align-center">' . __( 'No items found.', 'medical-academic-enhancements' ) . '</p>
		<!-- /wp:paragraph -->
	<!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->',
);

