<?php
/**
 * Theme Support
 * https://wordpress.org/gutenberg/handbook/extensibility/theme-support
 */

function wordpress_blocks_starter_setup_theme_supported_features() {
	/*
	// Add a custom Editor color palette (optional!)
	add_theme_support( 'editor-color-palette',
		array(
			array(
				'name'  => __( 'Red', 'wordpress-blocks-starter' ),
				'slug' => 'red',
				'color' => '#DC3545',
			),
			array(
				'name'  => __( 'Green', 'wordpress-blocks-starter' ),
				'slug' => 'green',
				'color' => '#28A745',
			),
			array(
				'name'  => __( 'Yellow', 'wordpress-blocks-starter' ),
				'slug' => 'yellow',
				'color' => '#FFC107',
			),
			array(
				'name'  => __( 'Blue', 'wordpress-blocks-starter' ),
				'slug' => 'blue',
				'color' => '#007BFF',
			),
			array(
				'name'  => __( 'Black', 'wordpress-blocks-starter' ),
				'slug' => 'black',
				'color' => '#151515',
			),
			array(
				'name'  => __( 'White', 'wordpress-blocks-starter' ),
				'slug' => 'white',
				'color' => '#FFFFFF',
			),
		)
	);
	*/
	
	add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'wordpress_blocks_starter_setup_theme_supported_features' );


/**
 * Add custom block category to default categories
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
				'slug' => 'theme-blocks',
				'title' => __( 'Theme Blocks', 'my-theme' ),
			),
		)
	);
}
add_filter( 'block_categories', 'wordpress_blocks_starter_block_categories', 10, 2 );


/**
 * Enqueue block assets: Backend
 */

function wordpress_blocks_starter_enqueue_block_editor_assets() {
	$block_file = 'blocks/build/index.js';

	wp_enqueue_script(
		'wordpress-blocks-starter-blocks',
		get_theme_file_uri( $block_file, __FILE__ ),
		array( 'wp-blocks', 'wp-components', 'wp-editor', 'wp-i18n' ),
		filemtime( get_theme_file_path( $block_file ) )
	);
}
add_action( 'enqueue_block_editor_assets', 'wordpress_blocks_starter_enqueue_block_editor_assets' );


/**
 * Enqueue block assets: Frontend
 */

/*
function wordpress_blocks_starter_enqueue_block_assets() {
	
}
add_action( 'enqueue_block_assets', 'wordpress_blocks_starter_enqueue_block_assets' );
*/
