<?php

// Register Menus
function register_menu()
{
	register_nav_menus([
		// Using array to specify more menus if needed
		'header-menu' => 'Header Menu', // Main Navigation
		'footer-menu' => 'Footer Menu', // Sidebar Navigation
		'extra-menu' => 'Extra Menu', // Extra Navigation if needed (duplicate as many as you need!)
	]);
}
add_action('init', 'register_menu');
