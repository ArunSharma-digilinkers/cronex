
$('.testimonilas').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:2000,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
 });


 $('.brands').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    autoplay:true,
    autoplayTimeout:2000,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:4
        },
        1000:{
            items:6
        }
    }
 });



 
$(document).ready(function () {
    // Only enable hover for large screens
    function enableHoverDropdown() {
        if (window.innerWidth >= 992) {
            $('.dropdown').hover(
                function () {
                    $(this).addClass('show');
                    $(this).find('.dropdown-toggle').attr('aria-expanded', 'true');
                    $(this).find('.dropdown-menu').addClass('show');
                },
                function () {
                    $(this).removeClass('show');
                    $(this).find('.dropdown-toggle').attr('aria-expanded', 'false');
                    $(this).find('.dropdown-menu').removeClass('show');
                }
            );
        } else {
            // Remove hover events to avoid issues on resize
            $('.dropdown').off('mouseenter mouseleave');
        }
    }

    enableHoverDropdown();

    // Re-apply on window resize
    $(window).on('resize', function () {
        enableHoverDropdown();
    });
});


// Slider

var heroSlider = document.querySelector('#homeHeroSlider');
var carousel = new bootstrap.Carousel(heroSlider, {
    interval: 5000, // 5 sec
    ride: 'carousel',
    pause: false    // keeps sliding even if mouse hovers
});




