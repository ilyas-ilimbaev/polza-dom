const infoServicesSwiper = new Swiper('.info-services-swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,
    slidesPerView: 3,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
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

const designingServicesSwiper = new Swiper('.designing-services-swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: false,
    slidesPerView: 1,

    // If we need pagination
    pagination: {
        el: '.swiper-pagination',
        type: 'fraction',
        dynamicMainBullets: 'number',
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