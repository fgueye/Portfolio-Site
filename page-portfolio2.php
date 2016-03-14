<?php
get_header()
/*
  Template Name: Portfolio Page
*/

  ?>
<section class="header-portfolio" style="background-image: url('<?php the_field('header_bg'); ?>');">

  <h2><?php the_field('my_work'); ?></h2>
</section>
<div class="portfolio-content">
<?php $porfoliopageQuery = new WP_Query(array(
        'posts_per_page' => 3,
        'post_type' => 'portfolio'
        // 'portfolio' is the slug that we created in CPT UI on the dashboard
        // the loop with stay under this scoop of paramaters
  )); ?>
  <!-- the parameters are set by wordPess and it find -->
  <!-- the wp-query is set a condition for the loop to follow -->
  
  <?php if($porfoliopageQuery -> have_posts() ): ?>
      <?php while($porfoliopageQuery -> have_posts() ): ?>
        <?php $porfoliopageQuery -> the_post(); ?>
        <!-- what we want to show goes here! -->
       <div class="project-container">
         <div class="image-container">
           <img src="<?php the_field('project_image'); ?> " alt="">
         </div>
           <div class="projectTextContainer">
           <h3><?php the_field('project_title'); ?></h3>
             <p><?php the_field('project_description'); ?></p>
             <ul class="tagsContainer">
               <?php while(has_sub_field('tags')): ?>
                 <li><?php the_sub_field('tag'); ?></li>
                <?php endwhile; ?> 
             </ul>
             <a href="<?php the_field('live_view_link'); ?> "></a>
           </div> 
      
  
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  <?php endif; ?>

  </div>