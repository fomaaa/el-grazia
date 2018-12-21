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
        <div class="section section--news">
          <div class="container section__inner">
            <div class="section__title">
              <h1>Новости</h1>
            </div>
            <div class="grid gridDesktop--4 gridTablet--3">
<?php       			if ( have_posts() ) :
      				while ( have_posts() ) :
      					the_post(); ?>
		              <div class="grid__item">
		                <div class="card card--article">
		                  <a href="<?php the_permalink(); ?>" class="card__link"></a>
		                  <div class="card__photo" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium') ?>');"></div>
		                  <div class="card__body">
		                    <div class="card__date dateCalendar"> <?php the_field("date"); ?></div>
		                    <div class="card__title"><?php the_title(); ?></div>
		                  </div>
		                </div>
		              </div>
	                <?php endwhile; ?>
	        	<?php endif; ?>

            </div> 
            <?php
      			$args = array(
      					'show_all'     => false, 
      					'end_size'     => 1,     
      					'mid_size'     => 1,     
      					'prev_next'    => true,  
      					'prev_text'    => '<svg class="icon icon-arrow_small_right"><use xlink:href="'. get_template_directory_uri() .'/img/sprite.svg#icon-arrow_small_left"></use></svg>',
      					'next_text'    => '<svg class="icon icon-arrow_small_right"><use xlink:href="'. get_template_directory_uri() .'/img/sprite.svg#icon-arrow_small_right"></use></svg>',
      			);
            ?>
			<?php the_posts_pagination($args); ?>

          </div>
        </div>
      </div>