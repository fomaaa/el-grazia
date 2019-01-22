<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */
global $product;
defined( 'ABSPATH' ) || exit;
?>
      <div class="pageWrapper">
        <div class="breadcrumbs">
          <div class="container">
          <?php woocommerce_breadcrumb(
              array(
              'before' => '<li class="breadcrumbsList__item">',
              'after' => '</li>',
              'wrap_before' => '<ul class="breadcrumbsList">',
              'wrap_after' => '</ul>',
              'delimiter' => ''
            )
          ); ?>
          </div>
        </div>
        <div class="section section--goodCard">
          <div class="container section__inner">
            <div class="section__left hiddenMobile">
              <div class="goodGallery js-gallery">
                <div class="goodGallery__main swiper-container js-gallery-main">
                  <div class="swiper-wrapper">
                  	<?php 
                  	$block = get_field("slider");
                  	if ($block):
                  		foreach($block as $item) :
                  	?>
	                    <div class="swiper-slide">
	                      <div class="photo">
	                        <img src="<?php echo $item['url'] ?>" alt="<?php echo $item['alt'] ?>" title="<?php echo $item['title'] ?>">
	                      </div>
	                    </div>
                  		
                  	<?php endforeach; endif; ?>
                  </div>
                </div>
                <div class="goodGallery__thumbs">
                  <div class="swiper-container js-gallery-thumbs" data-items="3">
                    <div class="swiper-wrapper">            	
          					<?php 
          					if ($block):
          						foreach($block as $item) :
          					?>
	                      <div class="swiper-slide">
	                        <div class="photo" style="background-image: url('<?php echo $item['sizes']['thumbnail'] ?>');"></div>
	                      </div>
						
					           <?php endforeach; endif; ?>
            		

                    </div>
                  </div>
                  <div class="swiper-button swiper-button-prev button--default">
                    <svg class="icon icon-arrow_small_left">
                      <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-arrow_small_left"></use>
                    </svg>
                  </div>
                  <div class="swiper-button swiper-button-next button--default">
                    <svg class="icon icon-arrow_small_right">
                      <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-arrow_small_right"></use>
                    </svg>
                  </div>
                </div>
              </div>
              <?php if (get_field('face') || get_field('neck') || get_field('neckline')) : ?>
              <div class="applicationArea">
                <div class="applicationArea__figure" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/woman.png');"></div>
                <div class="applicationArea__title">Область <br>Применения:</div>
                <ul class="applicationArea__list">
                  <?php if (get_field('face')) : ?>
                  <li class="applicationArea__item">
                    <span>Лицо</span>
                    <div class="applicationArea__hover">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 438 688" style="enable-background:new 0 0 438 688;" xml:space="preserve">
                        <style type="text/css">
                          .st0000 {
                            opacity: 0.4;
                            fill-rule: evenodd;
                            clip-rule: evenodd;
                            fill: #0CBCEE;
                          }

                        </style>
                        <path class="st0000" d="M289.6,16.9C289.6,16.9,289.6,16.9,289.6,16.9c-3.5-3.5-7.4-6.4-11.6-8.7C263.3,0.4,245.7-2,229.5,1.7   c-11.5,3.2-22.3,9.6-29.9,18.9c-8,10.6-10,24.4-9.6,37.4c-0.2,22,6,43.6,15.9,63c6.4,10.6,13.4,21.5,24.2,28.2   c0,0.3,0.1,0.6,0.1,0.9c1,0.1,2,0.1,3,0.1c35.9,0,65-39.9,65-89C298.2,45.1,295.1,30,289.6,16.9z" />
                      </svg>
                    </div>
                  </li>
              	  <?php endif; ?>
              	  <?php if (get_field('neck')) : ?>
                  <li class="applicationArea__item">
                    <span>Шея</span>
                    <div class="applicationArea__hover">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 438 688" style="enable-background:new 0 0 438 688;" xml:space="preserve">
                        <style type="text/css">
                          .st0000 {
                            opacity: 0.4;
                            fill-rule: evenodd;
                            clip-rule: evenodd;
                            fill: #0CBCEE;
                          }

                        </style>
                        <path class="st0000" d="M296.9,161c-1-6-1.8-12.1-2-18.1c-28.4,18.6-50.6,17.2-64,13c1.2,10.2,1.6,20.6-1.8,30.3   c-0.8,2.4-2,4.6-3.4,6.7c36.4,35.6,71.7,5.6,82.9-6C301.7,180.2,298.8,170.3,296.9,161z" />
                      </svg>
                    </div>
                  </li>
	              <?php endif ?>
	              <?php if (get_field('neckline')) : ?>
                  <li class="applicationArea__item">
                    <span>Декольте</span>
                    <div class="applicationArea__hover">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 438 688" style="enable-background:new 0 0 438 688;" xml:space="preserve">
                        <style type="text/css">
                          .st0000 {
                            opacity: 0.4;
                            fill-rule: evenodd;
                            clip-rule: evenodd;
                            fill: #0CBCEE;
                          }

                        </style>
                        <path class="st0000" d="M400.6,211.5c-12-3.1-24.5-2.5-36.7-4.1c-17-2-33.8-7-48.5-15.8c-44.6,39.8-79.3,20.7-94.8,7.3   c-4.9,4.5-11.1,7.7-17.4,9.4c-21,5.8-42.5,9.8-63.6,15.4c-1.4,0.3-2.8,0.7-4.2,1.1c10.6,17.5,14.9,49.6,17.5,67.7   c2.5,1.1,3.5,3.9,4.7,6.1c1.5,3,3,6.1,4.4,9.2c107.8,33.6,185.9,5.9,207.6-5.7c1.7-5.9,3.7-11.6,5.9-17.3c0.1,0,0.2,0.1,0.4,0.2   c1.8-33.6,13.8-57.7,25.1-73.3C400.8,211.6,400.7,211.6,400.6,211.5z" />
                      </svg>
                    </div>
                  </li>
                  <?php endif ?>

                  <?php if (get_field('hand')) : ?>
                  <li class="applicationArea__item">
                    <span>Руки</span>
                    <div class="applicationArea__hover">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 438 688" style="enable-background:new 0 0 438 688;" xml:space="preserve">
                        <style type="text/css">
                          .st0 {
                            opacity: 0.4;
                            fill-rule: evenodd;
                            clip-rule: evenodd;
                            fill: #0CBCEE;
                          }

                        </style>
                        <g id="Layer_12">
                          <path class="st0" d="M169.3,473.8c1.6-3.1,2.8-6.4,3.9-9.2c-4.2-2.9-8.4-5.8-12.6-8.8c3.2-3.7,6.7-8.5,6.7-13.4   c-0.1-0.1-0.1-0.3-0.1-0.4v-0.8c-0.1-1.2-0.5-2.3-1.1-3.5c-1.4,0.3-3.1,0.1-4,1.4c-4.6,4.7-7.8,11.2-13.9,14.1   c-1.2,1.2-1.8,2.8-2.8,4c-2,1.2-4.8,0.8-6.4,2.7c-1.2,1.2-2.4,2.4-4,3.2c-6.5,3.3-13,6.6-20,8.7c-3,0.9-6.7,1.6-9.1-0.9   c-2.2-1.7-4.3-3.6-6.3-5.5c-7.5,5.3-11.9,13-15.4,21.7c3.4,2.6,8.7,6.9,11.2,10.5c2.9,3.5,5.5,8.2,10.4,9.1   c7.5,1.1,14.8-2.2,20.8-6.5c4.3,5.4,8.1,11.1,12.7,16.2c1.5-1.4,3.2-3.2,5-5.2c0,0,0,0,0,0c0,0,0,0,0,0c-0.1-0.1-0.2-0.2-0.3-0.3   c0,0,0,0,0,0c-3.7-5.3-7-10.8-10.4-16.4c2.3-1.9,4.7-3.7,7.1-5.5c4.2,3.1,8.5,6.2,12.7,9.3c0.2,0.1,0.4,0.2,0.5,0.3   c4.5-6.4,9-13.5,12.9-20.4c-2.5-2.2-5-4.6-7.5-6.9c0.5-0.5,1.3-1.6,1.8-2.2C164,470.7,166.7,472.2,169.3,473.8z M161.5,487.4   c-0.8,1.2-1.7,2.4-2.5,3.7c-3.5-3.3-7.1-6.6-10.6-9.9c0.4-0.8,1.1-2.3,1.5-3.1C153.7,481.1,157.6,484.2,161.5,487.4z" />
                          <path class="st0" d="M403.5,661.9c-1.5,8.6-0.5,17.4-0.9,26.1h-53.9c5-5.9,10.9-10.9,17.3-15.2c4.2-3.1,7.4-7.6,8.5-12.7   c0.5-2.3,1.9-9.7,2.3-12.1c9.6-5.8,19.4-4.6,28.9,1C405,653.3,404.2,657.6,403.5,661.9z" />
                        </g>
                      </svg>
                    </div>
                  </li>
				  <?php endif ?>   

				  <?php if (get_field('head')) : ?>
				  	<li class="applicationArea__item">
                    <span>Голова</span>
                    <div class="applicationArea__hover">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 438 688" style="enable-background:new 0 0 438 688;" xml:space="preserve">
                        <style type="text/css">
                          .st0 {
                            opacity: 0.4;
                            fill-rule: evenodd;
                            clip-rule: evenodd;
                            fill: #0CBCEE;
                          }

                        </style>
                        <g id="Layer_13">
                          <path class="st0" d="M310.6,78.6C282.4-7.9,214.1,19.2,195,28.8c0.3-0.6,0.6-1.2,0.9-1.9c2.3-5.1,6.1-9.4,10.6-12.8   c4.8-4.6,10.7-7.6,16.8-9.9c1.5-0.7,3.1-1.3,4.7-1.7c7.2-1.8,14.8-2.9,22.2-1.8c4.9,0,9.6,1.4,14.4,2.5   c13.5,3.5,25.8,12.2,32.7,24.5c2.3,2.8,4,5.9,5.3,9.3c0.2,0.7,0.4,1.3,0.7,1.9c3.2,6.3,4.9,13.2,6,20.1c1,4.3,0.8,8.7,1,13   C310.9,74.1,310.9,76.3,310.6,78.6z" />
                        </g>
                      </svg>
                    </div>
                  </li>
				  <?php endif ?>
				  				  
				  <?php if (get_field('body')) : ?>
				  	<li class="applicationArea__item">
                    <span>Тело</span>
                    <div class="applicationArea__hover">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 438 688" style="enable-background:new 0 0 438 688;" xml:space="preserve">
                        <style type="text/css">
                          .st0 {
                            opacity: 0.4;
                            fill-rule: evenodd;
                            clip-rule: evenodd;
                            fill: #0CBCEE;
                          }

                        </style>
                        <g id="Layer_10">
                          <path class="st0" d="M437.2,348c-0.9-23.6-3.5-47.2-7.5-70.5c-3.2-17.5-7.1-35.1-15.1-51.1c-1.3-2.3-2.7-4.7-4.3-6.9   c-0.4-0.5-0.8-1-1.2-1.5c-0.1-0.1-0.1-0.2-0.2-0.3c-0.1-0.2-0.3-0.3-0.4-0.5c-0.3-0.3-0.5-0.6-0.8-0.9c-0.6-0.6-1.3-1.3-2-1.8   c-0.2-0.1-0.3-0.3-0.5-0.4c-0.2-0.1-0.3-0.3-0.5-0.4c-0.3-0.2-0.6-0.4-0.9-0.6c-0.7-0.5-1.5-0.9-2.3-1.2c-0.2-0.1-0.4-0.2-0.5-0.2   c0,0,0,0-0.1,0c-0.1,0-0.1,0-0.2-0.1c-12-3.1-24.5-2.5-36.7-4.1c-0.8-0.1-1.6-0.2-2.4-0.3c-0.3,0-0.7-0.1-1.1-0.2c0,0-0.1,0-0.1,0   c-0.9-0.1-1.8-0.3-2.7-0.4c-0.8-0.1-1.6-0.3-2.4-0.4c0,0-0.1,0-0.2,0c-0.5-0.1-1.1-0.2-1.6-0.3c-0.6-0.1-1.2-0.2-1.7-0.3l-1.1-0.2   c-0.8-0.2-1.5-0.3-2.3-0.5c0,0-0.1,0-0.2,0c-1-0.3-2.1-0.5-3.1-0.8c-0.6-0.2-1.3-0.3-1.9-0.5c-0.5-0.1-0.9-0.3-1.4-0.4   c-1-0.3-1.9-0.6-2.9-0.9c-0.5-0.2-1-0.3-1.5-0.5c-0.6-0.2-1.1-0.4-1.7-0.6c-0.5-0.2-0.9-0.3-1.4-0.5c-2.6-0.9-5.2-2-7.8-3.1   c-0.5-0.2-1.1-0.5-1.6-0.7c-0.5-0.3-1.1-0.5-1.6-0.8c-0.5-0.2-1-0.5-1.4-0.7c-1.1-0.5-2.2-1.1-3.3-1.7c-0.5-0.3-1-0.6-1.5-0.9   c-0.4-0.2-0.9-0.5-1.3-0.8c-0.1-0.1-0.2-0.1-0.3-0.2c0,0-0.1,0-0.1,0c-0.1,0-0.2-0.1-0.2-0.1c-44.5,40-79.1,21.1-94.9,7.7   c-0.2,0.2-0.4,0.4-0.6,0.5c-0.3,0.3-0.6,0.5-1,0.8c-0.3,0.3-0.6,0.5-1,0.8c-0.2,0.2-0.5,0.3-0.7,0.5c-0.3,0.2-0.5,0.4-0.8,0.5   c-0.3,0.2-0.6,0.4-0.9,0.6c-0.3,0.2-0.6,0.4-1,0.6c-0.3,0.2-0.6,0.4-1,0.6c-1.7,1-3.4,1.8-5.2,2.5c-0.3,0.1-0.6,0.2-0.9,0.3   c-0.3,0.1-0.7,0.3-1,0.4c-1,0.4-2.1,0.7-3.2,1c-21,5.8-42.5,9.8-63.6,15.4c-0.7,0.2-1.4,0.4-2.1,0.5c-0.7,0.2-1.4,0.4-2.1,0.6   c-0.5,0.1-0.9,0.3-1.4,0.4c-0.5,0.1-0.9,0.3-1.4,0.4c-0.9,0.3-1.8,0.6-2.7,0.9c-0.4,0.2-0.9,0.3-1.3,0.5c-0.4,0.1-0.7,0.3-1.1,0.4   c-1.9,0.8-3.7,1.6-5.4,2.6c-0.5,0.3-1,0.5-1.4,0.8c-0.1,0-0.1,0.1-0.2,0.1c-0.4,0.2-0.8,0.5-1.2,0.8c-0.1,0.1-0.2,0.1-0.3,0.2   c-0.4,0.3-0.8,0.5-1.2,0.8c0,0,0,0-0.1,0.1c-0.3,0.2-0.7,0.5-1,0.8c-0.6,0.4-1.1,0.9-1.7,1.3c-10,8.4-17.9,18.8-25.8,29.1   c-13,17.5-25.4,35.4-38.5,52.8c-14.8,19.3-32.5,36.2-47,55.7c-2.8,3.7-4.7,8.5-3.1,13.2c4.3,15.1,11.7,29.2,20.1,42.4   c14.3,22.4,36.2,38.2,57.1,54c2.7,2.2,5.7,4.2,8.5,6.4c3.4,2.6,6.7,5.4,9.3,9c2.9,3.5,5.5,8.2,10.4,9.1c7.5,1.1,14.8-2.2,20.8-6.5   c4.3,5.4,8.1,11.1,12.7,16.2c0.1,0.1,0.2,0.2,0.3,0.3c-8.7,11.1-14.1,24.2-18.4,37.5c-6.6,16.5-11.4,33.7-13.6,51.3   c-1.3,7.4-2,15-2.5,22.5c-0.6,8,0.1,16-0.5,24c-0.1,12.1,1.1,24.1,2,36.1h106.3c0.5-7.7,0.6-15.5,0.6-23.3c4.9,2,9.9,3.4,15.2,4.2   c-0.1,6.4,0,12.7-0.3,19.1h106.4c4.6-23.7,8-47.7,8.4-71.9c2.3-13.9,4.1-28,3.1-42c-1.3-18.4-3.9-36.7-4.9-55   c-0.5-11.4-1.6-22.9,0.8-34.1c6.3-34.5,16.2-68.3,21.9-102.9c0.4-3.4,2-6.5,3.1-9.7c2.6-7.1,3.2-14.7,3.4-22.2   c-0.5-11.5-6.5-22.5-4.4-34.1c0.2-1,0.4-2,0.7-3c0.3-1.4,0.6-2.7,0.9-4.1c0,0,0,0,0-0.1c0,0,0,0,0,0c0-0.1,0-0.1,0-0.2   c0.1-0.5,0.2-0.9,0.4-1.4c0.1-0.5,0.3-1.1,0.4-1.6c0.3-1.1,0.6-2.3,0.9-3.4c0,0,0,0,0,0c0.2-0.8,0.5-1.6,0.7-2.4   c0.3-0.8,0.5-1.6,0.8-2.4c0.3-1,0.6-2,1-2.9c0.3-0.8,0.5-1.5,0.8-2.3c0.2-0.5,0.4-1,0.5-1.6c0.7-1.9,1.4-3.8,2.1-5.7   c0.1,0,0.2,0.1,0.4,0.2c0.6,0.3,1.1,0.5,1.6,0.9c0,0,0,0,0,0c0.1,0.1,0.2,0.1,0.3,0.2c0,0,0,0,0,0c0.1,0,0.1,0.1,0.1,0.1   c0,0,0,0,0,0c0.1,0.1,0.2,0.1,0.3,0.2c0,0,0,0,0,0c0.1,0.1,0.3,0.2,0.4,0.4c0.3,0.3,0.5,0.6,0.7,1c3,5.3,4,11.4,5.3,17.3   c4.5,24.3,5.3,49.2,5.5,73.9c0.6,35.3,4.2,70.6,1.8,105.9c-2.1,23.8-7.1,47.2-8.7,71c-1.3,16.4-0.6,32.9-2.3,49.3   c-1.6,16-1.9,32.2-4.8,48c-0.4,2.3-0.9,4.7-1.5,7c-1.2,5.1-4.3,9.6-8.5,12.7c-6.4,4.3-12.3,9.3-17.3,15.2h53.9   c0.5-8.7-0.5-17.5,0.9-26.1c0.7-4.3,1.4-8.6,2.3-12.9c4.3-22.3,10.3-44.3,16-66.3c4.7-18.3,8.2-37,9.4-55.9   c1.5-21.3-0.1-42.6,0.7-63.9C433.3,424.6,440.3,386.4,437.2,348z M144.1,510.8c-3.7-5.3-7-10.8-10.4-16.4c2.3-1.9,4.7-3.7,7.1-5.5   c4.3,3.1,8.5,6.2,12.7,9.4C150.5,502.5,147.3,506.6,144.1,510.8z M159,491c-3.5-3.3-7.1-6.6-10.6-9.9c0.4-0.8,1.1-2.3,1.5-3.1   c3.8,3.2,7.7,6.3,11.6,9.4C160.6,488.6,159.8,489.8,159,491z M167,478.2C167,478.2,167,478.2,167,478.2c-2.6-2.3-5.1-4.6-7.5-7   c0.5-0.5,1.3-1.6,1.8-2.2c2.7,1.6,5.3,3.1,8,4.7c0,0,0,0,0,0C168.6,475.3,167.8,476.7,167,478.2z M179.4,435.2   c-0.8,4.9-1.5,9.9-2.4,14.8c-0.9,5-2,9.9-3.7,14.7c-4.2-2.9-8.4-5.8-12.6-8.8c3.2-3.7,6.7-8.5,6.7-13.4c0-0.4,0-0.7-0.1-1.1v0   c-0.1-1.2-0.5-2.3-1.1-3.5c-1.4,0.3-3.1,0.1-4,1.4c-4.6,4.7-7.8,11.2-13.9,14.1c-1.2,1.2-1.8,2.8-2.8,4c-2,1.2-4.8,0.8-6.4,2.7   c-1.2,1.2-2.4,2.4-4,3.2c-6.5,3.3-13,6.6-20,8.7c-3,0.9-6.7,1.6-9.1-0.9c-2.2-1.7-4.3-3.6-6.3-5.5c-13.7-13.3-22.8-30.6-34.6-45.5   c-7-9-14.4-17.8-20.3-27.7c-1.1-2.2-2.7-4.7-1.9-7.2c1.5-3.1,4.3-5.3,6.7-7.6c10-9,18.8-19.2,28.9-28.1   c13.4-11.5,24.8-25.2,37.4-37.5c6.6-6.5,13.4-13,21.6-17.5c4.6-2.5,10.3-4.3,15.3-2c0,0,0.1,0,0.1,0.1c0.2,0.1,0.3,0.2,0.5,0.2   c0.1,0.1,0.3,0.2,0.4,0.3c0.1,0.1,0.3,0.2,0.4,0.3c0.1,0.1,0.2,0.2,0.3,0.3c0,0,0,0,0,0c0.1,0.1,0.3,0.3,0.4,0.4   c0.2,0.2,0.3,0.4,0.5,0.6c0.1,0.1,0.2,0.3,0.3,0.4c0.2,0.3,0.4,0.6,0.5,0.9c0.5,0.9,0.9,1.8,1.4,2.7c0.8,1.5,1.5,3,2.3,4.6   c0.4,0.8,0.7,1.5,1.1,2.3c0,0.1,0.1,0.1,0.1,0.2c0.3,0.7,0.7,1.4,1,2.1c0.3,0.6,0.5,1.2,0.8,1.8c0.3,0.6,0.5,1.2,0.8,1.8   c0.2,0.5,0.4,1,0.6,1.6c0.3,0.7,0.5,1.4,0.7,2.1c0.1,0.2,0.2,0.5,0.2,0.7c0.1,0.2,0.2,0.5,0.2,0.7c0.2,0.5,0.3,1,0.4,1.5   c0,0,0,0.1,0,0.1c0,0.1,0,0.1,0,0.2c0.1,0.4,0.2,0.8,0.3,1.1c0.1,0.3,0.1,0.6,0.2,0.9c0.1,0.5,0.2,1,0.3,1.5   c2.4,13.4-4.3,26.7-1.7,40.1c1,6.9,4.7,12.9,8.3,18.7C181.8,397.4,181.9,417,179.4,435.2z" />
                        </g>
                      </svg>
                    </div>
                  </li>
				  <?php endif ?>

                </ul>
              </div>
              <?php endif; ?>
            </div>
            <div class="section__right">
              <div class="goodCard__head">
                <h1><?php get_h1() ?> </h1>
                <h3><?php the_field('subtitle') ?></h3>
              </div>
              <div class="goodGallery js-gallery hiddenTablet">
                <div class="goodGallery__main swiper-container js-gallery-main">
                  <div class="swiper-wrapper">
                  	<?php 
                  	$block = get_field("slider");
                  	if ($block):
                  		foreach($block as $item) :
                  	?>
	                    <div class="swiper-slide">
	                      <div class="photo">
	                        <img src="<?php echo $item['url'] ?>" alt="">
	                      </div>
	                    </div>
                  		
                  	<?php endforeach; endif; ?>
                  </div>
                </div>
                <div class="goodGallery__thumbs">
                  <div class="swiper-container js-gallery-thumbs" data-items="3">
                    <div class="swiper-wrapper">
          					<?php 
          					if ($block):
          						foreach($block as $item) :
          					?>
	                      <div class="swiper-slide">
	                        <div class="photo" style="background-image: url('<?php echo $item['sizes']['thumbnail'] ?>');"></div>
	                      </div>
						
					           <?php endforeach; endif; ?>
                    </div>
                  </div>
                  <div class="swiper-button swiper-button-prev button--default">
                    <svg class="icon icon-arrow_small_left">
                      <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-arrow_small_left"></use>
                    </svg>
                  </div>
                  <div class="swiper-button swiper-button-next button--default">
                    <svg class="icon icon-arrow_small_right">
                      <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-arrow_small_right"></use>
                    </svg>
                  </div>
                </div>
              </div>
              <article>
					       <?php the_content(); ?>
              </article>
              <?php if (!empty(get_field('сomposition')['0'])) : ?>
              <div class="goodComposition">
                <div class="goodComposition__title"> Состав: </div>
                <ul class="goodComposition__list js-splitter" data-columns="2">
                	<?php 
                	$block = get_field("сomposition");
                	if ($block):
                		foreach($block as $item) :
                	?>
                    	<li> <?php echo $item['item'] ?> </li>
                		
                	<?php endforeach; endif; ?>
                </ul>
              </div>
              <?php endif; ?>
              <?php if (get_field('active')) : ?>
                <div class="goodInfo">
                  <div class="goodInfo__title"> Активные ингридиенты: </div>
                  <div class="goodInfo__body">
   					        <?php the_field("active"); ?>
                  </div>
                </div>
              <?php endif; ?>
               <?php if (get_field('face') || get_field('neck') || get_field('neckline')) : ?>
              <div class="applicationArea hiddenTablet">
                <div class="applicationArea__figure" style="background-image: url('<?php echo get_template_directory_uri() ?>/img/woman.png');"></div>
                <div class="applicationArea__title">Область <br>Применения:</div>
                <ul class="applicationArea__list">
                <?php if (get_field('face')) : ?>
                  <li class="applicationArea__item">
                    <span>Лицо</span>
                    <div class="applicationArea__hover">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 438 688" style="enable-background:new 0 0 438 688;" xml:space="preserve">
                        <style type="text/css">
                          .st0000 {
                            opacity: 0.4;
                            fill-rule: evenodd;
                            clip-rule: evenodd;
                            fill: #0CBCEE;
                          }

                        </style>
                        <path class="st0000" d="M289.6,16.9C289.6,16.9,289.6,16.9,289.6,16.9c-3.5-3.5-7.4-6.4-11.6-8.7C263.3,0.4,245.7-2,229.5,1.7   c-11.5,3.2-22.3,9.6-29.9,18.9c-8,10.6-10,24.4-9.6,37.4c-0.2,22,6,43.6,15.9,63c6.4,10.6,13.4,21.5,24.2,28.2   c0,0.3,0.1,0.6,0.1,0.9c1,0.1,2,0.1,3,0.1c35.9,0,65-39.9,65-89C298.2,45.1,295.1,30,289.6,16.9z" />
                      </svg>
                    </div>
                  </li>
                <?php endif ?>
                  <?php if (get_field('neck')) : ?>
                  <li class="applicationArea__item">
                    <span>Шея</span>
                    <div class="applicationArea__hover">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 438 688" style="enable-background:new 0 0 438 688;" xml:space="preserve">
                        <style type="text/css">
                          .st0000 {
                            opacity: 0.4;
                            fill-rule: evenodd;
                            clip-rule: evenodd;
                            fill: #0CBCEE;
                          }

                        </style>
                        <path class="st0000" d="M296.9,161c-1-6-1.8-12.1-2-18.1c-28.4,18.6-50.6,17.2-64,13c1.2,10.2,1.6,20.6-1.8,30.3   c-0.8,2.4-2,4.6-3.4,6.7c36.4,35.6,71.7,5.6,82.9-6C301.7,180.2,298.8,170.3,296.9,161z" />
                      </svg>
                    </div>
                  </li>
                  <?php endif ?>
                  <?php if (get_field('neckline')) : ?>
                  <li class="applicationArea__item">
                    <span>Декольте</span>
                    <div class="applicationArea__hover">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 438 688" style="enable-background:new 0 0 438 688;" xml:space="preserve">
                        <style type="text/css">
                          .st0000 {
                            opacity: 0.4;
                            fill-rule: evenodd;
                            clip-rule: evenodd;
                            fill: #0CBCEE;
                          }

                        </style>
                        <path class="st0000" d="M400.6,211.5c-12-3.1-24.5-2.5-36.7-4.1c-17-2-33.8-7-48.5-15.8c-44.6,39.8-79.3,20.7-94.8,7.3   c-4.9,4.5-11.1,7.7-17.4,9.4c-21,5.8-42.5,9.8-63.6,15.4c-1.4,0.3-2.8,0.7-4.2,1.1c10.6,17.5,14.9,49.6,17.5,67.7   c2.5,1.1,3.5,3.9,4.7,6.1c1.5,3,3,6.1,4.4,9.2c107.8,33.6,185.9,5.9,207.6-5.7c1.7-5.9,3.7-11.6,5.9-17.3c0.1,0,0.2,0.1,0.4,0.2   c1.8-33.6,13.8-57.7,25.1-73.3C400.8,211.6,400.7,211.6,400.6,211.5z" />
                      </svg>
                    </div>
                  </li>
                  <?php endif ?>
                                    <?php if (get_field('hand')) : ?>
                  <li class="applicationArea__item">
                    <span>Руки</span>
                    <div class="applicationArea__hover">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 438 688" style="enable-background:new 0 0 438 688;" xml:space="preserve">
                        <style type="text/css">
                          .st0 {
                            opacity: 0.4;
                            fill-rule: evenodd;
                            clip-rule: evenodd;
                            fill: #0CBCEE;
                          }

                        </style>
                        <g id="Layer_12">
                          <path class="st0" d="M169.3,473.8c1.6-3.1,2.8-6.4,3.9-9.2c-4.2-2.9-8.4-5.8-12.6-8.8c3.2-3.7,6.7-8.5,6.7-13.4   c-0.1-0.1-0.1-0.3-0.1-0.4v-0.8c-0.1-1.2-0.5-2.3-1.1-3.5c-1.4,0.3-3.1,0.1-4,1.4c-4.6,4.7-7.8,11.2-13.9,14.1   c-1.2,1.2-1.8,2.8-2.8,4c-2,1.2-4.8,0.8-6.4,2.7c-1.2,1.2-2.4,2.4-4,3.2c-6.5,3.3-13,6.6-20,8.7c-3,0.9-6.7,1.6-9.1-0.9   c-2.2-1.7-4.3-3.6-6.3-5.5c-7.5,5.3-11.9,13-15.4,21.7c3.4,2.6,8.7,6.9,11.2,10.5c2.9,3.5,5.5,8.2,10.4,9.1   c7.5,1.1,14.8-2.2,20.8-6.5c4.3,5.4,8.1,11.1,12.7,16.2c1.5-1.4,3.2-3.2,5-5.2c0,0,0,0,0,0c0,0,0,0,0,0c-0.1-0.1-0.2-0.2-0.3-0.3   c0,0,0,0,0,0c-3.7-5.3-7-10.8-10.4-16.4c2.3-1.9,4.7-3.7,7.1-5.5c4.2,3.1,8.5,6.2,12.7,9.3c0.2,0.1,0.4,0.2,0.5,0.3   c4.5-6.4,9-13.5,12.9-20.4c-2.5-2.2-5-4.6-7.5-6.9c0.5-0.5,1.3-1.6,1.8-2.2C164,470.7,166.7,472.2,169.3,473.8z M161.5,487.4   c-0.8,1.2-1.7,2.4-2.5,3.7c-3.5-3.3-7.1-6.6-10.6-9.9c0.4-0.8,1.1-2.3,1.5-3.1C153.7,481.1,157.6,484.2,161.5,487.4z" />
                          <path class="st0" d="M403.5,661.9c-1.5,8.6-0.5,17.4-0.9,26.1h-53.9c5-5.9,10.9-10.9,17.3-15.2c4.2-3.1,7.4-7.6,8.5-12.7   c0.5-2.3,1.9-9.7,2.3-12.1c9.6-5.8,19.4-4.6,28.9,1C405,653.3,404.2,657.6,403.5,661.9z" />
                        </g>
                      </svg>
                    </div>
                  </li>
				  <?php endif ?>   

				  <?php if (get_field('head')) : ?>
				  	<li class="applicationArea__item">
                    <span>Голова</span>
                    <div class="applicationArea__hover">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 438 688" style="enable-background:new 0 0 438 688;" xml:space="preserve">
                        <style type="text/css">
                          .st0 {
                            opacity: 0.4;
                            fill-rule: evenodd;
                            clip-rule: evenodd;
                            fill: #0CBCEE;
                          }

                        </style>
                        <g id="Layer_13">
                          <path class="st0" d="M310.6,78.6C282.4-7.9,214.1,19.2,195,28.8c0.3-0.6,0.6-1.2,0.9-1.9c2.3-5.1,6.1-9.4,10.6-12.8   c4.8-4.6,10.7-7.6,16.8-9.9c1.5-0.7,3.1-1.3,4.7-1.7c7.2-1.8,14.8-2.9,22.2-1.8c4.9,0,9.6,1.4,14.4,2.5   c13.5,3.5,25.8,12.2,32.7,24.5c2.3,2.8,4,5.9,5.3,9.3c0.2,0.7,0.4,1.3,0.7,1.9c3.2,6.3,4.9,13.2,6,20.1c1,4.3,0.8,8.7,1,13   C310.9,74.1,310.9,76.3,310.6,78.6z" />
                        </g>
                      </svg>
                    </div>
                  </li>
				  <?php endif ?>
				  				  
				  <?php if (get_field('body')) : ?>
				  	<li class="applicationArea__item">
                    <span>Тело</span>
                    <div class="applicationArea__hover">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 438 688" style="enable-background:new 0 0 438 688;" xml:space="preserve">
                        <style type="text/css">
                          .st0 {
                            opacity: 0.4;
                            fill-rule: evenodd;
                            clip-rule: evenodd;
                            fill: #0CBCEE;
                          }

                        </style>
                        <g id="Layer_10">
                          <path class="st0" d="M437.2,348c-0.9-23.6-3.5-47.2-7.5-70.5c-3.2-17.5-7.1-35.1-15.1-51.1c-1.3-2.3-2.7-4.7-4.3-6.9   c-0.4-0.5-0.8-1-1.2-1.5c-0.1-0.1-0.1-0.2-0.2-0.3c-0.1-0.2-0.3-0.3-0.4-0.5c-0.3-0.3-0.5-0.6-0.8-0.9c-0.6-0.6-1.3-1.3-2-1.8   c-0.2-0.1-0.3-0.3-0.5-0.4c-0.2-0.1-0.3-0.3-0.5-0.4c-0.3-0.2-0.6-0.4-0.9-0.6c-0.7-0.5-1.5-0.9-2.3-1.2c-0.2-0.1-0.4-0.2-0.5-0.2   c0,0,0,0-0.1,0c-0.1,0-0.1,0-0.2-0.1c-12-3.1-24.5-2.5-36.7-4.1c-0.8-0.1-1.6-0.2-2.4-0.3c-0.3,0-0.7-0.1-1.1-0.2c0,0-0.1,0-0.1,0   c-0.9-0.1-1.8-0.3-2.7-0.4c-0.8-0.1-1.6-0.3-2.4-0.4c0,0-0.1,0-0.2,0c-0.5-0.1-1.1-0.2-1.6-0.3c-0.6-0.1-1.2-0.2-1.7-0.3l-1.1-0.2   c-0.8-0.2-1.5-0.3-2.3-0.5c0,0-0.1,0-0.2,0c-1-0.3-2.1-0.5-3.1-0.8c-0.6-0.2-1.3-0.3-1.9-0.5c-0.5-0.1-0.9-0.3-1.4-0.4   c-1-0.3-1.9-0.6-2.9-0.9c-0.5-0.2-1-0.3-1.5-0.5c-0.6-0.2-1.1-0.4-1.7-0.6c-0.5-0.2-0.9-0.3-1.4-0.5c-2.6-0.9-5.2-2-7.8-3.1   c-0.5-0.2-1.1-0.5-1.6-0.7c-0.5-0.3-1.1-0.5-1.6-0.8c-0.5-0.2-1-0.5-1.4-0.7c-1.1-0.5-2.2-1.1-3.3-1.7c-0.5-0.3-1-0.6-1.5-0.9   c-0.4-0.2-0.9-0.5-1.3-0.8c-0.1-0.1-0.2-0.1-0.3-0.2c0,0-0.1,0-0.1,0c-0.1,0-0.2-0.1-0.2-0.1c-44.5,40-79.1,21.1-94.9,7.7   c-0.2,0.2-0.4,0.4-0.6,0.5c-0.3,0.3-0.6,0.5-1,0.8c-0.3,0.3-0.6,0.5-1,0.8c-0.2,0.2-0.5,0.3-0.7,0.5c-0.3,0.2-0.5,0.4-0.8,0.5   c-0.3,0.2-0.6,0.4-0.9,0.6c-0.3,0.2-0.6,0.4-1,0.6c-0.3,0.2-0.6,0.4-1,0.6c-1.7,1-3.4,1.8-5.2,2.5c-0.3,0.1-0.6,0.2-0.9,0.3   c-0.3,0.1-0.7,0.3-1,0.4c-1,0.4-2.1,0.7-3.2,1c-21,5.8-42.5,9.8-63.6,15.4c-0.7,0.2-1.4,0.4-2.1,0.5c-0.7,0.2-1.4,0.4-2.1,0.6   c-0.5,0.1-0.9,0.3-1.4,0.4c-0.5,0.1-0.9,0.3-1.4,0.4c-0.9,0.3-1.8,0.6-2.7,0.9c-0.4,0.2-0.9,0.3-1.3,0.5c-0.4,0.1-0.7,0.3-1.1,0.4   c-1.9,0.8-3.7,1.6-5.4,2.6c-0.5,0.3-1,0.5-1.4,0.8c-0.1,0-0.1,0.1-0.2,0.1c-0.4,0.2-0.8,0.5-1.2,0.8c-0.1,0.1-0.2,0.1-0.3,0.2   c-0.4,0.3-0.8,0.5-1.2,0.8c0,0,0,0-0.1,0.1c-0.3,0.2-0.7,0.5-1,0.8c-0.6,0.4-1.1,0.9-1.7,1.3c-10,8.4-17.9,18.8-25.8,29.1   c-13,17.5-25.4,35.4-38.5,52.8c-14.8,19.3-32.5,36.2-47,55.7c-2.8,3.7-4.7,8.5-3.1,13.2c4.3,15.1,11.7,29.2,20.1,42.4   c14.3,22.4,36.2,38.2,57.1,54c2.7,2.2,5.7,4.2,8.5,6.4c3.4,2.6,6.7,5.4,9.3,9c2.9,3.5,5.5,8.2,10.4,9.1c7.5,1.1,14.8-2.2,20.8-6.5   c4.3,5.4,8.1,11.1,12.7,16.2c0.1,0.1,0.2,0.2,0.3,0.3c-8.7,11.1-14.1,24.2-18.4,37.5c-6.6,16.5-11.4,33.7-13.6,51.3   c-1.3,7.4-2,15-2.5,22.5c-0.6,8,0.1,16-0.5,24c-0.1,12.1,1.1,24.1,2,36.1h106.3c0.5-7.7,0.6-15.5,0.6-23.3c4.9,2,9.9,3.4,15.2,4.2   c-0.1,6.4,0,12.7-0.3,19.1h106.4c4.6-23.7,8-47.7,8.4-71.9c2.3-13.9,4.1-28,3.1-42c-1.3-18.4-3.9-36.7-4.9-55   c-0.5-11.4-1.6-22.9,0.8-34.1c6.3-34.5,16.2-68.3,21.9-102.9c0.4-3.4,2-6.5,3.1-9.7c2.6-7.1,3.2-14.7,3.4-22.2   c-0.5-11.5-6.5-22.5-4.4-34.1c0.2-1,0.4-2,0.7-3c0.3-1.4,0.6-2.7,0.9-4.1c0,0,0,0,0-0.1c0,0,0,0,0,0c0-0.1,0-0.1,0-0.2   c0.1-0.5,0.2-0.9,0.4-1.4c0.1-0.5,0.3-1.1,0.4-1.6c0.3-1.1,0.6-2.3,0.9-3.4c0,0,0,0,0,0c0.2-0.8,0.5-1.6,0.7-2.4   c0.3-0.8,0.5-1.6,0.8-2.4c0.3-1,0.6-2,1-2.9c0.3-0.8,0.5-1.5,0.8-2.3c0.2-0.5,0.4-1,0.5-1.6c0.7-1.9,1.4-3.8,2.1-5.7   c0.1,0,0.2,0.1,0.4,0.2c0.6,0.3,1.1,0.5,1.6,0.9c0,0,0,0,0,0c0.1,0.1,0.2,0.1,0.3,0.2c0,0,0,0,0,0c0.1,0,0.1,0.1,0.1,0.1   c0,0,0,0,0,0c0.1,0.1,0.2,0.1,0.3,0.2c0,0,0,0,0,0c0.1,0.1,0.3,0.2,0.4,0.4c0.3,0.3,0.5,0.6,0.7,1c3,5.3,4,11.4,5.3,17.3   c4.5,24.3,5.3,49.2,5.5,73.9c0.6,35.3,4.2,70.6,1.8,105.9c-2.1,23.8-7.1,47.2-8.7,71c-1.3,16.4-0.6,32.9-2.3,49.3   c-1.6,16-1.9,32.2-4.8,48c-0.4,2.3-0.9,4.7-1.5,7c-1.2,5.1-4.3,9.6-8.5,12.7c-6.4,4.3-12.3,9.3-17.3,15.2h53.9   c0.5-8.7-0.5-17.5,0.9-26.1c0.7-4.3,1.4-8.6,2.3-12.9c4.3-22.3,10.3-44.3,16-66.3c4.7-18.3,8.2-37,9.4-55.9   c1.5-21.3-0.1-42.6,0.7-63.9C433.3,424.6,440.3,386.4,437.2,348z M144.1,510.8c-3.7-5.3-7-10.8-10.4-16.4c2.3-1.9,4.7-3.7,7.1-5.5   c4.3,3.1,8.5,6.2,12.7,9.4C150.5,502.5,147.3,506.6,144.1,510.8z M159,491c-3.5-3.3-7.1-6.6-10.6-9.9c0.4-0.8,1.1-2.3,1.5-3.1   c3.8,3.2,7.7,6.3,11.6,9.4C160.6,488.6,159.8,489.8,159,491z M167,478.2C167,478.2,167,478.2,167,478.2c-2.6-2.3-5.1-4.6-7.5-7   c0.5-0.5,1.3-1.6,1.8-2.2c2.7,1.6,5.3,3.1,8,4.7c0,0,0,0,0,0C168.6,475.3,167.8,476.7,167,478.2z M179.4,435.2   c-0.8,4.9-1.5,9.9-2.4,14.8c-0.9,5-2,9.9-3.7,14.7c-4.2-2.9-8.4-5.8-12.6-8.8c3.2-3.7,6.7-8.5,6.7-13.4c0-0.4,0-0.7-0.1-1.1v0   c-0.1-1.2-0.5-2.3-1.1-3.5c-1.4,0.3-3.1,0.1-4,1.4c-4.6,4.7-7.8,11.2-13.9,14.1c-1.2,1.2-1.8,2.8-2.8,4c-2,1.2-4.8,0.8-6.4,2.7   c-1.2,1.2-2.4,2.4-4,3.2c-6.5,3.3-13,6.6-20,8.7c-3,0.9-6.7,1.6-9.1-0.9c-2.2-1.7-4.3-3.6-6.3-5.5c-13.7-13.3-22.8-30.6-34.6-45.5   c-7-9-14.4-17.8-20.3-27.7c-1.1-2.2-2.7-4.7-1.9-7.2c1.5-3.1,4.3-5.3,6.7-7.6c10-9,18.8-19.2,28.9-28.1   c13.4-11.5,24.8-25.2,37.4-37.5c6.6-6.5,13.4-13,21.6-17.5c4.6-2.5,10.3-4.3,15.3-2c0,0,0.1,0,0.1,0.1c0.2,0.1,0.3,0.2,0.5,0.2   c0.1,0.1,0.3,0.2,0.4,0.3c0.1,0.1,0.3,0.2,0.4,0.3c0.1,0.1,0.2,0.2,0.3,0.3c0,0,0,0,0,0c0.1,0.1,0.3,0.3,0.4,0.4   c0.2,0.2,0.3,0.4,0.5,0.6c0.1,0.1,0.2,0.3,0.3,0.4c0.2,0.3,0.4,0.6,0.5,0.9c0.5,0.9,0.9,1.8,1.4,2.7c0.8,1.5,1.5,3,2.3,4.6   c0.4,0.8,0.7,1.5,1.1,2.3c0,0.1,0.1,0.1,0.1,0.2c0.3,0.7,0.7,1.4,1,2.1c0.3,0.6,0.5,1.2,0.8,1.8c0.3,0.6,0.5,1.2,0.8,1.8   c0.2,0.5,0.4,1,0.6,1.6c0.3,0.7,0.5,1.4,0.7,2.1c0.1,0.2,0.2,0.5,0.2,0.7c0.1,0.2,0.2,0.5,0.2,0.7c0.2,0.5,0.3,1,0.4,1.5   c0,0,0,0.1,0,0.1c0,0.1,0,0.1,0,0.2c0.1,0.4,0.2,0.8,0.3,1.1c0.1,0.3,0.1,0.6,0.2,0.9c0.1,0.5,0.2,1,0.3,1.5   c2.4,13.4-4.3,26.7-1.7,40.1c1,6.9,4.7,12.9,8.3,18.7C181.8,397.4,181.9,417,179.4,435.2z" />
                        </g>
                      </svg>
                    </div>
                  </li>
				  <?php endif ?>
                </ul>
              </div>
              <?php endif; ?>
              <div class="goodCard__bottom">
                <a href="<?php echo get_page_link('296') ?>?type=price&id=<?php echo get_the_ID() ?>" class="btn btn--primary"><span>Запросить стоимость</span></a>
                <a href="<?php echo get_post_permalink(get_field('brand')) ?>" class="btn btn--secondary"><span>Подробнее о бренде</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
