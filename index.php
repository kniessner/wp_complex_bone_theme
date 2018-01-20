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

<div id="content_wrap" class="">
	<!-- particles.js container -->
  <div class="content_header container">
    <?php if ( is_front_page() ) { ?>
          <h2 style="padding-bottom: 10px;color: tomato;text-transform: uppercase;padding: 20px 0;">This Website will be never done!</h2>
          <h4  style="color: #fff;font-weight: 100;">following the prinziples of chaos -  the only habit is to steady move ahead  </b></h4>
    <?php } ?>
  </div>

      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <?php
                    $attachments = get_posts( array(
                        'post_type' => 'attachment',
                        'posts_per_page' => 30,
                       //  'post_parent' => $post->ID,
                        //'exclude'     => get_post_thumbnail_id()
                    ) );

                    if ( $attachments ) {
                        foreach ( $attachments as $attachment ) {

                            $class = "post-attachment mime-" . sanitize_title( $attachment->post_mime_type );
                            $thumbimg = wp_get_attachment_link( $attachment->ID, 'thumbnail-size', true );
                            $largeimg = wp_get_attachment_link( $attachment->ID, 'large', true );
                            echo $largeimg;

                            if ($y === 1) { ?>
                              <div class="item active">
                                  <img class="d-block img-fluid" src="<?php echo $thumbimg; ?>" alt="First slide">
                              </div>
                              <?php }else{  ?>
                              <div class="item">
                                  <img class="d-block img-fluid" src="<?php echo $thumbimg; ?>" alt="First slide">
                              </div>
                            <?php }

                        }
                    }
            ?>
        </div>
      </div>


    <main id="main" class="site-main">
    		<!--<div class="start_image" ><img class="screen_fit" src="<?php bloginfo('template_url');?>/src/img/logo_form.png" /> </div>-->

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

    </main><!-- #main -->
  <div id="app"></div>

</div>

  <div class="background_plates">
    <?php for ($i = 1; $i <= 20; $i++) { ?>
        <div class="plate">
              <div class="plate_content"></div>
        </div>
    <?php }  ?>
  </div>
  <div id="particles-js"></div>
  <canvas class="particle_background"></canvas>
	<canvas id="point_mesh"></canvas>
  <div id="Orbit"><div class="overlay"></div></div>

<?php
get_footer();
