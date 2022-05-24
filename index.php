<?php
/**
 * Add custom block category to default categories.
 *
 * https://wordpress.org/gutenberg/handbook/designers-developers/developers/filters/block-filters/#managing-block-categories
 */
function wordpress_blocks_starter_block_categories( $categories, $post ) {
	/*
	if ( $post->post_type !== 'post' ) {
		return $categories;
	}
	*/
	return array_merge(
		$categories,
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
 *
 * https://github.com/WordPress/gutenberg/blob/master/docs/designers-developers/developers/tutorials/javascript/js-build-setup.md#dependency-management
 */
function wordpress_blocks_starter_enqueue_block_editor_assets() {
	$blocks_dir = basename( __DIR__ ) . '/build/';

	$blocks_asset_file = include get_theme_file_path( $blocks_dir . 'index.asset.php' ); // Plugin path: plugin_dir_path( dirname( __FILE__ ) ) . $blocks_dir . '/index.asset.php';

	wp_enqueue_script(
		'wordpress-blocks-starter-blocks',
		get_theme_file_uri( $blocks_dir . 'index.js' ), // Plugin path: plugin_dir_url( dirname( __FILE__ ) ) . $blocks_dir . '/index.js',
		$blocks_asset_file['dependencies'],
		$blocks_asset_file['version']
	);
}
add_action( 'enqueue_block_editor_assets', 'wordpress_blocks_starter_enqueue_block_editor_assets' );
