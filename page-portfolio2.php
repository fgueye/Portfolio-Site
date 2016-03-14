<?php
get_header()
/*
  Template Name: Portfolio Page
*/

  ?>
<section class="header-portfolio" style="background-image: url('<?php the_field('header_bg'); ?>');">

  <h2><?php the_field('my_work'); ?></h2>

</section>
<div class="pieces-content">
<?php $webpiecesQuery = new WP_Query(array(
        'posts_per_page' => 4,
        'post_type' => 'web'
        // 'portfolio' is the slug that we created in CPT UI on the dashboard
        // the loop with stay under this scoop of paramaters
  )); ?>
  <!-- the parameters are set by wordPess and it find -->
  <!-- the wp-query is set a condition for the loop to follow -->
  
  <?php if($webpiecesQuery -> have_posts() ): ?>
      <?php while($webpiecesQuery -> have_posts() ): ?>
        <?php $webpiecesQuery -> the_post(); ?>
        <!-- what we want to show goes here! -->
       
      
        <?php echo the_field('web_icon'); ?>
       <div class="web-container">
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
              <a href="<?php the_field('live_view_link'); ?> ">Click for Live view</a>
             </div> 
        </div>
  
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  <?php endif; ?>

  </div>
<div class="design-pieces-content">

  <?php $designpiecesQuery = new WP_Query(array(
          'posts_per_page' => 4,
          'post_type' => 'design'
          // 'portfolio' is the slug that we created in CPT UI on the dashboard
          // the loop with stay under this scoop of paramaters
    )); ?>
    <!-- the parameters are set by wordPess and it find -->
    <!-- the wp-query is set a condition for the loop to follow -->
    
    <?php if($designpiecesQuery -> have_posts() ): ?>
        <?php while($designpiecesQuery -> have_posts() ): ?>
          <?php $designpiecesQuery -> the_post(); ?>
          <!-- what we want to show goes here! -->
       
        <?php echo the_field('design_icon'); ?>
       <div class="design-container">
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
              
             </div> 
               
  
  </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  <?php endif; ?>
</div>
