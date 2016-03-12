<?php get_header();  ?>

<div class="main">
 
    <section class="about-container">

    <div class="about-bg" data-stellar-background-ratio="0.5" style="background-image:  linear-gradient(rgba(31, 31, 32, 0.97), rgba(35, 38, 40, 0.94)), url('<?php the_field('about_bg'); ?>'); ">
      
    </div>

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <div class="about-content">
        
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

    <section class="skill-container">
      
     <div class="skill-content">
        <h2><?php the_field('skill_title'); ?></h2>
        <ul>
          <?php while(has_sub_field('skills_icons')): ?>
           <li><?php the_sub_field('skill_icon'); ?></li>
          <?php endwhile;?>
          
        </ul>
       
     </div>

    </section>
    <section class="portfolio-container">

    <div class="portfolio-bg" data-stellar-background-ratio="0.5" style="background-image: linear-gradient(rgba(31, 31, 32, 0.73), rgba(35, 38, 40, 0.82)), url('<?php the_field('portfolio_bg'); ?>'); "></div>

      <div class="portfolio-content">
        <h2><?php the_field('portfolio_title') ?></h2>
      </div>

    </section>

    <section class="contact-container">

      <div class="contact-content">
        <?php echo do_shortcode('[contact-form-7 id="53" title="Contact form 1"]') ?>
      </div>
    </section>



    

 
</div> <!-- /.main -->

<?php get_footer(); ?>