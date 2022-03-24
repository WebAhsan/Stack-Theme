<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stack
 */

?>

<!-- Copyright Section Start -->
<div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-3 col-xs-12">
          <div class="footer-logo">
            <img src="<?php echo get_theme_mod('footer_logo_url'); ?>" alt="">
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-xs-12">
          <div class="social-icon text-center">
          <?php 
            $socials = get_theme_mod('social_repeater');
            foreach($socials as $social){
           ?>
            <a class="facebook" href="<?php echo $social['social_url'];?>"><i class="<?php echo $social['social_icon'];?>"></i></a>
            <?php } ?>
          </div>
        </div>
        <div class="col-lg-4 col-md-5 col-xs-12">
          <p class="float-right"><?php echo get_theme_mod('footer_copyright'); ?></p>
        </div>
      </div>
    </div>
  </div>
  <!-- Copyright Section End -->

  <!-- Go to Top Link -->
  <a href="#" class="back-to-top">
    <i class="lni-arrow-up"></i>
  </a>

  <!-- Preloader -->
  <div id="preloader">
    <div class="loader" id="loader-1"></div>
  </div>
  <!-- End Preloader -->

<?php wp_footer(); ?>

</body>
</html>
