<?php

function my_acf_init()
{
	// check function exists
	if (function_exists('acf_register_block')) {
		// acf_register_block([
		//   'name'            => 'banner-top-infos',
		//   'title'           => 'bannerTopInfos',
		//   'description'     => 'Módulo de banner de topo para informações',
		//   'render_callback' => 'acf_block_callback',
		//   'category'        => 'widgets',
		//   'icon'            => 'format-gallery',
		//   'keywords'        => [ 'post', 'acf', 'banner', 'top', 'infos'],
		// ]);
	}
}
add_action('acf/init', 'my_acf_init');

/**
 * Render Callback for the block. This is what is output in the Theme AND
 * in the preview within Gutenberg
 *
 * @param $block
 */
function acf_block_callback($block)
{
	$slug = str_replace('acf/', '', $block['name']);
	if (file_exists(get_theme_file_path("/includes/blocks/content-{$slug}.php"))) {
		include get_theme_file_path("/includes/blocks/content-{$slug}.php");
	}
}
