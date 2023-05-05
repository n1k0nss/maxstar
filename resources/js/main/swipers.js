import Swiper, { Navigation, Pagination, Grid } from 'swiper';
  // import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/grid';

Swiper.use([Grid, Navigation, Pagination]);

const heroSwiper = new Swiper('.hero__swiper', {
    loop: false,
    direction: 'horizontal',

    pagination: {
        el: '.hero__swiper-pagination',
        clickable: true,
    },

    navigation: {
        nextEl:'.hero-swiper-button__next',
        prevEl:'.hero-swiper-button__prev'
    },

})

const brandsSwiper = new Swiper('.brands__swiper', {
    direction: 'horizontal',
    grid: {
        rows: 4,
        fill: 'row',
    },

    navigation: {
        nextEl:'.brands-swiper-button__next',
        prevEl:'.brands-swiper-button__prev'
    },

    breakpoints: {
        320:{
            slidesPerView: 2,
            spaceBetween: 10
        },

        576: {
            slidesPerView: 3,
            spaceBetween: 15,
            grid: {
                rows: 3,
                fill: 'row',
            }
        }
    }
});

const discountSwiper = new Swiper('.discount__swiper', {
    direction: 'horizontal',
    slidesPerView: 2,
    spaceBetween: 15,
    grid: {
        rows: 2,
        fill: 'row',
    },

    navigation: {
        nextEl:'.discount-swiper-button__next',
        prevEl:'.discount-swiper-button__prev'
    }
});

const latestSwiper = new Swiper('.latest__swiper', {
    direction: 'horizontal',
    slidesPerView: 2,
    spaceBetween: 15,
    grid: {
        rows: 2,
        fill: 'row',
    },

    navigation: {
        nextEl:'.latest-swiper-button__next',
        prevEl:'.latest-swiper-button__prev'
    }
});

const viewsSwiper = new Swiper('.views__swiper', {
    direction: 'horizontal',
    slidesPerView: 2,
    spaceBetween: 15,
    grid: {
        rows: 2,
        fill: 'row',
    },

    navigation: {
        nextEl:'.views-swiper-button__next',
        prevEl:'.views-swiper-button__prev'
    }
});

