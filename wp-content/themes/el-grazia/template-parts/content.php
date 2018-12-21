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
        <div class="section section--article">
          <div class="container section__inner">
            <article>
                <?php
                  while ( have_posts() ) :
                    the_post();

                            the_content(); 
                  endwhile; 
                ?>
            </article>
            <ul class="tagsList">
              <?php 
              $block = get_the_tags();
              if ($block):
                foreach($block as $item) :
              ?>
                <li class="tagsList__item">
                  <a href="<?php echo get_tag_link($item->term_id) ?>" class="tag"><?php echo $item->name?></a>
                </li>
              <?php endforeach; endif; ?>
            </ul>
          </div>
        </div>
                <div class="section section--carousel">
          <div class="container section__inner carousel">
            <div class="section__head">
              <div class="section__title">Другие статьи</div>
              <div class="carouselNav">
                <div class="swiper-button swiper-button-prev buttonMobile--white">
                  <svg class="icon icon-arrow_small_left">
                    <use xlink:href="img/sprite.svg#icon-arrow_small_left"></use>
                  </svg>
                </div>
                <div class="swiper-button swiper-button-next buttonMobile--white">
                  <svg class="icon icon-arrow_small_right">
                    <use xlink:href="img/sprite.svg#icon-arrow_small_right"></use>
                  </svg>
                </div>
              </div>
            </div>
            <div class="carouselBody swiper-container">
              <div class="swiper-wrapper">
                <?php
                    $current_id = get_the_ID();
                    $posts = query_posts(array( 
                        'posts_per_page'  => 10,
                      )
                    );

                   if ( have_posts() ) : while ( have_posts() ) : the_post();
                    if ($current_id != get_the_ID()) :
                ?>
                <div class="swiper-slide">
                  <div class="card card--news">
                    <a href="<?php the_permalink(); ?>" class="card__link"></a>
                    <div class="card__photo" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium') ?>');"></div>
                    <div class="card__body">
                      <div class="card__title"><?php the_title(); ?></div>
                      <div class="card__subtitle"><span> <?php the_field("exerpt"); ?></span></div>
                    </div>
                  </div>
                </div>
              <?php endif ?>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>                
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>
        </div>
      </div>