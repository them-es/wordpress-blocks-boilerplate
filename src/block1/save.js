import { __ } from '@wordpress/i18n';
import {
	useBlockProps,
	RichText,
} from '@wordpress/block-editor';

/**
 * Save function.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#save
 *
 * @return {WPElement} Element to render.
 */
export default function save( {
	attributes,
	className,
} ) {
	const {
		title,
		content,
		backgroundcolor,
		textcolor,
	} = attributes;

	const blockStyle = {
		backgroundColor: backgroundcolor ? backgroundcolor : undefined,
		color: textcolor ? textcolor : undefined,
		padding: '20px',
	};

	const blockProps = useBlockProps.save( {
		className: ( className ? className : '' ),
		style: blockStyle,
	} );

	return (
		<div { ...blockProps }>
			<h2>{ title }</h2>
			{
				content && (
					<RichText.Content tagName="div" className="content" value={ content } />
				)
			}
		</div>
	);
}
