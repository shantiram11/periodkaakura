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

    $('#gallery_slider').owlCarousel({
        loop: true,
        center: true,
        items: 2,
        margin: 60,
        nav:true,
        autoplay: true,
        dots: false,
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
        },
        navText : ["<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"48\" viewBox=\"0 0 48 48\" fill=\"none\">\n" +
        "  <path d=\"M24 48C28.7467 48 33.3869 46.5924 37.3337 43.9553C41.2805 41.3181 44.3566 37.5698 46.1731 33.1844C47.9896 28.799 48.4649 23.9734 47.5388 19.3178C46.6128 14.6623 44.327 10.3859 40.9706 7.02945C37.6141 3.67298 33.3377 1.38721 28.6822 0.461161C24.0266 -0.464884 19.201 0.0103925 14.8156 1.8269C10.4302 3.6434 6.68188 6.71954 4.04473 10.6663C1.40758 14.6131 2.51312e-06 19.2532 2.09815e-06 24C0.0121971 30.3614 2.54468 36.4589 7.04291 40.9571C11.5411 45.4553 17.6385 47.9878 24 48ZM14.7692 22.1538L28.7769 22.1538L24.0923 17.4692C23.7471 17.1231 23.5532 16.6542 23.5532 16.1654C23.5532 15.6765 23.7471 15.2076 24.0923 14.8615C24.2642 14.6886 24.4694 14.5524 24.6955 14.4611C24.9216 14.3699 25.1639 14.3255 25.4077 14.3308C25.648 14.326 25.8867 14.3706 26.109 14.4619C26.3313 14.5532 26.5324 14.6892 26.7 14.8615L34.5231 22.6846C34.697 22.8576 34.8378 23.0609 34.9385 23.2846C35.1233 23.7436 35.1233 24.2564 34.9385 24.7154C34.8378 24.9391 34.697 25.1424 34.5231 25.3154L26.7 33.1385C26.3488 33.4567 25.8887 33.6276 25.415 33.616C24.9412 33.6043 24.4901 33.4109 24.155 33.0758C23.8199 32.7407 23.6265 32.2896 23.6148 31.8158C23.6031 31.3421 23.7741 30.882 24.0923 30.5308L28.7769 25.8462L14.7692 25.8462C14.2796 25.8462 13.81 25.6517 13.4638 25.3054C13.1176 24.9592 12.9231 24.4896 12.9231 24C12.9231 23.5104 13.1176 23.0408 13.4638 22.6946C13.81 22.3484 14.2796 22.1538 14.7692 22.1538Z\" fill=\"#DCDCDC\"/>\n" +
        "</svg>","<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"48\" height=\"48\" viewBox=\"0 0 48 48\" fill=\"none\">\n" +
        "  <path d=\"M24 0C19.2533 0 14.6131 1.40758 10.6663 4.04473C6.71954 6.68188 3.6434 10.4302 1.8269 14.8156C0.0103988 19.201 -0.464881 24.0266 0.461164 28.6822C1.38721 33.3377 3.67299 37.6141 7.02945 40.9706C10.3859 44.327 14.6623 46.6128 19.3178 47.5388C23.9734 48.4649 28.799 47.9896 33.1844 46.1731C37.5698 44.3566 41.3181 41.2805 43.9553 37.3337C46.5924 33.3869 48 28.7467 48 24C47.9878 17.6385 45.4553 11.5411 40.9571 7.04291C36.4589 2.54468 30.3615 0.0121984 24 0ZM33.2308 25.8461H19.2231L23.9077 30.5308C24.253 30.8769 24.4468 31.3458 24.4468 31.8346C24.4468 32.3235 24.253 32.7924 23.9077 33.1385C23.7358 33.3114 23.5306 33.4476 23.3045 33.5389C23.0784 33.6301 22.8361 33.6745 22.5923 33.6692C22.352 33.674 22.1133 33.6294 21.891 33.5381C21.6687 33.4468 21.4676 33.3107 21.3 33.1385L13.4769 25.3154C13.303 25.1424 13.1622 24.9391 13.0615 24.7154C12.8767 24.2564 12.8767 23.7436 13.0615 23.2846C13.1622 23.0609 13.303 22.8576 13.4769 22.6846L21.3 14.8615C21.6512 14.5433 22.1113 14.3724 22.5851 14.384C23.0588 14.3957 23.5099 14.5891 23.845 14.9242C24.1801 15.2593 24.3735 15.7104 24.3852 16.1842C24.3969 16.6579 24.2259 17.118 23.9077 17.4692L19.2231 22.1538H33.2308C33.7204 22.1538 34.19 22.3483 34.5362 22.6946C34.8824 23.0408 35.0769 23.5104 35.0769 24C35.0769 24.4896 34.8824 24.9592 34.5362 25.3054C34.19 25.6516 33.7204 25.8461 33.2308 25.8461Z\" fill=\"#DCDCDC\"/>\n" +
        "</svg>"]

    });
    $('.news-gallery .relative').hover(
        function () {
            $(this).find('.news-overlay').stop().fadeTo(200, 0.9); // Fade in with 90% opacity
        },
        function () {
            $(this).find('.news-overlay').stop().fadeTo(200, 0); // Fade out to 0% opacity
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
    });
    $('#video_slider').owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        nav: true,
        autoplayTimeout: 4500,
        dots: true,
        touchDrag  : true,
        mouseDrag  : true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 2
            }
        }
    });

    $(".wrapper .item").slice(4).hide();
    let total = $(".wrapper .item").length;
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
    $(document).ready(function () {
        const siteHeader = $('.site-header');
        let lastScrollTop = 0;
        const threshold = 15; // Set the scroll threshold for showing/hiding the header

        $(window).scroll(function () {
            const scrollPos = $(this).scrollTop();
            const scrollDelta = Math.abs(scrollPos - lastScrollTop);

            if (scrollDelta >= threshold) {
                if (scrollPos > lastScrollTop) {
                    // Scrolling down
                    siteHeader.slideUp();
                } else {
                    // Scrolling up
                    siteHeader.slideDown();
                }
            }

            lastScrollTop = scrollPos;
        });
    });
    /** start: mobile menu */
    jQuery('#mobile-toggle').on('click',function (){
        let mobile_nav = jQuery('#mobile-nav');
        if(mobile_nav.hasClass('hidden')){
            mobile_nav.removeClass('hidden');
            mobile_nav.slideDown();
        }else{
            mobile_nav.addClass('hidden');
            mobile_nav.slideUp();
        }
    });
    jQuery('#mobile-nav li').on('click', function () {
        // Hide mobile navigation by adding the 'hidden' class
        let mobile_nav = jQuery('#mobile-nav');
        mobile_nav.addClass('hidden');
        mobile_nav.slideUp();
    });
    /** end: mobile menu */

    $(".read-more-btn").click(function() {
        var subtitle = $(".subtitle");
        var fullSubtitle = $(".full-subtitle");
        subtitle.toggle();
        fullSubtitle.toggle();
        $(this).text(function(i, text){
            return text === "Read More.." ? "Read Less" : "Read More..";
        });
    });
});
