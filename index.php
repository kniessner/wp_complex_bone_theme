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

</div>

 <div class="style_overlay">
    <div id="particles-js"></div>
    <canvas class="particle_background"></canvas>
  	<canvas id="point_mesh"></canvas>
    <div id="Orbit"></div>
  </div>
<?php get_footer(); ?>
