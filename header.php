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

   <?php wp_nav_menu( array(
      'container' => 'ul',
      'theme_location' => 'primary'
    )); ?>
</head>


<body  style="background-image: url('<?php the_post_thumbnail_url('full'); ?>') ;"<?php body_class(); ?>>



