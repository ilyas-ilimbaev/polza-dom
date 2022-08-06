const infoServicesSwiper = new Swiper('.info-services-swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,
    slidesPerView: 3,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            scrollbar: {
                el: ".swiper-scrollbar",
                draggable: true,
            }
        }
    },
    // Navigation arrows
    navigation: {
        nextEl: '.info-services-button-next',
        prevEl: '.info-services-button-prev',
    },
    // And if we need scrollbar
    scrollbar: {
        el: '.swiper-scrollbar',
    },
});

const designingServicesSwiper = new Swiper('.info-services-swiper__design', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,
    slidesPerView: 1,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
    },

    //Navigation arrows
    navigation: {
        nextEl: '.info-services-button-next',
        prevEl: '.info-services-button-prev',
    },
    breakpoints: {
        // when window width is >= 320px
        320: {
            slidesPerView: 1,
            grid: {
                fill: 'column',
            },
            scrollbar: {
                el: ".swiper-scrollbar",
                draggable: true,
            }
        }
    },
});

const SwiperContainer = new Swiper('.top-house__swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,
    slidesPerView: 2,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
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
});