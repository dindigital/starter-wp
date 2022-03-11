<?php
/**
 * @name simple_query
 * @description Mostra todos os posts de um determinado post type
 * @param $posttype => Nome do post type
 * @param $ppp => Post por página
 */
function simple_query($posttype, $ppp)
{
	$args_post = [
		'post_type' => $posttype,
		'posts_per_page' => $ppp,
		'post_status' => 'publish',
	];

	$query_posts = new WP_Query($args_post);

	return $query_posts;
}
