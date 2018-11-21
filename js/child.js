$(document).ready(function(){

    // Sticky Heaader
    $(window).scroll(function() {
        if ($(this).scrollTop() > 1){
        $('.site-header').addClass('sticky-header');
        //$('.site-header .main-navigation').addClass('sticky-navigation'); navigation menu is not displayed now after scrolling
        $('.site-header .site-branding').fadeIn(300);
        }
        else{
        $('.site-header').removeClass('sticky-header');
        //$('.site-header .main-navigation').removeClass('sticky-navigation');
        $('.site-header .site-branding').hide();
        }
    });

    //Owl Carousel animation
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        nav:false,
        center:true,
        navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });





  });