/**
 * Example Plugin Collection Block - Variations
 *
 * @package
 */

import { __ } from '@wordpress/i18n';

const variations = [
	{
		name: 'grid',
		title: __('Example Plugin Grid', 'medical-academic-enhancements'),
		description: __('Display items in a grid layout.', 'medical-academic-enhancements'),
		icon: 'grid-view',
		attributes: {
			layout: 'grid',
			columns: 3,
		},
		scope: ['inserter', 'transform'],
		isDefault: true,
	},
	{
		name: 'list',
		title: __('Example Plugin List', 'medical-academic-enhancements'),
		description: __('Display items in a list layout.', 'medical-academic-enhancements'),
		icon: 'list-view',
		attributes: {
			layout: 'list',
		},
		scope: ['inserter', 'transform'],
	},
	{
		name: 'slider',
		title: __('Example Plugin Slider', 'medical-academic-enhancements'),
		description: __(
			'Display items in a slider/carousel layout.',
			'medical-academic-enhancements'
		),
		icon: 'slides',
		attributes: {
			layout: 'slider',
		},
		scope: ['inserter', 'transform'],
	},
	{
		name: 'featured',
		title: __('Featured Items', 'medical-academic-enhancements'),
		description: __('Display only featured items.', 'medical-academic-enhancements'),
		icon: 'star-filled',
		attributes: {
			layout: 'grid',
			columns: 3,
			query: {
				postType: 'medical-academic-enhancements',
				perPage: 3,
				order: 'desc',
				orderBy: 'date',
				featured: true,
			},
		},
		scope: ['inserter'],
	},
];

export default variations;
