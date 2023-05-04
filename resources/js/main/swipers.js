import Swiper, { Navigation, Pagination, Grid } from 'swiper';
  // import Swiper and modules styles
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/grid';

Swiper.use([Grid, Navigation, Pagination]);

const brandsSwiper = new Swiper('.brands__swiper', {
    direction: 'horizontal',
    slidesPerView: 2,
    spaceBetween: 10,
    grid: {
        rows: 4,
        fill: 'row',
    },

    navigation: {
        nextEl:'.brands-swiper-button__next',
        prevEl:'.brands-swiper-button__prev'
    }
});

const discountSwiper = new Swiper('.discount__swiper', {
    direction: 'horizontal',
    slidesPerView: 2,
    spaceBetween: 10,
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
    spaceBetween: 10,
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
    spaceBetween: 10,
    grid: {
        rows: 2,
        fill: 'row',
    },

    navigation: {
        nextEl:'.views-swiper-button__next',
        prevEl:'.views-swiper-button__prev'
    }
});

