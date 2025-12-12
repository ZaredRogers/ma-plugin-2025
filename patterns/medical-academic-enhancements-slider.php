<?php
/**
 * Title: Item Slider
 * Slug: medical-academic-enhancements/slider
 * Categories: medical-academic-enhancements
 * Keywords: slider, carousel
 * Description: A horizontal scrollable list of items.
 * Viewport Width: 1200
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

return array(
	'title'       => __( 'Item Slider', 'medical-academic-enhancements' ),
	'slug'        => 'medical-academic-enhancements/slider',
	'categories'  => array( 'medical-academic-enhancements' ),
	'description' => __( 'A horizontal scrollable list of items.', 'medical-academic-enhancements' ),
	'content'     => '<!-- wp:query {"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"constrained"}} -->
<div class="wp-block-query">
	<!-- wp:post-template {"layout":{"type":"flex","flexWrap":"nowrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
	<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20"}},"layout":{"selfStretch":"fixed","flexSize":"300px"}}} -->
	<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">
		<!-- wp:pattern {"slug":"medical-academic-enhancements/card"} /-->
	</div>
	<!-- /wp:group -->
	<!-- /wp:post-template -->
</div>
<!-- /wp:query -->',
);

