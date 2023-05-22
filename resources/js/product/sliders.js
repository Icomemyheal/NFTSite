import Swiper, { Navigation, Pagination, Scrollbar } from 'swiper';

import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
import 'swiper/css/scrollbar';

Swiper.use([Navigation, Pagination, Scrollbar]);

const verticalSliderItems = document.querySelectorAll('.scroll__slider .swiper-slide');

verticalSliderItems.forEach((item, index) => {
    item.addEventListener('click', () => {
        productSwiper.slideTo(index);
    });
});

const verticalProductSwiper = new Swiper('.scroll__slider', {
    direction: 'vertical',
    loop: false,
    slidesPerView: 5,

    scrollbar: {
        el: '.swiper-scrollbar',
        draggable: true,
    }
});
const productSwiper = new Swiper('.product__slider', {
    direction: 'horizontal',
    loop: false,

    breakpoints: {
        320: {
            pagination: {
                el: '.product__swiper--pagination',
            }
        },
        992: {
            scrollbar: {
                el: '.swiper-scrollbar-vertical',
                draggable: true,
            }
        }
    },
});
const goodsRecommendedSwiper = new Swiper('.goods__recommended--slider', {
    direction: 'horizontal',
    loop: false,
    slidesPerView: 2,
    spaceBetween: 15,

    breakpoints: {
        375:{
            slidesPerView: 3,
        },
        768: {
            slidesPerView: 4,
        },
        992: {
            slidesPerView: 5,
            spaceBetween: 20,
        },
        1200: {
            slidesPerView:6,
            spaceBetween: 25,
        },
        1360: {
            slidesPerView:7,
        },
        1700: {
            slidesPerView:8,
        }
    },
    
    navigation: {
        nextEl: '.recommended-next-btn',
        prevEl: '.recommended-prev-btn'
    },
});

const goodsViewsSwiper = new Swiper('.goods__views--slider', {
    direction: 'horizontal',
    loop: false,
    slidesPerView: 2,
    spaceBetween: 15,

    breakpoints: {
        375:{
            slidesPerView: 3,
        },
        425: {
            slidesPerView: 3,
        },
        768: {
            slidesPerView: 4,
        },
        992: {
            slidesPerView: 5,
            spaceBetween: 20,
        },
        1200: {
            slidesPerView:6,
            spaceBetween: 25,
        },
        1360: {
            slidesPerView:7,
        },
        1700: {
            slidesPerView:8,
        }
    },
    
    navigation: {
        nextEl: '.views-next-btn',
        prevEl: '.views-prev-btn'
    },
});