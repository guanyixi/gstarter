jQuery(document).ready(function($) {
$(function() {


//Scroll
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 400) {
      $("body").addClass("scrolled");
    }else{
      $("body").removeClass("scrolled");
    }
});

//Initial Slick Slider
  $('.slider').slick({
    autoplay:true,
    dots:true,
    arrows: false,
    fade: false,
    speed: 1200,
  });

// Back to top button
  // Show or hide the sticky footer button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 400) {
            $('.go-top').fadeIn(200);
        } else {
            $('.go-top').fadeOut(200);
        }
    });

    // Animate the scroll to top
    $('.go-top').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0}, 300);
    });



    


}); //end anonymous function
}); //end document ready


