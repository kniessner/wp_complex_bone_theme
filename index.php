<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package complex
 */

get_header(); ?>

<main id="main" class="site-main">
          <?php
              $attachments = get_posts( array(
                'post_type' => 'attachment',
                'posts_per_page' => 6,
              ));
               if ( $attachments ) { ?>

                 <section id="photo_grid" class="background_plates">
                     <?php $y = 0;
                         foreach ( $attachments as $attachment ) {
                             $y++; ?>

                                 <div class="plate" data-target="#MainSlider" data-slide-to="<?php echo $y; ?>">
                                   <div class="plate_content" style="background-image:url(<?php echo wp_get_attachment_url( $attachment->ID );?>);">

                                   </div>
                                 </div>
                       <?php } ?>
                 </section>

      <?php   }   ?>
</main>

<div class="style_overlay">
    <div id="particles-js"></div>
    <canvas class="particle_background"></canvas>
    <div id="Orbit"></div>
</div>

<?php get_footer(); ?>
