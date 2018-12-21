<?php 
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
        <div class="section section--brand">
          <div class="container section__inner">
            <div class="brand">
              <div class="brand__head">
                <div class="brand__title">
                  <h1><?php the_title(); ?></h1>
                </div>
                <div class="brand__logo">
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                </div>
              </div>
              <div class="brandGallery js-gallery">
                <div class="brandGallery__main swiper-container js-gallery-main">
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
                <div class="brandGallery__thumbs">
                  <div class="swiper-container js-gallery-thumbs">
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
              <div class="i-content">

                <article>
                <?php
          				while ( have_posts() ) :
          					the_post();
          		               the_content(); 
          				endwhile; 
          			?>
                </article>
                <div class="brands__bottom">
                  <a href="#" class="btn btn--primary">
                    <span>Смотреть продукцию</span>
                  </a>
                  <a href="<?php echo get_page_link('296') ?>/?type=brand&id=<?php echo get_the_ID(); ?>" class="btn btn--secondary">
                    <span>Узнать стоимость</span>
                  </a>
                  <?php if (get_field('procedur')) : ?>
                    <a href="<?php echo get_post_permalink(get_field('procedur')->ID) ?>" class="btn btn--link">
                      <span>Программы ухода</span>
                    </a>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>