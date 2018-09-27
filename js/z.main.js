 jQuery( document ).ready( function( $ ) {


 $(window).scroll(function() {
            // 100 = The point you would like to fade the nav in.

            if ($(window).scrollTop() > 100) {

                $('.fixed').addClass('is-sticky');

            } else {

                $('.fixed').removeClass('is-sticky');

            };
        });


$('.menu-item a').addClass('nav-link');

/* write above here */
});