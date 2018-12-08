$(document).ready(function(){

    //Function for smooth scrolling
    var scrollAnimation = function(height, duration) {
        $('html, body').animate({ scrollTop: height }, {duration: duration});
    }

    // Sticky Heaader
    /*$(window).scroll(function() {
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
    });*/

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

    //Smooth scrolling
    $('.main-navigation a[href^="#about"]').on('click',function(event){
        event.preventDefault(); 
        var h = $('.about-us-2').offset();
        scrollAnimation(h.top, 400);
    });

    $('.main-navigation a[href^="#colophon"]').on('click',function(event){
        event.preventDefault(); 
        var h = $('.site-footer').offset();
        scrollAnimation(h.top, 600);
    });





  });