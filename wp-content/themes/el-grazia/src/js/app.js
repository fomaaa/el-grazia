// require('@fancyapps/fancybox');
import svg4everybody from 'svg4everybody';
import vhCheck from 'vh-check';
import $ from 'jquery';
import 'selectric';
import '@fancyapps/fancybox';

import {ACTIVE, BODY} from './_const';

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
        $('.headerSticky').addClass(ACTIVE);
      } else {
        $('.headerSticky').removeClass(ACTIVE);
      }
    });

    $('.js-select').selectric();

    $('.roadMap__item').on('click', function() {
      $(this).toggleClass(ACTIVE);
    });

    $('.tabs').sTabs();

    $('.btn--burger').on('click', function(e) {
      e.preventDefault();

      $(this).toggleClass(ACTIVE);

      if (isMobile() && !BODY.hasClass('no-scroll')) {
        BODY.data('scroll-offset', $(window).scrollTop());
      } else {
        $('html, body').animate({
          scrollTop: BODY.data('scroll-offset')
        }, 10);
      }

      BODY.toggleClass('show-menu no-scroll');


    });

    vhCheck('browser-address-bar');

    $('.js-splitter').each(function() {
      let self = $(this);

      self.splitter({
        columns: self.data('columns'),
        direction: self.data('direction') || 'vertical'
      });
    });


    $('.menu__parent').menuAim({
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
