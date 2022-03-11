<?php

function custom_js()
{
	global $theme_uri;
	$post_type = get_post_type();

	if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
		$mainJS = '/assets/js/main.js';
		wp_register_script('main', $theme_uri . $mainJS, []);
		wp_enqueue_script('main');

		$vendorJS = '/assets/js/vendor.js';
		wp_register_script('vendor', $theme_uri . $vendorJS, []);
		wp_enqueue_script('vendor');
	}
}
add_action('wp_footer', 'custom_js');

function custom_css()
{
	global $theme_uri;
	$post_type = get_post_type();

	if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
		$mainCSS = '/assets/css/main.css';
		wp_register_style('main-css', $theme_uri . $mainCSS, []);
		wp_enqueue_style('main-css');
	}
}
add_action('wp_enqueue_scripts', 'custom_css');
