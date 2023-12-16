import Swiper from 'swiper';
import { Autoplay, Navigation, Pagination } from 'swiper/modules';
// impport css

export default function handleSwipers() {
  new Swiper('.mySwiper', {
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,

    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },

    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    modules: [Autoplay, Navigation, Pagination],
  });

  new Swiper('.storeSwiper', {
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,

    pagination: {
      el: '.store-swiper-pagination',
      clickable: true,
    },

    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },

    modules: [Autoplay, Navigation, Pagination],
  });
}
