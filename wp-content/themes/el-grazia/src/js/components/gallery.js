import Swiper from 'swiper/dist/js/swiper.js';

const interleaveOffset = 0.55;

$('.js-gallery').each(function() {
  let self = $(this);
  let $goodMain = self.find('.js-gallery-main');
  let $goodThumbs = self.find('.js-gallery-thumbs');
  let $thumbsSlides = $goodThumbs.find('.swiper-slide');

  let goodThumbs = new Swiper($goodThumbs, {
    observer: true,
    observeParents: true,
    // direction: 'vertical',
    slidesPerView: $goodThumbs.data('items') || 5,
    spaceBetween: 3,
    slideToClickedSlide: true,
    centeredSlides: true,
    navigation: {
      nextEl: $goodThumbs.parent().find('.swiper-button-next'),
      prevEl: $goodThumbs.parent().find('.swiper-button-prev')
    },
    on: {
      slideChange: function() {
        goodMain.slideTo(this.activeIndex);
        $goodThumbs.find('.swiper-slide').removeClass('is-active');
        $thumbsSlides.eq(this.activeIndex).addClass('is-active');
      },
    }
  });

  let goodMain = new Swiper($goodMain, {
    observer: true,
    observeParents: true,
    slidesPerView: 1,
    autoplay: {
      delay: 4000
    },
    speed: 700,
    watchSlidesProgress: true,
    watchSlidesVisibility: true,
    on: {
      init: function() {
        $thumbsSlides.eq(this.activeIndex).addClass('is-active');
      },
      slideChange: function() {
        goodThumbs.slideTo(this.activeIndex);
        $goodThumbs.find('.swiper-slide').removeClass('is-active');
        $thumbsSlides.eq(this.activeIndex).addClass('is-active');
      },
      progress: function() {
        let swiper = this;
        for (let i = 0; i < swiper.slides.length; i++) {
          let slideProgress = swiper.slides[i].progress;
          let innerOffset = swiper.width * interleaveOffset;
          let innerTranslate = slideProgress * innerOffset;
          swiper.slides[i].querySelector('.photo').style.transform =
            'translate3d(' + innerTranslate + 'px, 0, 0)';

          // swiper.slides[i].querySelector('.banner > .container').style.transform =
          //   'translate3d(' + innerTranslate / 2 + 'px, 0, 0)';
        }
      },
      touchStart: function() {
        let swiper = this;
        for (let i = 0; i < swiper.slides.length; i++) {
          swiper.slides[i].style.transition = '';
        }
      },
      setTransition: function(speed) {
        let swiper = this;
        for (let i = 0; i < swiper.slides.length; i++) {
          swiper.slides[i].style.transition = speed + 'ms';
          swiper.slides[i].querySelector('.photo').style.transition =
            speed + 'ms';

          // swiper.slides[i].querySelector('.banner > .container').style.transition =
          //   speed + 'ms';
        }
      }
    }
  });

  $thumbsSlides.on('click', function() {
    let $thumbsSlide = $(this),
      index = $thumbsSlides.index($thumbsSlide);
    goodMain.slideTo(index);

    $thumbsSlides.removeClass('is-active');
    $thumbsSlide.addClass('is-active');
  });
});
