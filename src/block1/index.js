/**
 * Block 1.
 *
 * @see https://developer.wordpress.org/block-editor/how-to-guides/block-tutorial/writing-your-first-block-type/
 */

import { __ } from "@wordpress/i18n";
import { registerBlockType } from "@wordpress/blocks";

/**
 * Internal dependencies
 */
import edit from "./edit";
import save from "./save";
//import deprecated from './deprecated';

import "./style.css";
import metadata from "./block.json";

const { name } = metadata;

/**
 * Every block starts by registering a new block type definition.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-registration/
 */
registerBlockType(
	{ name, ...metadata },
	{
		/**
		 * @see ./edit.js
		 */
		edit,

		/**
		 * @see ./save.js
		 */
		save,

		/**
		 * @see ./deprecated.js
		 */
		//deprecated: deprecated,
	}
);
