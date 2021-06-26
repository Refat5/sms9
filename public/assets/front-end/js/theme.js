(function($) {
  "use strict";

  var window_width = $(window).width(),
    window_height = window.innerHeight,
    header_height = $(".default-header").height(),
    header_height_static = $(".site-header.static").outerHeight(),
    fitscreen = window_height - header_height;

  $(".fullscreen").css("height", window_height);
  $(".fitscreen").css("height", fitscreen);

  var nav_offset_top = $("header").height() + 50;
  /*-------------------------------------------------------------------------------
	  Navbar 
	-------------------------------------------------------------------------------*/

  //* Navbar Fixed
  function navbarFixed() {
    if ($(".header_area").length) {
      $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= nav_offset_top) {
          $(".header_area").addClass("navbar_fixed");
        } else {
          $(".header_area").removeClass("navbar_fixed");
        }
      });
    }
  }
  navbarFixed();

  /*=================================
    Javascript for banner area carousel
    ==================================*/
  $(".banner-area").owlCarousel({
    items: 1,
    autoplay: 2500,
    autoplayTimeout: 5000,
    smartSpeed: 1500,
    loop: true,
    nav: false,
    dots: false
  });

  $(".active_testimonial").owlCarousel({
    loop: true,
    margin: 0,
    items: 1,
    nav: false,
    autoplay: 2500,
    smartSpeed: 1500,
    dots: true,
    responsiveClass: true
  });
})(jQuery);