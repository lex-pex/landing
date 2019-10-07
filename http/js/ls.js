
/**
 * Smooth Anchor Scroll
 */

$(document).ready(function(){
    $(".scroll_anchor").on("click","a", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({scrollTop: top}, 1500);
    });
});

/**
 * Pane Control
 */
function paneToggle() {
    if (document.getElementById('pane_tools').style.display === 'block') {
        document.getElementById('pane-btn-symbol').className = 'fa fa-bars fa-2x';
        document.getElementById('pane_tools').style.display = 'none';
        document.getElementById('pane-btn').style.background = 'none';
    } else {
        document.getElementById('pane-btn-symbol').className = 'fa fa-times fa-2x';
        document.getElementById('pane_tools').style.display = 'block';
        document.getElementById('pane-btn').style.background = '#0074D9';
    }
}

(function ($) {
    'use strict';

    /**
     * Owl Carousel Active
     */
    if ($.fn.owlCarousel) {
        $(".welcome_slides").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            smartSpeed: 1400,
            nav: true,
            navText: ["<i class='fa fa-angle-left'</i>", "<i class='fa fa-angle-right'</i>"]
        });
        $(".port_slides").owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            smartSpeed: 1000,
            margin: 30,
            center: true,
            dots: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 3
                },
                992: {
                    items: 5
                }
            }
        });
    }

    /**
     * Slick
     */
    if ($.fn.slick) {
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 500,
            arrows: false,
            fade: true,
            asNavFor: '.slider-nav'
        });
        $('.slider-nav').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            speed: 500,
            asNavFor: '.slider-for',
            dots: true,
            centerMode: true,
            focusOnSelect: true,
            slide: 'div',
            autoplay: true,
            centerMode: true,
            centerPadding: '30px',
            mobileFirst: true,
            prevArrow: '<i class="fa fa-angle-left"></i>',
            nextArrow: '<i class="fa fa-angle-right"></i>'
        });
    }

    /**
     * Footer Reveal
     */
    if ($.fn.footerReveal) {
        $('footer').footerReveal({
            shadow: true,
            shadowOpacity: 0.3,
            zIndex: -101
        });
    }

    /**
     * ScrollUp
     */
    if ($.fn.scrollUp) {
        $.scrollUp({
            scrollSpeed: 1500,
            scrollText: '<i class="fa fa-angle-up"></i>'
        });
    }

    /**
     * CounterUp
     */
    if ($.fn.counterUp) {
        $('.counter').counterUp({
            delay: 10,
            time: 2000
        });
    }

    /**
     * onePageNav
     */
    if ($.fn.onePageNav) {
        $('#nav').onePageNav({
            currentClass: 'active',
            scrollSpeed: 2000,
            easing: 'easeOutQuad'
        });
    }

    /**
     * Magnific-popup Video
     */
    if ($.fn.magnificPopup) {
        $('.video_btn').magnificPopup({
            disableOn: 0,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: true,
            fixedContentPos: false
        });
    }

    $('a[href="#"]').click(function ($) {
        $.preventDefault()
    });

    var $window = $(window);

    if ($window.width() > 767) {
        new WOW().init();
    }

    /**
     * Scrolling
     */
    $window.on('scroll', function () {
        if ($window.scrollTop() > 48) {
            $('.header_area').addClass('sticky slideInDown');
        } else {
            $('.header_area').removeClass('sticky slideInDown');
        }
    });

    /**
     * Pre Load Welcome
     */
    $window.on('load', function () {
        $('#pre-load').fadeOut('slow', function () {
            $(this).remove();
        });
    });
})(jQuery);