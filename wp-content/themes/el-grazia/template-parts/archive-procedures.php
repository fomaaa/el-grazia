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
        <div class="section section--procedures">
          <div class="container section__inner">
            <div class="section__title">
              <h1>Моделям</h1>
            </div>
            <div class="grid gridDesktop--3 gridTablet--2 gridMobile--1">
            	<?php
			        $posts = query_posts(array( 
			            'post_type' => 'procedures',
			            'posts_per_page'  => 999,
			            'orderby' => 'id',
			            'order' => 'desc' )
              
			        );

			       if ( have_posts() ) : while ( have_posts() ) : the_post();
			    ?>
              <div class="grid__item">
                <div class="card card--model">
                  <a href="<?php the_permalink() ?>" class="card__link"></a>
                  <div class="card__photo" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium') ?>');"></div>
                  <div class="card__body">
                    <div class="card__date"><?php the_field("dates"); ?></div>
                    <div class="card__title"><?php the_title(); ?></div>
                      <a href="<?php the_permalink(); ?>" class="btn btn--gray text--center">Подробнее</a>
                          <a href="<?php the_permalink(); ?>?type=semina&id=<?php echo get_the_ID(); ?>" class="btn btn--primary btn--sm">Зарегистрироваться</a>
                  </div>
                </div>
              </div>
				<?php endwhile; endif; ?>
				<?php wp_reset_query(); ?>
            </div>
          </div>
        </div>
      </div>