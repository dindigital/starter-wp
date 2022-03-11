<?php
global $theme_uri;
$theme_uri = get_template_directory_uri();
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php wp_title(''); ?></title>

  <!-- Preload -->
  <!-- <link rel="preload" href="<?php echo "{$theme_uri}/assets/fonts/Roboto-Regular.woff2"; ?>" as="font" crossorigin="anonymous" /> -->

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $theme_uri; ?>/assets/img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $theme_uri; ?>/assets/img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $theme_uri; ?>/assets/img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $theme_uri; ?>/assets/img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $theme_uri; ?>/assets/img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $theme_uri; ?>/assets/img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $theme_uri; ?>/assets/img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $theme_uri; ?>/assets/img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $theme_uri; ?>/assets/img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $theme_uri; ?>/assets/img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $theme_uri; ?>/assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $theme_uri; ?>/assets/img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $theme_uri; ?>/assets/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo $theme_uri; ?>/assets/img/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#323451">
  <meta name="msapplication-TileImage" content="<?php echo $theme_uri; ?>/assets/img/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#323451">
  <link rel="mask-icon" href="<?php echo $theme_uri; ?>/assets/img/favicon/safari-pinned-tab.svg" color="#323451">

  <?php if (is_page_template('template-homepage.php')) {
  	echo '<style>';
  	get_template_part('/assets/css/csscritical', 'critical-css');
  	echo '</style>';
  } ?>

  <?php wp_head(); ?>
</head>
<body>
