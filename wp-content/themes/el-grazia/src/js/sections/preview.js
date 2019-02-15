import {intersectionObserver} from '../components/utils';

let $sectionPreview = $('.section--preview');

if ($sectionPreview.length) {

  $sectionPreview.each(function() {
    let self = $(this);

    intersectionObserver(
      this,
      function() {
        self.addClass('is-animated');
      }
    );
  });
}
