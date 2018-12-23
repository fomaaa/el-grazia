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
        <div class="section section--articles">
          <div class="container section__inner">
            <div class="section__title">
              <h1>Статьи</h1>
            </div>
            <nav class="nav nav--category js-mobile-category">
              <ul class="menu">
                <?php 
                $block = get_categories();
                $category = single_term_title("", false);
                if ($block):
                  foreach($block as $item) :
                ?>
                  <?php if ($item->term_id == 74) continue; ?>
                  <li class="menu__item <?php if ($item->slug == get_the_category()[0]->slug && $category != 'Статьи') echo 'is-active'; ?>">
                    <a href="<?php echo get_category_link($item) ?>" class="menu__link"><?php echo $item->name ?></a>
                  </li>
                  
                <?php endforeach; endif; ?>
              </ul>
            </nav>
            <div class="grid gridDesktop--3 gridTablet--2 gridMobile--1">
      	    <?php
      			if ( have_posts() ) :
      				while ( have_posts() ) :
      					the_post(); ?>

      		              <div class="grid__item">
      		                <div class="card card--news">
      		                  <a href="<?php the_permalink() ?>" class="card__link"></a>
      		                  <div class="card__photo" style="background-image: url('<?php echo get_the_post_thumbnail_url($post, 'medium-large'); ?>');"></div>
      		                  <div class="card__body">
      		                    <div class="card__title"><?php the_title(); ?></div>
      		                    <div class="card__subtitle"><span> <?php the_field("exerpt"); ?></span></div>
      		                  </div>
      		                </div>
      		              </div>

      				<?php endwhile;
            endif;

      			$args = array(
      					'show_all'     => false, // показаны все страницы участвующие в пагинации
      					'end_size'     => 1,     // количество страниц на концах
      					'mid_size'     => 1,     // количество страниц вокруг текущей
      					'prev_next'    => true,  // выводить ли боковые ссылки "предыдущая/следующая страница".
      					'prev_text'    => '<svg class="icon icon-arrow_small_right"><use xlink:href="'. get_template_directory_uri() .'/img/sprite.svg#icon-arrow_small_left"></use></svg>',
      					'next_text'    => '<svg class="icon icon-arrow_small_right"><use xlink:href="'. get_template_directory_uri() .'/img/sprite.svg#icon-arrow_small_right"></use></svg>',
      			);
            ?>
            </div>
            <?php the_posts_pagination($args); ?>
          </div>
        </div>
      </div>