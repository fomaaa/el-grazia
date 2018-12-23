// require('@fancyapps/fancybox');
import svg4everybody from 'svg4everybody';
import vhCheck from 'vh-check';
import $ from 'jquery';
import 'selectric';
import '@fancyapps/fancybox';

import {ACTIVE} from './_const';

import './sections/banner';
import './sections/about';
import './sections/products';
import './sections/cards';
import './sections/carousel';
import './sections/preview';
import './sections/mapAnimate';

import './lib/animatenumber';
import './lib/menu';

import './components/jquery.splitter';
import './components/jquery.sTabs';
import './components/sliders';
import './components/gallery';
import './components/mobileCategory';
import './components/mask';
import './components/catalog';
import './components/maps';
import {isMobile} from './components/utils';

window.$ = $;


(function($) {
  $(function() {

    $('body').addClass('page-ready');

    svg4everybody();

    $(window).on('scroll', function() {

      if ($(window).scrollTop() > $('.header').outerHeight()) {
        $('.headerSticky').addClass('is-active');
      } else {
        $('.headerSticky').removeClass('is-active');
      }
    });

    $('.js-select').selectric();

    $('.roadMap__item').on('click', function() {
      $(this).toggleClass('is-active');
    });

    $('.tabs').sTabs();

    let $body = $('body');

    $('.btn--burger').on('click', function(e) {
      e.preventDefault();

      $(this).toggleClass(ACTIVE);


      if (isMobile() && !$body.hasClass('no-scroll')) {
        $body.data('scroll-offset', $(window).scrollTop());

        // $body.css({
        //   'top': $body.data('scroll-offset')
        // });
      } else {
        // $body.css({
        //   'top': 0
        // });

        $('html, body').animate({
          scrollTop: $body.data('scroll-offset')
        }, 10);
      }

      $body.toggleClass('show-menu no-scroll');


    });

    vhCheck('browser-address-bar');

    $('.js-splitter').each(function() {

      $(this).splitter({
        columns: $(this).data('columns'),
        direction: $(this).data('direction') || 'vertical'
      });
    });


    $('.menuChild').menuAim({
      rowSelector: 'li',
      submenuDirection: 'right',
      activate: function(item) {
        $(item).addClass(ACTIVE);
      },
      deactivate: function(item) {
        $(item).removeClass(ACTIVE);
      }
    });

  });
})(jQuery);
