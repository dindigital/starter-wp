<?php

function more_post_ajax()
{
	header('Content-Type: text/html');
	$page = isset($_POST['page']) ? $_POST['page'] : 0;
	$perpage = isset($_POST['perpage']) ? $_POST['perpage'] : 1;

	$args = [
		'post_type' => 'post',
		'post_status' => 'publish',
		'paged' => $page,
		'posts_per_page' => $perpage,
	];

	$loop = new WP_Query($args);
	$out = '';

	if ($loop->have_posts()):
		while ($loop->have_posts()):
			$loop->the_post();
		endwhile;
	endif;

	wp_reset_postdata();
	die($out);
}
add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');

// Newsletter
function post_newsletter()
{
	if (!$_GET['email'] && $_GET['email'] == '') {
		wp_send_json_error(
			[
				'msg' => 'Não foi possível cadastrar seu e-mail.',
			],
			400
		);
	} else {
		$email = sanitize_email($_GET['email']);
	}
	$fields['email'] = $email;
	$fields['name'] = $_GET['name'];
	if (function_exists('alo_em_add_subscriber') && is_email($email)) {
		alo_em_add_subscriber($fields, 1, alo_em_get_language(true));
	}
	wp_send_json_success(
		[
			'msg' => 'E-mail cadastrado com sucesso!',
		],
		200
	);
}
add_action('wp_ajax_nopriv_post_newsletter', 'post_newsletter');
add_action('wp_ajax_post_newsletter', 'post_newsletter');
