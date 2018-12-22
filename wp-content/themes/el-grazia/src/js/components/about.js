import {intersectionObserver} from './utils';

let $sectionAbout = $('.section--about');

if ($sectionAbout.length) {

  $sectionAbout.each(function() {
    let self = $(this);

    intersectionObserver(
      this,
      function() {
        self
          .find('.advantages__title')
          .each(function() {
            $(this)
              .find('.score')
              .prop('number', 1)
              .animateNumber(
                {
                  number: $(this)
                    .find('.score')
                    .data('score'),
                  numberStep: function(now, tween) {
                    var target = $(tween.elem),
                      rounded_now = Math.round(now);

                    target.text(now === tween.end ? rounded_now : rounded_now);
                  }
                },
                2000,
                'linear'
              );
          });
      }
    );
  });
}
