
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
            	$terms = get_terms( array(
				    'taxonomy' => 'seminar',
				    'hide_empty' => false,
				) );

				?>
				<?php if ($terms) :
					foreach ($terms as $term) :
						if ($term->count > 0) :
				?>
	              <div class="events__item">
	                <div class="events__title"> <?php echo $term->name; ?> </div>
	                <div class="grid gridDesktop--3 gridTablet--2 gridMobile--1">
				        <?php
			                  $posts = query_posts(array(
			                    'post_type' => 'seminar',
			                    'posts_per_page'  => 999,
			                    'tax_query' => array(
			                        array(
			                            'taxonomy' => 'seminar',
			                            'terms' => $term->term_id,
			                            'field' => 'term_id',
			                        )
			                    ),
			                    'orderby' => 'id',
			                    'order' => 'desc' )
			                  );

			                if ( have_posts() ) : while ( have_posts() ) : the_post();
			              ?>
				                  <div class="grid__item">
				                    <div class="card card--event">
				                      <a href="<?php the_permalink() ?>" class="card__link"></a>
				                      <div class="card__photo" style="background-image: url('<?php echo get_the_post_thumbnail_url($post, 'medium') ?>');"></div>
				                      <div class="card__body">
				                        <div class="card__top">
				                          <div class="card__dates"> <?php the_field("dates"); ?></div>
				                          <div class="card__title"><?php the_title() ?></div>
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
				                                  <div class="infoItem__value" data-badge=" <?php the_field("price_add"); ?>"><span <?php if (!preg_match("/[а-я]/i", get_field('price'))) echo 'class="ruble"'; ?> ><?php the_field('price') ?> </span></div>
				                                </div>
				                              </li>
				                              <li>
				                                <div class="infoItem">
				                                  <div class="infoItem__icon">
				                                    <svg class="icon icon-clock">
				                                      <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-clock"></use>
				                                    </svg>
				                                  </div>
				                                  <div class="infoItem__value"><?php the_field('start_time') ?></div>
				                                </div>
				                              </li>
				                            </ul>
				                          </div>
				                          <div class="card__author">
				                            <div class="authorEvent">  <?php the_field("lector"); ?> </div>
				                          </div>
				                          <div class="card__button">
				                            <a href="<?php the_permalink(); ?>" class="btn btn--gray text--center">Подробнее</a>
				                            <a href="<?php echo get_page_link('296') ?>?type=seminar&id=<?php echo get_the_ID() ?>" class="btn btn--primary btn--sm">Зарегистрироваться</a>
				                          </div>
				                        </div>
				                      </div>
				                    </div>
				                  </div>

						<?php endwhile; endif; ?>
						<?php wp_reset_query(); ?>
	                </div>
	              </div>
				<?php endif; endforeach; endif; ?>
            </div>
          </div>
        </div>
      </div>
