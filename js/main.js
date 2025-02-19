(function ($) {
"use strict";
//animation
AOS.init({
    duration:2000
});

    // meanmenu
    $('#mobile-menu').meanmenu({
        meanScreenWidth: "767",
        meanMenuContainer: '.mobile-menu-active'
    });


    // slider - active
    $('.slider-active').owlCarousel({
        loop: true,
        nav: true,
        autoplay: true,
        navText: ['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 1,
                
            },
            767: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

    // project - active
    $('.project-active').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        navText: ['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            767: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })

    // project - active
    $('.blog-active').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        navText: ['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })

    // project - active
    $('.brand-active').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        navText: ['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 4
            },
            992: {
                items: 5
            },
            1200: {
                items: 6
            }
        }
    })

    // magnificPopup
    $('.popup-video').magnificPopup({
        type: 'iframe'
        // other options
    });





})(jQuery);