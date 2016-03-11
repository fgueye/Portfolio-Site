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


<body  style="background-image: url('<?php the_post_thumbnail_url('full'); ?>') ;"<?php body_class(); ?>>

<header>

  <div class="container">
  <img src="<?php the_field('logo', 'option'); ?>" alt="">
  <div><img src="//localhost:3000/portfoliosite/wp-content/themes/theme-hackeryou/images/speckle1.png" alt=""></div>

    

    <?php wp_nav_menu( array(
      'container' => false,
      'theme_location' => 'primary'
    )); ?>
  </div> <!-- /.container -->
</header><!--/.header-->

