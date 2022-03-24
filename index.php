<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stack
 */

get_header();
?>

      <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12">
              <div class="contents text-center">
                <h2 class="head-title wow fadeInUp"><?php echo get_theme_mod('banner_title'); ?></h2>
                <div class="header-button wow fadeInUp" data-wow-delay="0.3s">
                  <a href="<?php echo get_theme_mod('banner_btn_link'); ?>" class="btn btn-common"><?php echo get_theme_mod('banner_btn_text'); ?></a>
                </div>
              </div>
              <div class="img-thumb text-center wow fadeInUp" data-wow-delay="0.6s">
                <img class="img-fluid" src="<?php echo get_theme_mod('banner_img'); ?>" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Area End -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- Feature Section Start -->
    <?php get_template_part( 'template-parts/section', 'feature' );?>
    <!-- Feature Section End -->

    <!-- Services Section Start -->
    <?php get_template_part( 'template-parts/section', 'services' );?>
    <!-- Services Section End -->

    <!-- Start Video promo Section -->
    <?php get_template_part( 'template-parts/section', 'video' );?>
    <!-- End Video Promo Section -->

    <!-- Team Section Start -->
    <?php get_template_part( 'template-parts/section', 'team' );?>
    <!-- Team Section End -->

    <!-- Counter Section Start -->
    <?php get_template_part( 'template-parts/section', 'counter' );?>
    <!-- Counter Section End -->

    <!-- Pricing section Start --> 
    <?php get_template_part( 'template-parts/section', 'pricing' );?>
    <!-- Pricing Table Section End -->

    <!-- Skill Section Start -->
    <?php get_template_part( 'template-parts/section', 'skill' );?>
    <!-- Skill Section End -->

    <!-- Portfolio Section -->
    <?php get_template_part( 'template-parts/section', 'portfolio' );?>
    <!-- Portfolio Section Ends --> 
  
    <!-- Testimonial Section Start -->
    <?php get_template_part( 'template-parts/section', 'testimonial' );?>
    <!-- Testimonial Section End -->  

    <!-- Blog Section -->
    <?php get_template_part( 'template-parts/section', 'blog' );?>
    <!-- blog Section End -->

    <!-- Clients Section Start -->
    <?php get_template_part( 'template-parts/section', 'brand' );?>
    <!-- Clients Section End -->

    <!-- Contact Section Start -->
    <?php get_template_part( 'template-parts/section', 'contact' );?>
    <!-- Contact Section End -->
    
<?php  get_footer();?>
