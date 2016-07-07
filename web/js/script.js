
//SMOOTH PAGE SCROLL
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});

//Close Menu



//OWL CAROSEL TESTIMONIAL
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:true,
    dotsEach:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})

$(document).ready(

  function() { 

    $("html").niceScroll({
    	cursorcolor:"#f74d65",
    	scrollspeed :"100",
    	cursorborder:"1px solid #f74d65",
    	horizrailenabled: "false",
    	cursorborderradius: "0px"
    });

  }

);

new WOW().init();


    
/*Preloader*/
//<![CDATA[
$(window).load(function() { // makes sure the whole site is loaded
  $('#status').fadeOut(); // will first fade out the loading animation
  $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
  $('body').delay(350).css({'overflow':'visible'});
})

$(function() {

    $('.order_BTN').click(function() {
        $('.window-BG').addClass('active');
        $('.window-BG').css({'height': $(document).height()});
        $('.window-BG.active  .windows-help-table-cell').css({'height': $(window).height()});
    });

    $('.window-close').click(function() {
        $('.window-BG').toggle();
    });

    if ($('#alert-text ul li').length > 0) {
        $('.window-BG').toggle();
    }

    $('.swith-red').click(function() {
        $('.form-red').addClass('active');
    });


});


