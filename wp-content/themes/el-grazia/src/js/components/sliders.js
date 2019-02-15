import Swiper from 'swiper/dist/js/swiper.js';

$('.carousel').each(function() {
  let self = $(this);
  let $containerSlider = self.find('.carouselBody');

  new Swiper($containerSlider , {
    observer: true,
    observeParents: true,
    watchOverflow: true,
    slidesPerView: 4,
    spaceBetween: 24,
    navigation: {
      nextEl: self.find('.swiper-button-next'),
      prevEl: self.find('.swiper-button-prev')
    },
    pagination: {
      el: self.find('.swiper-pagination')
    },
    breakpoints: {
      1025: {
        spaceBetween: 15,
        slidesPerView: 3
      },
      767: {
        slidesPerView: 1,
        spaceBetween: 20,
      }
    }
  });
});


$('.gridSlider').each(function() {
  let self = $(this);

  new Swiper(self , {
    observer: true,
    observeParents: true,
    watchOverflow: true,
    slidesPerView: 2,
    spaceBetween: 20,
    navigation: {
      nextEl: self.find('.swiper-button-next'),
      prevEl: self.find('.swiper-button-prev')
    },
    pagination: {
      el: self.find('.swiper-pagination')
    },
    breakpoints: {
      767: {
        autoHeight: true,
        slidesPerView: 1
      }
    }
  });
});

$('.advantagesSlider').each(function() {
  let self = $(this);

  new Swiper(self , {
    observer: true,
    observeParents: true,
    watchOverflow: true,
    slidesPerView: 1,
    spaceBetween: 5
  });
});
