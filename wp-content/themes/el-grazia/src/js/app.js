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

import './components/jquery.splitter';
import './components/jquery.sTabs';
import './components/sliders';
import './components/gallery';
import './components/mobileCategory';
import './components/mask';
import './components/maps';
import './components/catalog';
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
      } else {
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

    $('.category__title').on('click', function(e) {
      if ($(window).width() > 1025) {
        e.preventDefault();

        let self = $(this);

        if (self.closest('.category').find('.subCategory__title').hasClass('is-active')) {
          self.closest('.category').find('.subCategory__title').removeClass('is-active');
          self.closest('.category').find('.subCategory__title').next().slideUp(400);
        }

        self.toggleClass('is-active');
        self.parent().find('.subCategory').slideToggle(400);
      }
    });

    $('.subCategory__title').on('click', function(e) {
      if ($(window).width() > 1025) {
        e.preventDefault();

        let self = $(this);

        self.toggleClass('is-active');
        self.next().slideToggle(400);
      }
    });

    $('.filter__title').on('click', function(e) {
      e.preventDefault();

      $(this).closest('.filter').toggleClass('is-active');
    });

    let $filterMobile = $('.filterMobile');

    $('.subCategory__title', $filterMobile).on('click', function(e) {
      e.preventDefault();
      $('.subCategory__title', $filterMobile).removeClass('is-active');
      $(this).addClass('is-active');
    });

    $('.categorySelect__label').on('click', function() {
      $(this).parent().toggleClass('is-active');
    });



  });
})(jQuery);
