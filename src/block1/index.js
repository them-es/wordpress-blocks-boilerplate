/**
 * Block 1
 * https://wordpress.org/gutenberg/handbook/designers-developers/developers/tutorials/block-tutorial/writing-your-first-block-type
 */

const { __ } = wp.i18n;
const {
	registerBlockType,
} = wp.blocks;
const {
	InspectorControls,
	PanelColorSettings,
} = wp.editor;

registerBlockType( 'theme-blocks/block1', {
	title: __( 'Block 1' ),
	icon: 'grid-view', // https://developer.wordpress.org/resource/dashicons
	category: 'theme-blocks', // Custom category: see index.php

	edit: props => {
		const {
			className,
			attributes: {
				blockBackgroundColor,
				blockTextColor,
			},
			setAttributes,
		} = props;

		const onSetBackgroundColor = ( val ) => {
			//console.log( val );
			setAttributes({
				blockBackgroundColor: val
			})
		};
		const onSetTextColor = ( val ) => {
			//console.log( val );
			setAttributes({
				blockTextColor: val
			})
		};

		const blockStyle = {
			backgroundColor: blockBackgroundColor ? blockBackgroundColor : undefined,
			color: blockTextColor ? blockTextColor : undefined,
			padding: '20px',
		};
		
		// Markup: Backend
		return ([
			<InspectorControls>
				<div>
					<PanelColorSettings
						initialOpen={ false }
						title={ __( 'Custom Color Settings' ) }
						colorSettings={ [
							{
								value: blockBackgroundColor,
								onChange: onSetBackgroundColor,
								label: __( 'Background Color' ),
							},
							{
								value: blockTextColor,
								onChange: onSetTextColor,
								label: __( 'Text Color' ),
							},
						] }
					/>
				</div>
			</InspectorControls>,

			<div
				className={ ( className ? className : '' ) }
				style={ blockStyle }
			>
				<h2>Hello world</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
		]);
	},

	save: props => {
		const {
			className,
			attributes: {
				blockBackgroundColor,
				blockTextColor,
			},
		} = props;

		const blockStyle = {
			backgroundColor: blockBackgroundColor ? blockBackgroundColor : undefined,
			color: blockTextColor ? blockTextColor : undefined,
			padding: '20px',
		};

		// Markup: Frontend
		return (
			<div
				className={ ( className ? className : '' ) }
				style={ blockStyle }
			>
				<h2>Hello world</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
		);
	},
} );
