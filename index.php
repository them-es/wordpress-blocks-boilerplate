<?php
/**
 * Add custom block category to default categories.
 *
 * @param array[]                 $block_categories     Block categories.
 * @param WP_Block_Editor_Context $block_editor_context Block Editor context.
 *
 * @return array
 */
function wordpress_blocks_starter_block_categories( $block_categories, $block_editor_context ) {
	/*
	if ( 'post' !== $block_editor_context->post->post_type ) {
		return $block_categories;
	}
	*/

	return array_merge(
		$block_categories,
		array(
			array(
				'slug'  => 'theme-blocks',
				'title' => esc_html__( 'Theme Blocks', 'my-theme' ),
			),
		)
	);
}
add_filter( 'block_categories_all', 'wordpress_blocks_starter_block_categories', 10, 2 );

/**
 * Enqueue Theme-Blocks: Backend.
 *
 * @return void
 */
function wordpress_blocks_starter_auto_register_block_types() {
	if ( file_exists( __DIR__ . '/build/' ) ) {
		$block_json_files = glob( __DIR__ . '/build/*/block.json' );

		// Autoregister all blocks found in the `build/blocks` folder.
		foreach ( $block_json_files as $filename ) {
			$block_folder = dirname( $filename );

			// https://developer.wordpress.org/reference/functions/register_block_type/
			register_block_type( $block_folder );
		}
	}
}
add_action( 'init', 'wordpress_blocks_starter_auto_register_block_types' );
