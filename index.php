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
    <?php
    the_title( '<h4>', '</h4>' );
    if ( is_front_page() ) {
    ?>
          <h2 style="padding-bottom: 10px;color: tomato;text-transform: uppercase;padding: 20px 0;"> A NEVER FINAL WEBSITE!</h2>
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
                    $y = 0;
                    if ( $attachments ) {
                        foreach ( $attachments as $attachment ) {
$y++;
                            $class = "post-attachment mime-" . sanitize_title( $attachment->post_mime_type );
                            $thumbimg = wp_get_attachment_link( $attachment->ID, 'thumbnail-size', false );
                            $largeimg = wp_get_attachment_link( $attachment->ID, 'large', false );
                      //      echo $largeimg;

                            if ($y === 1) { ?>
                              <div class="carousel-item active"  style="background-image:url(<?php echo wp_get_attachment_url( $attachment->ID );?>);">

                              <?php
                                echo wp_get_attachment_image( $attachment->ID, 'large', "", array( "class" => "img-fluid screen_fit" ) );
                              ?>
                              </div>
                              <?php } else {  ?>
                              <div class="carousel-item">
                                <?php
                                  echo wp_get_attachment_image( $attachment->ID, 'large', "", array( "class" => "img-fluid screen_fit" ) );
                                ?>
                              </div>
                            <?php }

                        }
                      ?>
                      <div class="background_plates">
                      <?php
                          foreach ( $attachments as $attachment ) {

                                ?>
                                <div class="plate">
                                      <div class="plate_content" style="background-image:url(<?php echo wp_get_attachment_url( $attachment->ID );?>);"></div>
                                </div>
                                <?php
                          }
                      ?>
                      </div>
                      <?php
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

  <div class="style_overlay">
    <div id="particles-js"></div>
    <canvas class="particle_background"></canvas>
  	<canvas id="point_mesh"></canvas>
    <div id="Orbit"></div>
  </div>

  <?php
    if ( $attachments ) {
      $random_attachments = array_rand( $attachments, sizeof($attachments) );
      echo wp_get_attachment_image( $random_attachments[1]->ID, 'large', "", array( "class" => "background_image screen_fit" ) );
    }
   ?>
<?php
get_footer();
