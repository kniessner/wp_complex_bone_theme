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

<div id="particles-js"></div>

<div id="app"></div>

		<main id="main" class="site-main ">
		<!--<div class="start_image" ><img class="screen_fit" src="<?php bloginfo('template_url');?>/src/img/logo_form.png" /> </div>-->
		<div class="content_header container">
						<h2 style="padding-bottom: 10px;color: tomato;text-transform: uppercase;padding: 20px 0;">This Website will be never done!</h2>
						<h4  style="color: #887F00;font-weight: 100;">following the prinziples of chaos -  the only habit is to steady move ahead  </b></h4>

				</div>

				<div class="container">
			<?php
					if ( is_front_page() ) {
								echo'';
			?>

							<div class=" hidden" id="content_sneakpeak">
									<?php $query = array(
											//'post_type' => array('projects','posts'),
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
																		 //	the_title( '<h4>', '</h4>' );
																		?>
														</div>
										<?php endwhile; ?>
									</div>
							</div>
						</div>
<?php
/*
?>
<div class="container">
		<div class="slider prev_slider">
				<?php
				while ( $loop->have_posts() ) : $loop->the_post();
							?>
							<div class="slide">
											<?php
											 	the_title( '<h3>', '</h3>' );
											?>
							</div>
							<?php
				endwhile;
				?>
				</div>
</div>
<?php
*/
?>

			<div id="static_content" class="hidden">
					<?php	if ( have_posts() ) : ?>
			             <?php while ( have_posts() ) : the_post(); ?>
								<div class="container">
									<?php the_content(); ?>
								</div>
					    <?php endwhile; ?>

			        <?php else : ?>
					<?php //get_template_part( 'loop/loop-error' ); ?>
					<?php endif; ?>
			</div>
			<div class="background_plates">
				<?php
				for ($i = 1; $i <= 20; $i++) {
						?>
						<div class="box">

						</div>
						<?php
					}
				 ?>
			</div>
		</main><!-- #main -->
	<?php
	}
?>
		</div>



  <canvas class="particle_background"></canvas>
	<canvas id="point_mesh"></canvas>
<div id="Orbit"><div class="overlay"></div></div>

<?php
get_footer();
