<ul class="companyBrands__list grid gridDesktop--4 gridMobile--2">
  <?php
    $posts = query_posts(array( 
      'post_type' => 'brands',
      'posts_per_page'  => 999,
      'orderby' => 'date_add',
      'order' => 'ASC' 
    )
  );

  if ( have_posts() ) : while ( have_posts() ) : the_post();?>
      <li class="companyBrands__item grid__item">
        <div class="card card--brand">
          <a href="<?php the_permalink(); ?>" class="card__link"></a>
          <div class="card__photo">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium') ?>" alt="">
          </div>
          <div class="card__body">
            <div class="card__title"><?php the_title(); ?></div>
            <div class="card__subtitle"> <?php the_field("subtitle"); ?></div>
          </div>
        </div>
      </li>
  <?php endwhile; endif; ?>
  <?php wp_reset_query(); ?>
</ul>