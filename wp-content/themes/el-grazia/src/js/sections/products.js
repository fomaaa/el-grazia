import {intersectionObserver} from '../components/utils';

let $sectionProducts = $('.section--products');

if ($sectionProducts.length) {

  $sectionProducts.each(function() {
    let self = $(this);

    intersectionObserver(
      this,
      function() {
        self.addClass('is-animated');
      }
    );
  });
}
