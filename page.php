<?php get_header();  ?>
<header  id='top'>

  <div class="header-container parallax">
  <img src="<?php the_field('logo', 'option'); ?>" alt="">
  <div class="parallax__layer parallax__layer--deep">
    <img src="//fgueye.com/wp-content/themes/theme-hackeryou/images/specklelightgrey.png" alt="">
  </div>

   <div class="parallax__layer parallax__layer--back">
    <img src="//fgueye.com/wp-content/themes/theme-hackeryou/images/specklesYellow.png" alt="">
  </div>

  <div class="parallax__layer parallax__layer--front">
    <img src="//fgueye.com/wp-content/themes/theme-hackeryou/images/speckles-blur.png" alt="">
  </div>

    

   
  </div> <!-- /.container -->
</header><!--/.header-->
<div class="main">
 
    <section id='about' class="about-container">

    <div class="about-bg" data-stellar-background-ratio="0.5" style="background-image:  linear-gradient(rgba(31, 31, 32, 0.97), rgba(35, 38, 40, 0.94)), url('<?php the_field('about_bg'); ?>'); ">
      
    </div>

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div id="about" class="about-content">
        
              <div class="portrait-container"> <img src="<?php the_field('portrait'); ?>" alt="">
              </div>
                 <h1><?php the_field('full_name') ?></h1>
                 <h2><?php the_title(); ?></h2>
              
              <div class="about-text">
                 <?php the_content(); ?>
                  
                </div>
      </div>

      <?php endwhile; // end the loop?>
    </section> <!-- /.about-content -->

    <section id='skills' class="skill-container">
      
     <div class="skill-content">
        <h2><?php the_field('skill_title'); ?></h2>
        <ul>
          <?php while(has_sub_field('skills_icons')): ?>
           <li><?php the_sub_field('skill_icon'); ?></li>
          <?php endwhile;?>
          
        </ul>
       
     </div>

    </section>
    <section id='portfolio' class="portfolio-container">

    <div class="portfolio-bg" data-stellar-background-ratio="0.5" style="background-image: linear-gradient(rgba(31, 31, 32, 0.73), rgba(35, 38, 40, 0.82)), url('<?php the_field('portfolio_bg'); ?>'); "></div>

      <div class="portfolio-content">
        <h2><?php the_field('portfolio_title'); ?></h2>
        <a href="<?php the_field('view_portfolio'); ?>">View portfolio items</a>
      </div>

    </section>

    <section id='contact' class="contact-container">
    <div class="email">
      <h2>Contact me</h2>
      <p>info@fgueye.com</p>
    </div>

      <div class="form-content">

        <?php echo do_shortcode('[contact-form-7 id="53" title="Contact form 1"]') ?>
      </div>
      <div class="social-media">
        <h2>Follow me</h2>
        <ul>
          <?php while(has_sub_field('social_media_icons')): ?>
           <li><?php the_sub_field('social_media_icon'); ?></li>
          <?php endwhile;?>
          
        </ul>
      </div>
    </section>



    

 
</div> <!-- /.main -->

<?php get_footer(); ?>