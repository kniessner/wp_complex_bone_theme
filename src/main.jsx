


//



// *************************************************************
// 																	// WP API
// ***************************************************************
import {app_loader} from './App.jsx';

var WPAPI = require( 'wpapi' );
var wp = new WPAPI({
  endpoint: 'https://kniessner.com/complex/wp-json'
});

wp.webStorage = wp.registerRoute( 'wp/v2', '/web_storage/(?P<id>[\\d]+)' );

//wp.wmedia = wp.registerRoute( 'wp/v2', '/media/(?P<id>[\\d]+)' );

wp.media().get(function( err, data ) {
     if ( err ) {
         console.log('api error',err);
     }
     console.log('media', data)
 });
$(document).ready(function(){


   var current_page =  $('#page_meta').data("id");
       if(current_page){

          wp.pages().get(function( err, data ) {
               if ( err ) {
                   console.log('api error',err);
               }
               app_loader(data);
           });

           wp.webStorage().get(function( err, data ) {
               if ( err ) {
                   console.log('api error',err);
               }
               console.log(data);
               //app_loader(data);
           });
      }
});


// // Callbacks
// wp.posts().get(function( err, data ) {
//     if ( err ) {
//         // handle err
//     }
//    	console.log(data);
//     // do something with the returned posts
// });

// // Promises
// wp.posts().then(function( data ) {
//     // do something with the returned posts
// }).catch(function( err ) {
//     // handle error
// });


import './resource_loader.jsx';
