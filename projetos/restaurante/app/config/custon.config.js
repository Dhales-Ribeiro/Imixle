/**
 * Created by dhales on 31/05/17.
 */

'use strict';
application.controller('restalrantCTRL', function ($scope, $timeout, $mdSidenav) {
    $scope.toggleLeft = buildToggler('left');
    $scope.toggleRight = buildToggler('right');

    function buildToggler(componentId) {
        return function() {
            $mdSidenav(componentId).toggle();
        };
    }
});

$(document).ready(function() {

    $('.spinner').fadeOut('slow');
    $('.preloader').delay(350).fadeOut();
    $('body').delay(350).fadeIn();


    /* ==== Screenshots Carousel ==== */
    $('#screen-carousel').owlCarousel({
        singleItem: 4,
        loop:true,
        autoplay: true,
        pagination: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                //nav:true
            },
            600: {
                items: 3,
                //nav:false
            },
            1000: {
                items: 4,
                //nav:true,
                loop: true
            }
        }

    });

    $('#screen-carousel1').owlCarousel({
        singleItem: 4,
        loop:true,
        autoplay: true,
        pagination: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                //nav:true
            },
            600: {
                items: 1,
                //nav:false
            },
            1000: {
                items: 1,
                //nav:true,
                loop: true
            }
        }

    });

    /* ==== Testimonials Carousel ==== */
    $('#testimonials-carousel').owlCarousel({
        items:1,
        animateIn: 'fadeIn',
        loop:true,
        autoplay: true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        smartSpeed:450,
        pagination:true
    });

    /* ==== Numbers ==== */
    $('.statistic').appear(function () {
        $('.timer').countTo({
            speed: 4000,
            refreshInterval: 60,
            formatter: function (value, options) {
                return value.toFixed(options.decimals);
            }
        });
    });

    /* ==== Boxer ==== */
    $(".boxer").lightbox();

    /* ==== Scroll link ==== */
    $.localScroll.hash();
    $('md-toolbar').localScroll({
        target: 'md-content',
        queue: true,
        duration: 1000,
        hash: false,
        offset: 0,
        easing: 'easeInOutExpo'
    });

    $('md-sidenav').localScroll({
        target: 'md-content',
        queue: true,
        duration: 1000,
        hash: false,
        offset: 0,
        easing: 'easeInOutExpo'
    });

    $('input.datepicker').datepicker({
    });

    $('.clockpicker').clockpicker({
        placement: 'top',
        align: 'left',
        donetext: 'Done',
        twelvehour: 'true'
    });

});