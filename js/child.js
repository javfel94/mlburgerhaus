$(document).ready(function(){

    // Sticky Heaader
    $(window).scroll(function() {
        if ($(this).scrollTop() > 1){
        $('.site-header').addClass('sticky-header');
        $('.main-navigation').addClass('sticky-navigation');
        $('.site-branding').fadeIn(300);
        }
        else{
        $('.site-header').removeClass('sticky-header');
        $('.main-navigation').removeClass('sticky-navigation');
        $('.site-branding').hide();
        }
    });

    //Owl Carousel animation
    $('.owl-carousel').owlCarousel({
        items:1,
        loop:true,
        margin:10,
        //autoplay:true,
        //autoplayTimeout:8000,
        //autoplayHoverPause:true,
        nav:true,
        center:true,
        navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
    });





  });