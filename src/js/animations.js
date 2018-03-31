$(window).scroll(function() {
  var scrollTop = $(window).scrollTop();
  var imgPos = scrollTop / 2.7 + "px";
  //    $('#MainSlider').find('img').css('transform', 'translateY(-' + imgPos + ')');
});

function simpleParallax(intensity, element) {
  $(window).scroll(function() {
    var scrollTop = $(window).scrollTop();
    var imgPos = scrollTop / intensity + "px";
    element.css("transform", "translateY(" + imgPos + ")");
  });
}

$(document).ready(function($) {
  var w = window.innerWidth;
  var slider = $("#MainSlider");
  var logo = $("#logo");

  var carouselInner = $(".carousel-inner");
  var parallaxQuantity = carouselInner.length;
  //    simpleParallax(2, $('.container'));
  simpleParallax(-2, slider);
  simpleParallax(-2.5, $("header"));
  // simpleParallax(1.3, $('#logo'));

  $(window).on("scroll", function() {
    window.requestAnimationFrame(function() {
      var scrolled = $(window).scrollTop();
      var parallax_speed_x1 = scrolled / 2 + "px";
      var parallax_speed_x2 = scrolled / 4 + "px";
      var parallax_speed_x3 = scrolled / 6 + "px";
      console.log(scrolled / 10, scrolled / 6 * 0.09);

      $(".content_header").css({
        transform:
          "rotate(" +
          scrolled / 2 * 0.003 +
          "deg) translateY(" +
          scrolled * -0.3 +
          ")"
        //  'width': 100 - (scrolled / 10 )+'%'
      });

      $(".plate").css({
        transform: "translate3d(0," + parallax_speed_x3 * -0.3 + "px, 0)"
      });
      carouselInner.css({
        transform: "translate3d(0," + parallax_speed_x2 * 0.3 + "px, 0);"
      });
    });
  });

  var selector = $("#logo");
  var XAngle = 0;
  var YAngle = 0;
  var Z = 50;

  selector.on("mousemove", function(e) {
    var XRel = e.pageX - $(this).offset().left;
    var YRel = e.pageY - $(this).offset().top;
    var width = selector.width();

    YAngle = -(0.5 - XRel / width) * 4;
    XAngle = (0.5 - YRel / width) * 4;
    updateView(selector);
  });

  $("#logo").on("mouseleave", function() {
    ele = $(this);
    ele.css({
      transform: "perspective(525px) translateZ(0) rotateX(0deg) rotateY(0deg)",
      transition: "all 150ms linear 0s",
      "-webkit-transition": "all 150ms linear 0s"
    });
    ele
      .find("strong")
      .css({
        transform:
          "perspective(525px) translateZ(0) rotateX(0deg) rotateY(0deg)",
        transition: "all 150ms linear 0s",
        "-webkit-transition": "all 150ms linear 0s"
      });
  });

  function updateView(ele) {
    ele.css({
      transform:
        "perspective(525px) translateZ(" +
        Z +
        "px) rotateX(" +
        XAngle +
        "deg) rotateY(" +
        YAngle +
        "deg)",
      transition: "none",
      "-webkit-transition": "none"
    });
    ele
      .find("strong")
      .css({
        transform:
          "perspective(525px) translateZ(" +
          Z +
          "px) rotateX(" +
          XAngle / 0.66 +
          "deg) rotateY(" +
          YAngle / 0.66 +
          "deg)",
        transition: "none",
        "-webkit-transition": "none"
      });
  }
});
