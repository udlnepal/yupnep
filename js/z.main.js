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
$('.menu-item-has-children').addClass('dropdown');

$('.sub-menu').addClass('dropdown-menu');
$('.dropdown-menu li').addClass('dropdown-item');
$('.menu-item-has-children.dropdown a').attr('data-toggle', 'dropdown');
//$('.menu-item-has-children.dropdown a:after').html("<span class="+"'icon-arrow-down'"+">"+"</span>");
/* write above here */
});