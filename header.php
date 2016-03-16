<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <!-- stylesheets should be enqueued in functions.php -->
  <?php wp_head(); ?>

</head>


<body  style="background: url('<?php the_post_thumbnail_url('full'); ?>') no-repeat,linear-gradient(to left, rgb(17, 16, 21), rgb(40, 40, 40)); background-size: auto; background-attachment: fixed; background-position: top; min-width: 100%;
  min-height: 100%; " <?php body_class(); ?>>
 <?php wp_nav_menu( array(
    'container' => 'ul',
    'theme_location' => 'primary'
  )); ?>



