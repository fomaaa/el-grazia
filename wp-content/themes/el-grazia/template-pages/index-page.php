<?php 
/* Template Name: Главная странциа */
  get_header(); 
?>
      <div class="pageWrapper">
        <div class="section section--banner">
          <div class="swiper-container bannerGallery">
            <div class="swiper-wrapper">
            	<?php 
            	$block = get_field("slider");
            	if ($block):
            		foreach($block as $item) :
            	?>
	              <div class="swiper-slide">
	                <div class="banner">
                    <div class="banner__photo" style="background-image: url('<?php echo $item['image']['url'] ?>');"></div>
	                  <div class="container">
	                    <div class="banner__title"> <?php echo $item['text'] ?> </div>
	                  </div>
	                </div>
	              </div>
            	<?php endforeach; endif; ?>
            </div>
          </div>
          <div class="container bannerThumbs__container">
            <div class="swiper-container bannerThumbs">
              <div class="swiper-wrapper">
              	<?php 
              	if ($block):
              		foreach($block as $item) :
              	?>
	                <div class="swiper-slide">
	                  <div class="bannerThumbs__inner">
	                    <div class="bannerThumbs__photo" style="background-image: url('<?php echo $item['image']['sizes']['thumbnail'] ?>');"></div>
	                  </div>
	                </div>
              	<?php endforeach; endif; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="section section--about">
          <div class="container section__inner">
            <div class="section__left">
              <ul class="advantagesList">
              	<?php 
              	$block = get_field("advantages");
              	if ($block):
              		foreach($block as $key => $item) :
              	?>
	                <li class="advantages__item">
	                  <?php 
	                  	!empty($item['prefix']) ? $block[$key]['alt']  = $item['prefix'] : $block[$key]['alt'] = "";
	                  	 $block[$key]['alt'] .= " " . $item['number'] . " " .  $item['text'];
	                   ?>
	                  <?php if (!empty($item['prefix'])) : ?><div class="advantages__subtitle"><?php echo $item['prefix'];  ?></div><?php endif; ?>
	                  <div class="advantages__title">
                      <div class="score" data-score="<?php echo $item['number'];  ?>">0</div>
                    </div>
	                  <div class="advantages__description"><?php echo $item['text'];  ?></div>
	                  <div class="advantages__icon <?php echo returnSVGclass($key) ?>">
	                    <img src="<?php echo $item['icon'];  ?>" alt="<?php echo $block[$key]['alt']; ?>">
	                  </div>
	                </li>
              	<?php endforeach; endif; ?>
              </ul>
              <div class="advantagesSlider swiper-container">
                <div class="swiper-wrapper">
                	<?php 
                	if ($block):
                		foreach($block as $key => $item) :
                	?>
	                  <div class="swiper-slide">
	                    <div class="advantages__item">
	                      <?php if (!empty($item['prefix'])) : ?><div class="advantages__subtitle"><?php echo $item['prefix'];  ?></div><?php endif; ?>
	                      <div class="advantages__title"><?php echo $item['number'];  ?></div>
	                      <div class="advantages__description"><?php echo $item['text'];  ?></div>
	                      <div class="advantages__icon <?php echo returnSVGclass($key) ?>">
	                        <img src="<?php echo $item['icon'];  ?>" alt="<?php echo $block[$key]['alt']; ?>">
	                      </div>
	                    </div>
	                  </div>
                	<?php endforeach; endif; ?>
                </div>
              </div>
            </div>
            <div class="section__right">
              <article>
                <h1> <?php the_field("adv_title"); ?></h1>
                <p> <?php the_field("adv_text"); ?> </p>
              </article>
              <a href="<?php echo get_page_link('27') ?>" class="btn btn--primary btn--arrow">
                <span> Подробнее о нас </span>
              </a>
            </div>
          </div>
        </div>
        <div class="section section--products">
          <div class="container section__inner">
            <div class="section__left">
              <div class="products">
                <div class="section__title">Продукция</div>
                <div class="grid gridDesktop--3 gridTablet--2">
                  <?php   
                    $prod_terms = get_terms('hierarchical=1&taxonomy=product_cat&hide_empty=0&orderby=id&parent=0');
                    foreach ($prod_terms as $prod_term) :
                      if ($prod_term->parent == "0") :
                        $thumb_id = get_woocommerce_term_meta( $prod_term->term_id, 'thumbnail_id', true );
                        $term_img = wp_get_attachment_url(  $thumb_id ); 
                  ?>
                    <div class="grid__item">
                      <div class="card card--product">
                        <a href="<?php echo get_term_link($prod_term) ?>" class="card__link"></a>
                        <div class="card__photo" style="background-image: url('<?php echo $term_img; ?>');"></div>
                        <div class="card__title"><?php echo  $prod_term->name ?></div>
                      </div>
                    </div>
                   <?php endif; endforeach; ?>
                </div>
                <div class="products__bottom">
                  <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="btn btn--primary btn--arrow">
                    <span>Весь каталог</span>
                  </a>
                </div>
              </div>
            </div>
            <div class="section__right">
              <div class="brands">
                <div class="section__title">Бренды</div>
                <ul class="brandsList">
				         <?php
        				    $posts = query_posts(array( 
        				      'post_type' => 'brands',
        				      'posts_per_page'  => 999,
        				      'orderby' => 'date_add',
        				      'order' => 'ASC' 
          				    )
          				  );

        				  if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                    <li class="brandsList__item">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
        				  <?php endwhile; endif; ?>
        				  <?php wp_reset_query(); ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="section section--about section--secondary section--gray">
          <div class="container section__inner">
            <div class="section__left">
              <article>
                <h1> <?php the_field("std_title"); ?></h1>
                <p> <?php the_field("std_text"); ?></p>
              </article>
              <a href="/seminars" class="btn btn--primary btn--arrow">
                <span> Перейти в обучающий центр </span>
              </a>
            </div>
            <div class="section__right">
              <ul class="advantagesList js-splitter" data-columns="2">
              	<?php 
              	$block = get_field("std_advantages");
              	if ($block):
              		foreach($block as $key => $item) :
              	?>
              		<?php 
	                  	!empty($item['prefix']) ? $block[$key]['alt']  = $item['prefix'] : $block[$key]['alt'] = "";
	                  	 $block[$key]['alt'] .= " " . $item['number'] . " " .  $item['text'];
	                ?>
	                <li class="advantages__item">
	                	<?php if (!empty($item['prefix'])) : ?><div class="advantages__subtitle"><?php echo $item['prefix'];  ?></div><?php endif; ?>
		                  <div class="advantages__title"> <div class="score" data-score="<?php echo $item['number'];  ?>">0</div></div>
		                  <div class="advantages__description"><?php echo $item['text'];  ?></div>
		                  <div class="advantages__icon <?php echo returnSVGclassA($key); ?>">
		                    <img src="<?php echo $item['icon'];  ?>" alt="<?php echo $item['prefix'];  ?>">
		                  </div>
	                </li>
              	<?php endforeach; endif; ?>
              </ul>
              <div class="advantagesSlider swiper-container">
                <div class="swiper-wrapper">
                	<?php 
                	if ($block):
                		foreach($block as $item) :
                	?>
	                  <div class="swiper-slide">
	                    <div class="advantages__item">
	                	  <?php if (!empty($item['prefix'])) : ?><div class="advantages__subtitle"><?php echo $item['prefix'];  ?></div><?php endif; ?>
		                  <div class="advantages__title"><?php echo $item['number'];  ?></div>
		                  <div class="advantages__description"><?php echo $item['text'];  ?></div>
		                  <div class="advantages__icon <?php echo returnSVGclassA($key); ?>">
		                    <img src="<?php echo $item['icon'];  ?>" alt="<?php echo $item['prefix'];  ?>">
		                  </div>
	                    </div>
	                  </div>
                	<?php endforeach; endif; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section section--cards section--gray">
          <div class="container section__inner">
            <div class="grid gridDesktop--3">
            	<?php 
            	$block = get_field("std_items");
            	if ($block):
            		foreach($block as $item) :
            	?>
            	<?php 
            		$terms = get_the_tags($item->ID);
            	 ?>
                <div class="grid__item">
                  <div class="card card--event">
                    <a href="<?php echo get_permalink($item->ID) ?>" class="card__link"></a>
                    <div class="card__photo" style="background-image: url('<?php echo get_the_post_thumbnail_url($item, 'medium') ?>');"></div>
                    <div class="card__body">
                      <div class="card__top">
                        <div class="card__dates"><?php the_field("dates", $item->ID); ?></div>
                        <div class="card__title"><?php echo $item->post_title ?></div>
                      </div>
                      <div class="card__bottom">
                        <div class="card__info">
                          <ul>
                            <li>
                              <div class="infoItem">
                                <div class="infoItem__icon">
                                  <svg class="icon icon-price">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-price"></use>
                                  </svg>
                                </div>
                                <div class="infoItem__value"><?php the_field("price", $item->ID); ?> ₽</div>
                              </div>
                            </li>
                            <li>
                              <div class="infoItem">
                                <div class="infoItem__icon">
                                  <svg class="icon icon-clock">
                                    <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-clock"></use>
                                  </svg>
                                </div>
                                <div class="infoItem__value"><?php the_field('time', $item->ID) ?></div>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="card__author">
                          <div class="authorEvent">  <?php the_field("lector", $item->ID); ?> </div>
                        </div>
                        <div class="card__button">
                          <a href="<?php echo get_permalink($item->ID) ?>" class="btn btn--gray text--center">Подробнее</a>
                          <a href="<?php echo get_page_link('296') ?>?type=seminar&id=<?php echo $item->ID ?>" class="btn btn--primary btn--sm">Зарегистрироваться</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            	<?php endforeach; endif; ?>
            </div>
            <div class="gridSlider swiper-container">
              <div class="swiper-wrapper">
              	<?php 
              	if ($block):
              		foreach($block as $item) :
              			$terms = get_the_terms($item->ID, 'seminar');
              	?>
	                <div class="swiper-slide">
	                  <div class="card card--event">
		                  <a href="<?php echo get_permalink($item->ID) ?>" class="card__link"></a>
		                  <?php if (!empty($terms[0])) : ?><div class="card__category badge badge--primary"><?php echo $terms[0]->name; ?></div><?php endif; ?>
		                  <div class="card__photo" style="background-image: url('<?php echo get_the_post_thumbnail_url($item, 'medium') ?>');"></div>
		                  <div class="card__body">
		                    <div class="card__top">
		                      <div class="card__dates"> <?php the_field("dates", $item->ID); ?></div>
		                      <div class="card__title"><?php echo $item->post_title ?></div>
		                    </div>
		                    <div class="card__bottom">
		                      <div class="card__info">
		                        <ul>
		                          <li>
		                            <div class="infoItem">
		                              <div class="infoItem__icon">
		                                <svg class="icon icon-price">
		                                  <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-price"></use>
		                                </svg>
		                              </div>
		                              <div class="infoItem__value"><?php the_field("price", $item->ID); ?> ₽</div>
		                            </div>
		                          </li>
		                          <li>
		                            <div class="infoItem">
		                              <div class="infoItem__icon">
		                                <svg class="icon icon-clock">
		                                  <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-clock"></use>
		                                </svg>
		                              </div>
		                              <div class="infoItem__value"><?php the_field("time", $item->ID); ?></div>
		                            </div>
		                          </li>
		                        </ul>
		                      </div>
		                      <div class="card__button">
		                        <a href="<?php echo get_page_link('296') ?>" class="btn btn--secondary btn--sm">Зарегистрироваться</a>
		                      </div>
		                    </div>
		                  </div>
	                  </div>
	                </div>
              	<?php endforeach; endif; ?>
              </div>
              <div class="swiper-button swiper-button-prev button--white">
                <svg class="icon icon-arrow_small_left">
                  <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-arrow_small_left"></use>
                </svg>
              </div>
              <div class="swiper-button swiper-button-next button--white">
                <svg class="icon icon-arrow_small_right">
                  <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-arrow_small_right"></use>
                </svg>
              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="cards__bottom">
              <a href="<?php echo get_page_link('266') ?>" class="btn btn--primary btn--icon">
                <span class="btn__icon">
                  <svg class="icon icon-calendar">
                    <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-calendar"></use>
                  </svg>
                </span>
                <span> Календарь семинаров </span>
              </a>
            </div>
          </div>
        </div>
        <div class="section section--preview">
          <div class="container section__inner">
            <div class="preview">
              <div class="preview__photo" style="background-image:url('<?php the_field('bis_background') ?>');"></div>
              <div class="preview__box">
                <div class="section__title"> <?php the_field('bis_title') ?> </div>
                <div class="preview__button">
                  <a href="<?php echo get_page_link('29') ?>" class="btn btn--primary btn--white">
                    <span><?php the_field('bis_btn') ?></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section section--carousel">
          <div class="container section__inner carousel">
            <div class="section__head">
              <div class="section__title">Новости</div>
              <div class="carouselNav">
                <div class="swiper-button swiper-button-prev buttonMobile--white">
                  <svg class="icon icon-arrow_small_left">
                    <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-arrow_small_left"></use>
                  </svg>
                </div>
                <div class="swiper-button swiper-button-next buttonMobile--white">
                  <svg class="icon icon-arrow_small_right">
                    <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-arrow_small_right"></use>
                  </svg>
                </div>
              </div>
            </div>
            <div class="carouselBody swiper-container">
              <div class="swiper-wrapper">
              <?php
                  $posts = query_posts(array( 
                      'post_type' => 'news',
                      'posts_per_page'  => 999,
                      'orderby' => 'id',
                      'order' => 'desc' )
                  );

                 if ( have_posts() ) : while ( have_posts() ) : the_post();
              ?>
	                <div class="swiper-slide">
	                  <div class="card card--article">
	                    <a href="<?php echo get_permalink() ?>" class="card__link"></a>
	                    <div class="card__photo" style="background-image: url('<?php echo get_the_post_thumbnail_url($post, 'medium') ?>');"></div>
	                    <div class="card__body">
	                      <div class="card__date dateCalendar"> <?php the_field("date"); ?></div>
	                      <div class="card__title"><?php the_title(); ?></div>
	                    </div>
	                  </div>
	                </div>
              <?php endwhile; endif; ?>
              <?php wp_reset_query(); ?>
              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="carouselBottom">
              <a href="<?php echo get_page_link('37') ?>" class="btn btn--primary">
                <span>Все новости</span>
              </a>
            </div>
          </div>
        </div>
      </div>
<?php get_footer(); ?>