<?php

function custom_js()
{
	global $theme_uri;
	$post_type = get_post_type();
	$json_versions = file_get_contents("{$theme_uri}/assets/assets.json");
	$versions = json_decode($json_versions, true);

	if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
		$mainJS = "{$theme_uri}/assets/js/{$versions['main.js']}";
		wp_register_script('main', $mainJS, [], null);
		wp_enqueue_script('main');

		$vendorJS = "{$theme_uri}/assets/js/{$versions['vendor.js']}";
		wp_register_script('vendor', $vendorJS, [], null);
		wp_enqueue_script('vendor');
	}
}
add_action('wp_footer', 'custom_js');

function custom_css()
{
	global $theme_uri;
	$post_type = get_post_type();
	$json_versions = file_get_contents("{$theme_uri}/assets/assets.json");
	$versions = json_decode($json_versions, true);

	if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
		$mainCSS = "{$theme_uri}/assets/css/{$versions['main.css']}";
		wp_register_style('main-css', $mainCSS, [], null);
		wp_enqueue_style('main-css');
	}
}
add_action('wp_enqueue_scripts', 'custom_css');
