
import 'bootstrap/scss/bootstrap.scss';
import 'bootstrap';
//require('font-awesome');

/*
//////////////	jQuery - needed to import ?
*/
import $ from 'jquery';

import 'masonry-layout'

// import scrollify from 'scrollify';
// window.onload = function() {
//       $.scrollify({
//         section : ".carousel-item",
//       });
// };


import Jotted from 'jotted';
import 'jotted/jotted.css';

window.onload = function () {

  new Jotted(
    document.querySelector('#editor'), {
      files: [{
        type: 'html',
        url: 'code.html'
      }]
    })
}
/*
//////////////	THREE JS
*/
import Particles from 'particlesjs';
window.onload = function () {
  // Particles.init({
  //   selector: '.particle_background',
  //   maxParticles: 50,
  //   color: '#48F2E3',
  //   connectParticles: true
  // });
};


import 'three';
import * as THREE from 'three';

/*
//////////////		SLICK CAROUSEl
*/
import anime from 'animejs';
import 'slick-carousel';
import 'slick-carousel/slick/slick.scss';
//import "slick-carousel/slick/slick-theme.scss";

import 'script-loader!../node_modules/slick-carousel/slick/slick'


/*
 ************* 	Init own style / #SCSS   *************
 */
import './scss/style.scss'

/*
 *************  Init own actions / #JS  *************
 */

import './js/animations'
import './js/grid'
import './js/slider'
//import "./js/threeStart";
import './js/menu'
import './js/orbit'
//import './js/point_mesh'
//import './js/threeJS/pointCloud'
//import './js/threeJS/particle'