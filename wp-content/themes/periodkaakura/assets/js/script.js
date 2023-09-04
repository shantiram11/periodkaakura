jQuery(document).ready(function ($) {
    "use strict";
    //  TESTIMONIALS CAROUSEL HOOK
    $('#customers-testimonials').owlCarousel({
        loop: true,
        center: true,
        items: 2,
        margin: 60,
        autoplay: true,
        dots: true,
        autoplayTimeout: 8500,
        smartSpeed: 450,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1170: {
                items: 2
            }
        }
    });

    $('.news-gallery .relative').hover(
        function () {
            $(this).find('.news-overlay').fadeIn();
        },
        function () {
            $(this).find('.news-overlay').fadeOut();
        }
    );
    $("#customSubmitButton").on("click", function () {
        // Trigger the form submission
        $(".contact-section form").submit();
    });
    $('#hero-slider').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: true,
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
    $(".wrapper .item").slice(4).hide();
    let total = $(".wrapper .item").length;
    console.log(total);
    $('#pagination').pagination({
        // Total number of items present
        // in wrapper class
        items: total,
        // Items allowed on a single page
        itemsOnPage: 4,
        onPageClick: function (noofele) {
            $(".wrapper .item").hide()
                .slice(4 * (noofele - 1),
                    4 + 4 * (noofele - 1)).show();
        }
    });
});
