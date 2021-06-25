import { __ } from '@wordpress/i18n';
import {
	useBlockProps,
	PlainText,
	RichText,
	InspectorControls,
	PanelColorSettings,
} from '@wordpress/block-editor';

/**
 * Editor styles.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
//import './editor.scss';

/**
 * Edit function.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#edit
 *
 * @return {WPElement} Element to render.
 */
export default function edit( {
	className,
	attributes,
	setAttributes,
} ) {
	const {
		title,
		content,
		backgroundcolor,
		textcolor,
	} = attributes;

	const onChangeTitle = ( val ) => {
		//console.log( val );
		setAttributes( {
			title: val,
		} )
	};
	const onChangeContent = ( val ) => {
		//console.log( val );
		setAttributes( {
			content: val,
		} )
	};
	const onChangeBackgroundColor = ( val ) => {
		//console.log( val );
		setAttributes( {
			backgroundcolor: val,
		} )
	};
	const onChangeTextColor = ( val ) => {
		//console.log( val );
		setAttributes( {
			textcolor: val,
		} )
	};

	const blockStyle = {
		backgroundColor: backgroundcolor ? backgroundcolor : undefined,
		color: textcolor ? textcolor : undefined,
		padding: '20px',
	};

	const blockProps = useBlockProps( {
		className: ( className ? className : '' ),
		style: blockStyle,
	} );

	return ( [
		<InspectorControls>
			<div>
				<PanelColorSettings
					initialOpen={ false }
					title={ __( 'Custom Color Settings' ) }
					colorSettings={ [
						{
							value: backgroundcolor,
							onChange: onChangeBackgroundColor,
							label: __( 'Background Color' ),
						},
						{
							value: textcolor,
							onChange: onChangeTextColor,
							label: __( 'Text Color' ),
						},
					] }
				/>
			</div>
		</InspectorControls>,

		<div { ...blockProps } >
			<PlainText
				className="h2"
				placeholder={ __( 'Title…' ) }
				value={ title }
				onChange={ onChangeTitle }
			/>
			<RichText
				multiline="p"
				placeholder={ __( 'Content…' ) }
				value={ content }
				onChange={ onChangeContent }
			/>
		</div>
	] );
}
