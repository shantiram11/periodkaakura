jQuery(document).ready(function($) {
    "use strict";
    //  TESTIMONIALS CAROUSEL HOOK
    $('#customers-testimonials').owlCarousel({
        loop: true,
        center: true,
        items: 2,
        margin: 20,
        autoplay: true,
        dots:true,
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

});
jQuery(document).ready(function(){
    const photoGallery = document.querySelector('.photo-gallery');

// Get the computed background image URL
    const backgroundImage = getComputedStyle(photoGallery).backgroundImage;

// Apply reddish tint effect
    photoGallery.style.filter = 'sepia(100%) hue-rotate(263deg) saturate(2)';
    photoGallery.style.backgroundImage = backgroundImage;
});