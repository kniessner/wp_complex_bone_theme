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

<div id="content_wrap">
	<!-- particles.js container -->
  <section class="content_header container">
    <?php
    //the_title( '<h4>', '</h4>' );
      if ( is_front_page() ) {

          if (have_posts()) : while (have_posts()) : the_post(); ?>

          <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <?php the_content(); ?>
          </div>

          <?php endwhile; ?>
          <?php else : ?>

          	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
          		<h1>Not Found</h1>
          	</div>

          <?php endif; ?>
        <?php }
       ?>
    </section>


    <main id="main" class="site-main">

          <?php
              $attachments = get_posts( array(
                'post_type' => 'attachment',
                'posts_per_page' => 30,
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


<section id="MainSlider" class="carousel slide hidden" >

          <div class="carousel-inner" role="listbox">
            <?php
            $y = 0;
            foreach ( $attachments as $attachment ) {
                   $y++;
                   if ($y === 1) { ?>
                     <div class="carousel-item active">
                       <?php
                       echo wp_get_attachment_image( $attachment->ID, 'large', "", array( "class" => "img-fluid screen_fit" ) );
                       ?>
                     </div>
                   <?php } else {  ?>
                     <div class="carousel-item" >
                       <?php
                       echo wp_get_attachment_image( $attachment->ID, 'large', "", array( "class" => "img-fluid screen_fit" ) );
                       ?>
                     </div>
                   <?php }
                }
               ?>
            </div>


            <div class="carousel-background">
              <?php
              $y = 0;
              foreach ( $attachments as $attachment ) {
                $y++;
                if ($y === 1) { ?>
                  <div class="bg-item active"  style="background-image:url(<?php echo wp_get_attachment_url( $attachment->ID );?>);">
                  </div>
                <?php } else {  ?>
                  <div class="bg-item" style="background-image:url(<?php echo wp_get_attachment_url( $attachment->ID );?>);">
                  </div>
                  <?php
                }
              }
              ?>
            </div>



        <div class="carousel_controller">
            <a class="carousel-control carousel-control-prev" href="#MainSlider" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control carousel-control-next" href="#MainSlider" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>





    </section>

      <?php   }   ?>
        	<div class="container">
        			 <div class="" id="content_sneakpeak">
        					<?php $query = array(
        							'post_type' => array('projects','posts'),
        						  'post_status' => array('publish', 'pending', 'draft', 'auto-draft', 'future', 'private', 'inherit', 'trash')
        						);
        						$loop = new WP_Query($query);
        					?>
        						<div class="show_board">
        							<?php
        								while ( $loop->have_posts() ) : $loop->the_post();
        							?>
        							<div class="pres_panel">
        									<?php
        										the_title( '<h4>', '</h4>' );
        									?>
        							</div>
        							<?php endwhile; ?>
        						</div>
        				</div>
        	   </div>

    </main>
  <div id="app"></div>

</div>

  <div class="style_overlay">
    <div id="particles-js"></div>
    <canvas class="particle_background"></canvas>
  	<canvas id="point_mesh"></canvas>
    <div id="Orbit"></div>
  </div>

  <?php
    // if ( $attachments ) {
    //   $random_attachments = array_rand( $attachments, sizeof($attachments) );
    //   echo wp_get_attachment_image( $random_attachments[1]->ID, 'large', "", array( "class" => "background_image screen_fit" ) );
    // }
   ?>

<?php get_footer(); ?>
