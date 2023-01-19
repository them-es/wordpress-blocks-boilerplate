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
 * Enqueue block assets: Backend.
 * https://github.com/WordPress/gutenberg/blob/master/docs/designers-developers/developers/tutorials/javascript/js-build-setup.md#dependency-management
 *
 * @return void
 */
function wordpress_blocks_starter_enqueue_block_editor_assets() {
	$blocks_dir = basename( __DIR__ ) . '/build/';

	$blocks_asset_file = include get_theme_file_path( $blocks_dir . 'index.asset.php' ); // Plugin path: plugin_dir_path( dirname( __FILE__ ) ) . $blocks_dir . '/index.asset.php';

	wp_enqueue_script(
		'wordpress-blocks-starter-blocks',
		get_theme_file_uri( $blocks_dir . 'index.js' ), // Plugin path: plugin_dir_url( dirname( __FILE__ ) ) . $blocks_dir . '/index.js',
		$blocks_asset_file['dependencies'],
		$blocks_asset_file['version'],
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'wordpress_blocks_starter_enqueue_block_editor_assets' );
