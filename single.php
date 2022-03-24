<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package stack
 */

get_header();
?>
    <!-- Page header Start -->
    <section class="page-header">
      <div class="container">      
        <div class="row justify-content-md-center">
          <div class="col-md-12">
            <div class="breadcrumb-wrapper text-center">
              <h2><?php the_title(); ?></h2>
              <p><a href="<?php echo esc_url('/'); ?>">Home </a>/ <?php the_title(); ?></p>
            </div>
          </div>
        </div> 
      </div> 
    </section>
    <!-- Page header End -->
    
    <!-- Blog Section Start  -->
    <div id="blog-single">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-12 col-xs-12">
            <div class="blog-post">
              <div class="post-thumb">
                <img src="<?php the_post_thumbnail_url();?>" alt="">
              </div>
              <div class="post-content">
                <h3><?php the_title();?></h3>
                <p><?php the_content();?></p>          
              </div>
            </div>
				<?php 
				
				if(comments_open()){
					comments_template();
				 }
				
				
				?>
            </div>
 

		  
          <div class="col-lg-4 col-md-12 col-xs-12">
			<?php get_sidebar(); ?>
          </div>
        </div>
      </div>
    </div>
    <!-- Blog Section End  -->



<?php

get_footer();
