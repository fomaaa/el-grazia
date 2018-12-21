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
                </ul>
              </div>
            </div>
            <div class="section__right">
              <div class="goodCard__head">
                <h1><?php the_title() ?> </h1>
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
              <div class="goodInfo">
                <div class="goodInfo__title"> Активные ингридиенты: </div>
                <div class="goodInfo__body">
 					<?php the_field("active"); ?>
                </div>
              </div>
              <div class="applicationArea hiddenTablet">
                <div class="applicationArea__figure" style="background-image: url('img/woman.png');"></div>
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
                </ul>
              </div>
              <div class="goodCard__bottom">
                <a href="<?php echo get_page_link('296') ?>?type=price&id=<?php echo get_the_ID() ?>" class="btn btn--primary"><span>Запросить стоимость</span></a>
                <a href="<?php echo get_post_permalink(get_field('brand')) ?>" class="btn btn--secondary"><span>Подробнее о бренде</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
