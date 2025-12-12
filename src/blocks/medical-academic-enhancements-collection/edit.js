/**
 * Example Plugin Collection Block - Editor Component
 *
 * @package
 */

import { __ } from '@wordpress/i18n';
import { useBlockProps, InspectorControls } from '@wordpress/block-editor';
import {
	PanelBody,
	ToggleControl,
	SelectControl,
	RangeControl,
} from '@wordpress/components';
import { useSelect } from '@wordpress/data';
import { useMemo } from '@wordpress/element';

/**
 * Collection block edit component.
 *
 * @param {Object}   props               Block props.
 * @param {Object}   props.attributes    Block attributes.
 * @param {Function} props.setAttributes Function to update attributes.
 *
 * @return {Element} Block editor component.
 */
export default function Edit({ attributes, setAttributes }) {
	const {
		query,
		layout,
		columns,
		displayFeaturedImage,
		displayTitle,
		displayExcerpt,
		displayMeta,
		displayPagination,
	} = attributes;

	const { perPage, order, orderBy, featured } = query;

	const updateQuery = (newQuery) => {
		setAttributes({ query: { ...query, ...newQuery } });
	};

	const posts = useSelect(
		(select) => {
			const queryArgs = {
				per_page: perPage,
				order,
				orderby: orderBy,
				_embed: true,
			};

			return select('core').getEntityRecords(
				'postType',
				'medical-academic-enhancements',
				queryArgs
			);
		},
		[perPage, order, orderBy]
	);

	const blockProps = useBlockProps({
		className: `wp-block-example_plugin-example-plugin-collection is-layout-${layout}`,
	});

	const gridStyle = useMemo(() => {
		if (layout === 'grid') {
			return {
				display: 'grid',
				gridTemplateColumns: `repeat(${columns}, 1fr)`,
				gap: '1.5rem',
			};
		}
		return {};
	}, [layout, columns]);

	return (
		<>
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
							{
								label: __('Date', 'medical-academic-enhancements'),
								value: 'date',
							},
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

				<PanelBody title={__('Layout', 'medical-academic-enhancements')}>
					<SelectControl
						label={__('Layout', 'medical-academic-enhancements')}
						value={layout}
						options={[
							{
								label: __('Grid', 'medical-academic-enhancements'),
								value: 'grid',
							},
							{
								label: __('List', 'medical-academic-enhancements'),
								value: 'list',
							},
							{
								label: __('Slider', 'medical-academic-enhancements'),
								value: 'slider',
							},
						]}
						onChange={(value) => setAttributes({ layout: value })}
					/>
					{layout === 'grid' && (
						<RangeControl
							label={__('Columns', 'medical-academic-enhancements')}
							value={columns}
							onChange={(value) =>
								setAttributes({ columns: value })
							}
							min={1}
							max={6}
						/>
					)}
				</PanelBody>

				<PanelBody title={__('Display Settings', 'medical-academic-enhancements')}>
					<ToggleControl
						label={__('Display Featured Image', 'medical-academic-enhancements')}
						checked={displayFeaturedImage}
						onChange={(value) =>
							setAttributes({ displayFeaturedImage: value })
						}
					/>
					<ToggleControl
						label={__('Display Title', 'medical-academic-enhancements')}
						checked={displayTitle}
						onChange={(value) =>
							setAttributes({ displayTitle: value })
						}
					/>
					<ToggleControl
						label={__('Display Excerpt', 'medical-academic-enhancements')}
						checked={displayExcerpt}
						onChange={(value) =>
							setAttributes({ displayExcerpt: value })
						}
					/>
					<ToggleControl
						label={__('Display Meta', 'medical-academic-enhancements')}
						checked={displayMeta}
						onChange={(value) =>
							setAttributes({ displayMeta: value })
						}
					/>
					<ToggleControl
						label={__('Display Pagination', 'medical-academic-enhancements')}
						checked={displayPagination}
						onChange={(value) =>
							setAttributes({ displayPagination: value })
						}
					/>
				</PanelBody>
			</InspectorControls>

			<div {...blockProps}>
				{posts === null && <p>{__('Loading…', 'medical-academic-enhancements')}</p>}

				{posts && posts.length === 0 && (
					<p>{__('No items found.', 'medical-academic-enhancements')}</p>
				)}

				{posts && posts.length > 0 && (
					<div
						className="wp-block-example_plugin-example-plugin-collection__items"
						style={gridStyle}
					>
						{posts.map((post) => (
							<article
								key={post.id}
								className="wp-block-example_plugin-example-plugin-collection__item"
							>
								{displayFeaturedImage &&
									post._embedded?.[
										'wp:featuredmedia'
									]?.[0] && (
										<div className="wp-block-example_plugin-example-plugin-collection__image">
											<img
												src={
													post._embedded[
														'wp:featuredmedia'
													][0].source_url
												}
												alt={
													post._embedded[
														'wp:featuredmedia'
													][0].alt_text || ''
												}
											/>
										</div>
									)}
								<div className="wp-block-example_plugin-example-plugin-collection__content">
									{displayTitle && (
										<h3 className="wp-block-example_plugin-example-plugin-collection__title">
											{post.title.rendered}
										</h3>
									)}
									{displayExcerpt && (
										<div
											className="wp-block-example_plugin-example-plugin-collection__excerpt"
											dangerouslySetInnerHTML={{
												__html: post.excerpt.rendered,
											}}
										/>
									)}
									{displayMeta && (
										<div className="wp-block-example_plugin-example-plugin-collection__meta">
											<time>
												{new Date(
													post.date
												).toLocaleDateString()}
											</time>
										</div>
									)}
								</div>
							</article>
						))}
					</div>
				)}
			</div>
		</>
	);
}
