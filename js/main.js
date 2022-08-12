const bodyEl = document.body;
const toggleMenu = document.querySelector(".toggle-menu"); // gamburger icon
const headerMenu = document.querySelector(".header-menu"); // menu list
const overlay = document.querySelector("#overlay"); // overlay block
const login = document.querySelector(".link-login"); // 
const authorization = document.querySelector(".popup-login"); // link-auth
const register = document.querySelector(".popup-register"); // link-register
const linkRegister = document.querySelector(".popup-link-register");
const calculationCost = document.querySelector(".header-calc-link");
const link_Mortgage = document.querySelector(".link-item-mortgage");
const popup_Mortgage = document.querySelector(".popup-mortgage");
const popupClose = document.querySelector(".popup-close");
// ==== gamburger click ====
toggleMenu.addEventListener("click", function () {
    this.classList.toggle("toggle-menu--active");
    headerMenu.classList.toggle("active");
    overlay.classList.toggle("active");
    bodyEl.classList.toggle("noscroll");
});
overlay.addEventListener("click", function () {
    this.classList.remove("toggle-menu--active");
    headerMenu.classList.remove("active");
    overlay.classList.remove("active");
    authorization.classList.remove("active");
    register.classList.remove("active");
    popup_Mortgage.classList.remove("active");
    document.querySelector(".popup-calculate-cost").style.display = 'none';
});
login.addEventListener("click", function () {
    headerMenu.classList.remove("active");
    authorization.classList.toggle("active");
});
linkRegister.addEventListener("click", function () {
    authorization.classList.remove("active");
    register.classList.toggle("active");
});
calculationCost.addEventListener("click", function () {
    document.querySelector(".popup-calculate-cost").style.display = 'block';
    overlay.classList.toggle("active");
}); 
popupClose.addEventListener("click", function () {
    document.querySelector(".popup-calculate-cost").style.display = 'none';
    overlay.classList.remove("active");
});
link_Mortgage.addEventListener("click", function () {
    popup_Mortgage.classList.toggle("active");
    headerMenu.classList.remove("active");
});