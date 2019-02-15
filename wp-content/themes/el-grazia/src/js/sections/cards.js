import {intersectionObserver} from '../components/utils';

let $sectionCards = $('.section--cards');

if ($sectionCards.length) {

  $sectionCards.each(function() {
    let self = $(this);

    intersectionObserver(
      this,
      function() {
        self.addClass('is-animated');
      }
    );
  });
}
