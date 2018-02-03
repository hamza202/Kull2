/*
 * Title:   Travelo - Travel, Tour Booking HTML5 Template - Custom Javascript file
 * Author:  http://themeforest.net/user/soaptheme
 */
tjq(document).ready(function () {
    tjq("#content-slider").lightSlider({
        loop: true,
        keyPress: true,
        auto:true,
        speed:1000,
        pause:2500,
        slideMove: 1,
        item: 5,
        prevHtml: '<i class="fa fa-angle-left"></i>',
        nextHtml: '<i class="fa fa-angle-right"></i>',
        pager:false,
        responsive: [
            {
                breakpoint: 1000,
                settings: {
                    item: 4,
                    slideMove: 1,
                }
            },
            {
                breakpoint: 800,
                settings: {
                    item: 3,
                    slideMove: 1,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    item: 1,
                    slideMove: 1
                }
            }
        ]
    });
});
tjq(document).ready(function () {
    var slider = tjq("#content-slider1").lightSlider({
        loop: true,
        keyPress: true,
        auto:true,
        speed:1000,
        pause:2500,
        slideMove: 1,
        item: 1,
        prevHtml: '<i class="fa fa-angle-left"></i>',
        nextHtml: '<i class="fa fa-angle-right"></i>',
        pager:false,
        responsive: [
            {
                breakpoint: 1000,
                settings: {
                    item: 1,
                    slideMove: 1
                }
            },
            {
                breakpoint: 800,
                settings: {
                    item: 1,
                    slideMove: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    item: 1,
                    slideMove: 1
                }
            }
        ]
    });
    var timeout;
    tjq('#content-slider1').on('mouseenter', function () {
        slider.pause();
        clearTimeout(timeout);
    });
    tjq('#content-slider1').on('mouseleave', function () {
        timeout = setTimeout(function () {
            slider.play();
        }, 2000);

    });
});


tjq(document).ready(function() {
    // UI Form Element
});