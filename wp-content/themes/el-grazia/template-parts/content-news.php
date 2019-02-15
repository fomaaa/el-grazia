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
        <div class="section section--newsInner">
          <div class="container section__inner">
            <?php if (get_field("date")) : ?>
              <div class="dateCalendar dateCalendar--md">  <?php the_field("date"); ?> </div>
            <?php endif; ?>
            <article>
              <h1><?php get_h1(); ?></h1>
              <div class="companyGallery js-gallery">
                <div class="companyGallery__main swiper-container js-gallery-main">
                  <div class="swiper-wrapper">
                    <?php 
                    $block = get_field("slider");
                    if ($block):
                      foreach($block as $item) :
                    ?>
                      <div class="swiper-slide">
                        <div class="photo" style="background-image: url('<?php echo $item['url'] ?>');" alt="<?php echo $item['alt'] ?>" title="<?php echo $item['title'] ?>"></div>
                      </div>
                      
                    <?php endforeach; endif; ?>
                  </div>
                </div>
                 <?php if (count($block) > 1) : ?>
                <div class="companyGallery__thumbs">
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
              <?php endif; ?>
              </div>
              <div class="i-content">
                <?php
                  while ( have_posts() ) :
                    the_post();
                      the_content(); 
                  endwhile; 
                ?>
              </div>
            </article>
          </div>
        </div>
      </div>