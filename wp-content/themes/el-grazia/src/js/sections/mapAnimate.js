import {intersectionObserver} from '../components/utils';

let $mapAnimate = $('.mapAnimate');

if ($mapAnimate.length) {

  $mapAnimate.each(function() {
    let self = $(this);

    intersectionObserver(
      this,
      function() {
        self.addClass('is-animated');
      }
    );
  });
}
