console.log('script win.js loaded');

function setHeights() {
	winHeight = $(window).height();
	documentHeight = $(document).height();
	console.log('window Height',winHeight);
	console.log('document Height',documentHeight);
}



jQuery(document).ready(function($) {
	setHeights();
	$(window).on('resize',setHeights);


	var toggleAffix = function(affixElement, wrapper, scrollElement) {

     var height = affixElement.outerHeight(),
         top = wrapper.offset().top;

     if (scrollElement.scrollTop() >= top){
         wrapper.height(height);
         affixElement.addClass("affix");
     }
     else {
         affixElement.removeClass("affix");
         wrapper.height('auto');
     }

   };


   $('[data-toggle="affix"]').each(function() {
    var ele = $(this);
    var wrapper = $('<div></div>');
 		ele.before(wrapper);

     $(window).on('scroll resize', function() {
         toggleAffix(ele, wrapper, $(this));
     });

     // init
     toggleAffix(ele, wrapper, $(window));
   });

	  var menu = $('header');
    var content = $('#content_wrap');
    var origOffsetY = menu.offset().top;

    function scroll() {
        if ($(window).scrollTop() >= origOffsetY) {
            menu.addClass('sticky');
            content.addClass('menu-padding');
        } else {
            menu.removeClass('sticky');
            content.removeClass('menu-padding');
        }
    }

    $(document).scroll();
});
