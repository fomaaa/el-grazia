
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
        <div class="section section--events">
          <div class="container section__inner">
            <div class="section__title">
              <h1> Семинары </h1>
            </div>
	        <div class="events">
            <?php 
            $block = get_field("seminars", 266);
            if ($block):
            	foreach($block as $item) :
            		if (!empty($item['seminar'][0]['sem'])) : 
            ?>
	              <div class="events__item">
	                <div class="events__title"> <?php echo $item['cat']->name; ?> </div>
	                <div class="grid gridDesktop--3 gridTablet--2 gridMobile--1">

			              <?php 
			              $seminars = $item['seminar'];
			              	foreach($seminars as $seminar) :
			              		if (!empty($seminar['sem'])):
			              		$seminar = $seminar['sem'];
		
			              		$id = $seminar->ID;
			              ?>
				                  <div class="grid__item">
				                    <div class="card card--event">
				                      <a href="<?php echo get_the_permalink($seminar) ?>" class="card__link"></a>
				                      <div class="card__photo" style="background-image: url('<?php echo get_the_post_thumbnail_url($seminar, 'medium') ?>');"></div>
				                      <div class="card__body">
				                        <div class="card__top">
				                          <div class="card__dates"> <?php the_field("dates", $id); ?></div>
				                          <div class="card__title"><?php echo get_the_title($seminar) ?></div>
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
				                                  <div class="infoItem__value" data-badge=" <?php the_field("price_add", $id); ?>"><span <?php if (!preg_match("/[а-я]/i", get_field('price', $id))) echo 'class="ruble"'; ?> ><?php the_field('price', $id) ?> </span></div>
				                                </div>
				                              </li>
				                              <?php if (get_field('start_time', $id)) : ?>
				                              <li>
				                                <div class="infoItem">
				                                  <div class="infoItem__icon">
				                                    <svg class="icon icon-clock">
				                                      <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-clock"></use>
				                                    </svg>
				                                  </div>
				                                  <div class="infoItem__value"><?php the_field('start_time', $id) ?></div>
				                                </div>
				                              </li>
				                              <?php endif; ?>
				                            </ul>
				                          </div>
				                          <div class="card__author">
				                            <div class="authorEvent">  <?php the_field("lector", $id); ?> </div>
				                          </div>
				                          <div class="card__button">
				                            <a href="<?php echo get_the_permalink($seminar) ?>" class="btn btn--gray text--center">Подробнее</a>
				                            <a href="<?php echo get_page_link('296') ?>?type=seminar&id=<?php echo $id ?>" class="btn btn--primary btn--sm">Зарегистрироваться</a>
				                          </div>
				                        </div>
				                      </div>
				                    </div>
				                  </div>
			              <?php  endif; endforeach; ?>

	                </div>
	              </div>
	          <?php endif; ?>
            <?php endforeach; endif; ?>
	        </div>
          </div>
        </div>
      </div>
