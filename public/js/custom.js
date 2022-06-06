//* Back to top
$(document).ready(function () {
    let pageHeight = $(document).height();
    let halfHeight = pageHeight / 2
    let currentPosition = halfHeight;

    // on page scroll
    $(window).scroll(function () {
        // if the page scroll to down more than the half show the button
        if ($(this).scrollTop() > halfHeight) {
            $('#back-to-top').fadeIn().toggleClass('hidden');
        } else {
            // other ways hide it
            $('#back-to-top').fadeOut();
        }
    });
    // go back to to the top of the page with animation
    $('#back-to-top').click(function () {
        $("html, body").animate({scrollTop: 0,}, halfHeight / 2);
        return false;
    });


    //Featured
    const swiperFeatured = new Swiper('.swiper-featured', {
        // Optional parameters
        direction: 'horizontal',

        slidesPerView: 1,
        spaceBetween: 10,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },

        breakpoints: {
            640: {
                slidesPerView: 3,
                spaceBetween: 15
            }
        }
    });
    // Catgory
    const swiperCatgeory = new Swiper('.swiper-category', {
        // Optional parameters
        slidesPerView: 1,
        spaceBetween: 10,
        observeParents: true,

        // If we need pagination
        pagination: {
            el: '.swiper-category-pagination',
            clickable: true
        },

        breakpoints: {
            640: {
                slidesPerView: 3,
                spaceBetween: 15
            }
        }
    });
    // Locations
    const swiperLocations = new Swiper('.swiper-locations', {
        direction: 'horizontal',
        loop: true,
        speed: 6000,
        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
        slidesPerView: 1,
        spaceBetween: 10,
        slidesPerView: 'auto',
        grabCursor: true,
        mousewheelControl: true,
        keyboardControl: true,
    });

});