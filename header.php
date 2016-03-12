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

<header  id='#about'>

  <div class="header-container parallax">
  <img src="<?php the_field('logo', 'option'); ?>" alt="">
  <div class="parallax__layer parallax__layer--deep">
    <img src="//localhost:3000/portfoliosite/wp-content/themes/theme-hackeryou/images/speckle1.png" alt="">
  </div>

   <div class="parallax__layer parallax__layer--back">
    <img src="//localhost:3000/portfoliosite/wp-content/themes/theme-hackeryou/images/speckles3.png" alt="">
  </div>

  <div class="parallax__layer parallax__layer--front">
    <img src="//localhost:3000/portfoliosite/wp-content/themes/theme-hackeryou/images/specklesYellow.png" alt="">
  </div>

    

    <?php wp_nav_menu( array(
      'container' => 'ul',
      'theme_location' => 'primary'
    )); ?>
  </div> <!-- /.container -->
</header><!--/.header-->

