import {intersectionObserver} from '../components/utils';

let $sectionCarousel = $('.section--carousel');

if ($sectionCarousel.length) {

  $sectionCarousel.each(function() {
    let self = $(this);

    intersectionObserver(
      this,
      function() {
        self.addClass('is-animated');
      }
    );
  });
}
