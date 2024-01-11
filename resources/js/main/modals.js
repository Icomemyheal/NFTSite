/* Variables Modals */
const body = document.getElementsByTagName('body')[0];
const html = document.getElementsByTagName('html')[0];

const OVERLAY_CLASS = 'overlay';
const ACTIVE_CLASS = 'active';
const FIXING_CLASS = 'fixing';

const burgerBtn = document.querySelector('.header__btn--menu');
const burgerModal = document.querySelector('.dropdown__modal--burger');

const searchBtn = document.querySelector('.header__btn--search');
const searchModal = document.querySelector('.dropdown__modal--search');

const phoneboxBtn = document.querySelector('.js-phonebox-btn');
const phoneboxModal = document.querySelector('.js-phonebox-modal');
const phoneboxSvg = document.querySelector('.js-phonebox-svg');

const addToCartBtn = document.querySelector('.js-add-to-cart');
const popupOverlayCart = document.querySelector('.js-overlay-cart');
const popupCartWindow = document.querySelector('.js-cart-popup');
const popupCloseBtn = document.querySelectorAll('.js-close-popup');

const popupPhoneWindow = document.querySelector('.js-phone-popup');
const popupOverlayPhone = document.querySelector('.js-overlay-phone');
const oneClickBuyBtn = document.querySelector('.js-one-click-buy');
const popupPhoneCloseBtn = document.querySelector('.js-close-phonepoup');

let mediaQuery = window.matchMedia("(min-width: 992px)");

function removeClass(element, className) {
    element.classList.remove(className);
}

function addClass(element, className) {
    element.classList.add(className);
}
function toggleClass(element, className){
    element.classList.toggle(className);
}
function modalBurgerMenu (){
    if(burgerBtn.classList.contains('active')){
        addClass(burgerModal, ACTIVE_CLASS);
        burgerBtn.setAttribute('aria-expanded', true);
        searchBtn.setAttribute('disabled', '');
        addToCartBtn.setAttribute('disabled', '');
        oneClickBuyBtn.setAttribute('disabled', '');
    } else {
        removeClass(burgerModal, ACTIVE_CLASS);
        burgerBtn.setAttribute('aria-expanded', false);
        searchBtn.removeAttribute('disabled');
        addToCartBtn.removeAttribute('disabled', '');
        oneClickBuyBtn.removeAttribute('disabled', '');
    }
}

function modalSearchMenu(){
    if(searchBtn.classList.contains('active')){
        addClass(searchModal, ACTIVE_CLASS);
        searchBtn.setAttribute('aria-expanded', true);
        burgerBtn.setAttribute('disabled', '');
        addToCartBtn.setAttribute('disabled', '');
        oneClickBuyBtn.setAttribute('disabled', '');
    } else {
        removeClass(searchModal, ACTIVE_CLASS);
        searchBtn.setAttribute('aria-expanded', false);
        burgerBtn.removeAttribute('disabled');
        addToCartBtn.removeAttribute('disabled', '');
        oneClickBuyBtn.removeAttribute('disabled', '');
    }
}
const closePopupBtns = popupCloseBtn.forEach((element) => {
    element.addEventListener('click', (e) => {
        e.preventDefault();
        removeClass(popupOverlayCart, OVERLAY_CLASS);
        removeClass(popupCartWindow, ACTIVE_CLASS);
        removeClass(body, FIXING_CLASS);
    });
});
popupPhoneCloseBtn.addEventListener('click', (e) => {
    e.preventDefault();
    removeClass(popupPhoneWindow, ACTIVE_CLASS);
    removeClass(body, FIXING_CLASS);
    removeClass(html, FIXING_CLASS);
    removeClass(popupOverlayPhone, OVERLAY_CLASS);
});
oneClickBuyBtn.addEventListener('click', (e) => {
    e.preventDefault();
    mediaQuery.matches ? addClass(html, FIXING_CLASS) : addClass(body, FIXING_CLASS);
    addClass(popupPhoneWindow, ACTIVE_CLASS)
    addClass(popupOverlayPhone, OVERLAY_CLASS);
});
popupOverlayCart.addEventListener('click', () => {
    removeClass(body, FIXING_CLASS);
    removeClass(html, FIXING_CLASS);
    removeClass(popupOverlayCart, OVERLAY_CLASS);
    removeClass(popupCartWindow, ACTIVE_CLASS);
});
popupOverlayPhone.addEventListener('click', () => {
    removeClass(body, FIXING_CLASS);
    removeClass(html, FIXING_CLASS);
    removeClass(popupOverlayPhone, OVERLAY_CLASS);
    removeClass(popupPhoneWindow, ACTIVE_CLASS);
});

addToCartBtn.addEventListener('click', (e) => {
    e.preventDefault();
    mediaQuery.matches ? addClass(html, FIXING_CLASS) : addClass(body, FIXING_CLASS);
    addClass(popupCartWindow, ACTIVE_CLASS)
    addClass(popupOverlayCart, OVERLAY_CLASS);
});

phoneboxBtn.addEventListener('click', (e) => {
    e.preventDefault();
    toggleClass(phoneboxSvg, ACTIVE_CLASS);
    toggleClass(phoneboxModal, ACTIVE_CLASS);
    phoneboxModal.classList.contains('active') ? phoneboxBtn.setAttribute('aria-expanded', true) : phoneboxBtn.setAttribute('aria-expanded', false);
})
burgerBtn.addEventListener('click', (e) => {
    e.preventDefault();
    toggleClass(burgerBtn, ACTIVE_CLASS);
    toggleClass(body, FIXING_CLASS);

    modalBurgerMenu();
});

searchBtn.addEventListener('click', (e) => {
    e.preventDefault();
    toggleClass(searchBtn, ACTIVE_CLASS);
    toggleClass(body, FIXING_CLASS);

    modalSearchMenu();
});
