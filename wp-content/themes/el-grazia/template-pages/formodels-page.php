<?php 
/* Template Name: Моделям */
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
        <div class="section section--models">
          <div class="container section__inner">
            <div class="section__title">
              <h1> <?php the_field("title"); ?></h1>
            </div>
            <div class="grid gridDesktop--3 gridTablet--2 gridMobile--1">
              <?php 
              $block = get_field("models");
              if ($block):
                foreach($block as $event) :
                  $id =  $event['event']->ID; 
              ?>
                <div class="grid__item">
                  <div class="card card--model">
                    <a href="<?php echo get_post_permalink($event['event']) ?>" class="card__link"></a>
                    <div class="card__photo" style="background-image: url('<?php echo get_the_post_thumbnail_url($event['event'], 'medium') ?>');"></div>
                    <div class="card__body">
                      <div class="card__date"> <?php the_field("dates", $id); ?></div>
                      <div class="card__title"><?php echo get_the_title($id) ?></div>
                      <a href="<?php echo get_post_permalink($event['event']) ?>" class="btn btn--gray">Подробнее</a>
                    </div>
                  </div>
                </div>
              <?php endforeach; endif; ?>
            </div>
            <div class="i-content models__description">
              <article>
                <?php
                  while ( have_posts() ) :
                    the_post();
                    the_content(); 
                  endwhile; 
                ?>
              </article>
            </div>
          </div>
        </div>
      </div>
<?php get_footer(); ?>