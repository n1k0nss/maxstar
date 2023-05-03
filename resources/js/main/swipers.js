import Swiper, { Navigation, Pagination, Grid } from 'swiper';
  // import Swiper and modules styles
  import 'swiper/css';
  import 'swiper/css/navigation';
  import 'swiper/css/pagination';
  import 'swiper/css/grid';
    Swiper.use([Grid, Navigation, Pagination]);
const swiper = new Swiper('.brands__swiper', {
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

