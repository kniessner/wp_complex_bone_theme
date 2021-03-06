import React, {Component} from 'react';
import {render} from 'react-dom';

import Image_Gallery from './components/image_gallery.jsx';

export const app_loader = (data)=>{

class App extends React.Component {
  render () {
   console.log('images',data);
  	var images = data;
    return (

    	<div id="react_port">
	    	{ images ? <Image_Gallery images={images} /> : ' ' }
    	</div>

    	);
  }
}


render(<App/>, document.getElementById('app'));
}
