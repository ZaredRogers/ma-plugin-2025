/**
 * Query Controls Component
 *
 * Reusable query configuration controls for collection blocks.
 *
 * @package
 */

import { __ } from '@wordpress/i18n';
import {
	PanelBody,
	RangeControl,
	SelectControl,
	ToggleControl,
} from '@wordpress/components';
import { InspectorControls } from '@wordpress/block-editor';
import TaxonomyFilter from '../TaxonomyFilter';

/**
 * QueryControls component.
 *
 * @param {Object}   props          Component props.
 * @param {Object}   props.query    Current query settings.
 * @param {Function} props.onChange Callback when query changes.
 *
 * @return {Element} QueryControls component.
 */
export default function QueryControls({ query, onChange }) {
	const {
		perPage = 6,
		order = 'desc',
		orderBy = 'date',
		featured = false,
		taxQuery = null,
	} = query;

	const updateQuery = (updates) => {
		onChange({ ...query, ...updates });
	};

	return (
		<InspectorControls>
			<PanelBody title={__('Query Settings', 'medical-academic-enhancements')}>
				<RangeControl
					label={__('Number of Items', 'medical-academic-enhancements')}
					value={perPage}
					onChange={(value) => updateQuery({ perPage: value })}
					min={1}
					max={24}
				/>
				<SelectControl
					label={__('Order By', 'medical-academic-enhancements')}
					value={orderBy}
					options={[
						{ label: __('Date', 'medical-academic-enhancements'), value: 'date' },
						{
							label: __('Title', 'medical-academic-enhancements'),
							value: 'title',
						},
						{
							label: __('Modified', 'medical-academic-enhancements'),
							value: 'modified',
						},
						{
							label: __('Random', 'medical-academic-enhancements'),
							value: 'rand',
						},
						{
							label: __('Menu Order', 'medical-academic-enhancements'),
							value: 'menu_order',
						},
					]}
					onChange={(value) => updateQuery({ orderBy: value })}
				/>
				<SelectControl
					label={__('Order', 'medical-academic-enhancements')}
					value={order}
					options={[
						{
							label: __('Descending', 'medical-academic-enhancements'),
							value: 'desc',
						},
						{
							label: __('Ascending', 'medical-academic-enhancements'),
							value: 'asc',
						},
					]}
					onChange={(value) => updateQuery({ order: value })}
				/>
				<ToggleControl
					label={__('Featured Only', 'medical-academic-enhancements')}
					checked={featured}
					onChange={(value) => updateQuery({ featured: value })}
				/>
			</PanelBody>

			<PanelBody
				title={__('Filter by Taxonomy', 'medical-academic-enhancements')}
				initialOpen={false}
			>
				<TaxonomyFilter
					taxonomy="example-plugin_category"
					value={taxQuery?.['example-plugin_category'] || []}
					onChange={(termIds) =>
						updateQuery({
							taxQuery: termIds.length
								? { 'example-plugin_category': termIds }
								: null,
						})
					}
					label={__('Categories', 'medical-academic-enhancements')}
				/>
			</PanelBody>
		</InspectorControls>
	);
}
