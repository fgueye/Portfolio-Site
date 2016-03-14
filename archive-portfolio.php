<?php

/*
  Template Name: Portfolio Page
*/

  ?>



  <div class="container">
        <div class="container wrapper">
          <?php $portfolioQuery = new WP_Query (array(
           'posts_per_page' => 3, 
           'post_type' => 'portfolio'
         )); ?>
         <?php if($portfolioQuery-> have_posts()):  ?>
           <?php while($portfolioQuery-> have_posts()): ?>
           <?php $portfolioQuery->the_post(); ?>
         
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
                   <div class="portfolioImageContainer" style="background-image: url(<?php echo portfolioPress_get_thumbnail_url($post); ?>)"> 
                   </div>
                 </div>
             <?php endwhile; ?>
           <?php wp_reset_postdata(); ?>
         <?php endif; ?>
       </div>
