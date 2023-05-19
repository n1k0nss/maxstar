/* Variables Utils */
const revealBtn = document.querySelector('.js-reveal');
const revealText = document.querySelector('.js-reveal-text');

const qantityInput = document.querySelector('.js-quant-input');
const decrementBtn = document.querySelector('.js-decr');
const incrementBtn = document.querySelector('.js-incr');
const countDecrementArrow = document.querySelector('.counterDecrArrow__svg');

const addToCartBtn = document.querySelector('.js-add-to-cart');
const addToFavBtn = document.querySelector('.js-fav-btn');
const countFav = document.querySelector('.js__count-fav');
const countCart = document.querySelector('.js__count-cart');
const favHeart = document.querySelector('.slider__heart-js');

addToFavBtn.addEventListener('click', () => {
    let count = 0;
    if(countFav.innerHTML > 0){
        countFav.innerHTML = count;
        favHeart.classList.remove('added');
    } else {
        count++;
        countFav.innerHTML = count;
        favHeart.classList.add('added');
    }
});
addToCartBtn.addEventListener('click', () => {
    if(countCart.innerHTML > 0){
        countCart.innerHTML = qantityInput.value;
    } else {
        countCart.innerHTML = qantityInput.value;
    }
});
revealBtn.addEventListener('click', () => {
    revealBtn.classList.add('reveal');
    revealText.classList.add('reveal');
});
incrementBtn.addEventListener('click', () => {
    decrementBtn.removeAttribute('disabled');
    countDecrementArrow.classList.remove('disabled');
    qantityInput.value++;
});
decrementBtn.addEventListener('click', () => {
    if(qantityInput.value <= 1){
        qantityInput.value++;
        decrementBtn.setAttribute('disabled', '');
        countDecrementArrow.classList.add('disabled');
    }
    qantityInput.value = qantityInput.value - 1;
});
