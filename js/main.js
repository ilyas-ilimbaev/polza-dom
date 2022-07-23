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
const toggleMenu = document.querySelector(".toggle-menu"); // gamburger icon
const headerMenu = document.querySelector(".header-menu"); // menu list
const overlay = document.querySelector("#overlay"); // overlay block
const login = document.querySelector(".link-login"); // 
const authorization = document.querySelector(".popup-login"); // link-auth
const register = document.querySelector(".popup-register"); // link-register
const linkRegister = document.querySelector(".popup-link-register");
// ==== gamburger click ====
toggleMenu.addEventListener("click", function () {
    this.classList.toggle("toggle-menu--active");
    headerMenu.classList.toggle("active");
    overlay.classList.toggle("active");
    tagBody.classList.toggle("noscroll");
});
overlay.addEventListener("click", function () {
    this.classList.remove("toggle-menu--active");
    headerMenu.classList.remove("active");
    overlay.classList.remove("active");
    authorization.classList.remove("active");
    register.classList.remove("active");
    tagBody.classList.remove("noscroll");
});
headerMenu.addEventListener("click", function () {
    this.classList.remove("toggle-menu--active");
    headerMenu.classList.remove("active");
    overlay.classList.remove("active");
    tagBody.classList.remove("noscroll");
});
login.addEventListener("click", function () {
    this.classList.remove("toggle-menu--active");
    headerMenu.classList.remove("active");
    overlay.classList.toggle("active");
    authorization.classList.toggle("active");
    tagBody.classList.remove("noscroll");
});
linkRegister.addEventListener("click", function () {
    authorization.classList.remove("active");
    register.classList.toggle("active");
    overlay.classList.toggle("active");
});
