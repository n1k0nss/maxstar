/* Variables Modals */
const body = document.getElementsByTagName('body')[0];
const html = document.getElementsByTagName('html')[0];

const burgerBtn = document.querySelector('.header__btn--menu');
const burgerModal = document.querySelector('.dropdown__modal--burger');

const searchBtn = document.querySelector('.header__btn--search');
const searchModal = document.querySelector('.dropdown__modal--search');

const phoneboxBtn = document.querySelector('.js-phonebox-btn');
const phoneboxModal = document.querySelector('.js-phonebox-modal');
const phoneboxSvg = document.querySelector('.js-phonebox-svg');

const addToCartBtn = document.querySelector('.js-add-to-cart');
const popupOverlay = document.querySelector('.js-overlay');
const popupCartWindow = document.querySelector('.js-cart-popup');
const popupCloseBtn = document.querySelectorAll('.js-close-popup');

const popupPhoneWindow = document.querySelector('.js-phone-popup');
const oneClickBuyBtn = document.querySelector('.js-one-click-buy');
const popupPhoneCloseBtn = document.querySelector('.js-close-phonepoup');

let mediaQuery = window.matchMedia("(min-width: 992px)");

function modalBurgerMenu (){
    if(burgerBtn.classList.contains('active')){
        burgerModal.classList.add('active');
        burgerBtn.setAttribute('aria-expanded', true);
        searchBtn.setAttribute('disabled', '');
    } else {
        burgerModal.classList.remove('active');
        burgerBtn.setAttribute('aria-expanded', false);
        searchBtn.removeAttribute('disabled');
    }
}

function modalSearchMenu(){
    if(searchBtn.classList.contains('active')){
        searchModal.classList.add('active');
        searchBtn.setAttribute('aria-expanded', true);
        burgerBtn.setAttribute('disabled', '');
    } else {
        searchModal.classList.remove('active');
        searchBtn.setAttribute('aria-expanded', false);
        burgerBtn.removeAttribute('disabled');
    }
}
const closePopupBtns = popupCloseBtn.forEach((element) => {
    element.addEventListener('click', () => {
        popupOverlay.classList.remove('overlay');
        popupCartWindow.classList.remove('active');
        body.classList.remove('fixing');
    });
});
popupPhoneCloseBtn.addEventListener('click', () => {
    popupPhoneWindow.classList.remove('active');
    body.classList.remove('fixing');
    html.classList.remove('fixing');
    popupOverlay.classList.remove('overlay');
});
oneClickBuyBtn.addEventListener('click', () => {
    mediaQuery.matches ? html.classList.add('fixing') : body.classList.add('fixing');
    popupOverlay.classList.add('overlay');
    popupPhoneWindow.classList.add('active');
});
popupOverlay.addEventListener('click', () => {
    popupOverlay.classList.remove('overlay');
    popupCartWindow.classList.remove('active');
    popupPhoneWindow.classList.remove('active');
    body.classList.remove('fixing');
    html.classList.remove('fixing');
});

addToCartBtn.addEventListener('click', () => {
    mediaQuery.matches ? html.classList.add('fixing') : body.classList.add('fixing');
    popupOverlay.classList.add('overlay');
    popupCartWindow.classList.add('active');
    body.classList.add('fixing');
});

phoneboxBtn.addEventListener('click', () => {
    phoneboxSvg.classList.toggle('active');
    phoneboxModal.classList.toggle('active');
    phoneboxModal.classList.contains('active') ? phoneboxBtn.setAttribute('aria-expanded', true) : phoneboxBtn.setAttribute('aria-expanded', false);
})
burgerBtn.addEventListener('click', () => {
    burgerBtn.classList.toggle('active');
    body.classList.toggle('fixing');

    modalBurgerMenu();
});

searchBtn.addEventListener('click', (e) => {
    searchBtn.classList.toggle('active');
    body.classList.toggle('fixing');

    modalSearchMenu();
});
