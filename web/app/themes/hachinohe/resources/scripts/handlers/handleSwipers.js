import Swiper, { Navigation, Pagination } from 'swiper';
// impport css

export default function handleSwipers() {
  new Swiper('.mySwiper', {
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,

    scrollbar: {
      el: '.swiper-scrollbar',
      hide: true,
    },
  });
}
