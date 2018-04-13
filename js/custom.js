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


//Mobile Navigation



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


    //Category filter
    var $mainContent = $('#main-content');
    var $catLinks = $('#cat-filter li a');

        $catLinks.on('click', function(e){
            e.preventDefault();
            alert( 'Clicked Link' );
            // var $url = $(this).attr('href');
            // $mainContent.animate({opcacity: '0.5'});
            // $mainContent.load($url + '#post-container', function(){
            //     $mainContent.animate({opacity: '1'});
            // });
        });





}); //end anonymous function
}); //end document ready
