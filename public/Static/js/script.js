// JavaScript Document
$(window).load(function(){
    // will fade out the whole DIV that covers the website.
    jQuery(".preloader").fadeOut("slow");
});

jQuery(document).ready(function ($) {
    'use strict';

    //jQuery for page scrolling feature - requires jQuery Easing plugin
    $('.page-scroll').on('click', function (event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });


    // collapsed menu close on click
    $(document).on('click', '.navbar-collapse.in', function (e) {
        if ($(e.target).is('a')) {
            $(this).collapse('hide');
        }
    });

    // add white background to nav with scrolling
    if ($(window).scrollTop() > 50) {
        $(".sticky-navigation").addClass("NavBg");
    }
    else {
        $(".sticky-navigation").removeClass("NavBg");
    }
    $(window).scroll(function(){
        if ($(window).scrollTop() > 50) {
            $(".sticky-navigation").addClass("NavBg");
        }
        else {
            $(".sticky-navigation").removeClass("NavBg");
        }
    });

    // screenshots carousel
    jQuery(function() {

        jQuery('#allinone_carousel_sweet').allinone_carousel({
            skin: 'sweet',
            width: 1140,
            height: 800,
            responsive:true,
            autoPlay: 5,
            resizeImages:true,
            autoHideBottomNav:false,
            //easing:'easeOutBounce',
            numberOfVisibleItems:5,
            elementsHorizontalSpacing:180,
            elementsVerticalSpacing:50,
            verticalAdjustment:0,
            animationTime:0.5,
            circleLeftPositionCorrection:50,
            circleTopPositionCorrection:20,
            circleLineWidth:3,
            circleColor:"#29282B",
            behindCircleColor:"#999999",
            nextPrevMarginTop:25,
            bottomNavMarginBottom:-50
        });
    });

    // input , text area placeholder on browsers
    $('input, textarea').placeholder();

    $("#shareRoundIcons").jsSocials({
        url: "www.codexapp.xzy",
        text: "@TheCodexApp una iniciativa para el fomento de la lecturta en Mexico",
        showLabel: false,
        showCount: false,
        shares: ["email", "twitter", "facebook", "linkedin", "pinterest"]
    });

}); // end Document.ready

/* wow animation put it after Document.ready  */
wow = new WOW(
{
    mobile: false
});
wow.init();
