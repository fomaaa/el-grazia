<?php 
/* Template Name: Новости */
  get_header(); 
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
        <div class="section section--news">
          <div class="container section__inner">
            <div class="section__title">
              <h1><?php the_title() ?></h1>
            </div>
            <div class="grid gridDesktop--4 gridTablet--3">
				<?php
		            $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;

		            $per_page = '12';

		            $testimonial_args = array(
		                'post_type' => 'news',
		                'posts_per_page' => $per_page,
		                'paged' => $current_page,
		            );
		            $testimonials = new WP_Query($testimonial_args);
		         ?>
	 
	            <?php if ($testimonials->have_posts()) : $i = 1; ?>
	                <?php while ($testimonials->have_posts()) : $testimonials->the_post(); ?>
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
			<div class="pagination">
	            <?php                    
	                $big = 999999999; 
	 
	                echo paginate_links( array(
	                            'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	                            'format' => '?paged=%#%',
	                            'current' => max( 1, get_query_var('paged') ),
	                            'total' => $testimonials->max_num_pages,
	                                  					'show_all'     => false, // показаны все страницы участвующие в пагинации
      					'end_size'     => 1,     // количество страниц на концах
      					'mid_size'     => 1,     // количество страниц вокруг текущей
      					'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
      					'prev_text'    => '<svg class="icon icon-arrow_small_right"><use xlink:href="'. get_template_directory_uri() .'/img/sprite.svg#icon-arrow_small_left"></use></svg>',
      					'next_text'    => '<svg class="icon icon-arrow_small_right"><use xlink:href="'. get_template_directory_uri() .'/img/sprite.svg#icon-arrow_small_right"></use></svg>',
	                        ) );
	            ?>
	        </div>
          </div>
        </div>
      </div>
<?php get_footer(); ?>