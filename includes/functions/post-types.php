<?php

function register_cpt()
{
	// Banner
	// register_post_type('banner', [
	//   'labels' => [
	//     'name' => 'Banners',
	//     'singular_name' => 'Banner',
	//     'add_new' => 'Adicionar novo banner',
	//     'add_new_item' => 'Adicionar novo banner',
	//     'edit' => 'Editar',
	//     'edit_item' => 'Editar banner',
	//     'new_item' => 'Novo banner',
	//     'view' => 'Ver',
	//     'view_item' => 'Ver banner',
	//     'search_items' => 'Buscar banner',
	//     'not_found' => 'Nenhum banner encontrado',
	//     'not_found_in_trash' => 'Nenhum banner encontrado'
	//   ],
	//   'public' => true,
	//   'hierarchical' => false,
	//   'has_archive' => false,
	//   'menu_icon' => 'dashicons-format-gallery',
	//   'supports' => [
	//     'title'
	//   ],
	//   'can_export' => false
	// ]);
}
add_action('init', 'register_cpt');
