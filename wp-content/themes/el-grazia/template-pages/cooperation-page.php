<?php 
/* Template Name: Сотрудничество */
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
        <div class="section section--cooperation">
          <div class="container section__inner">
            <div class="section__title">
              <h1><?php the_title(); ?></h1>
            </div>
            <div class="cooperation">
              <div class="cooperation__photo" style="background-image: url('<?php the_field("image"); ?>');"></div>
              <div class="cooperation__title">  <?php the_field("title"); ?> </div>
              <div class="advantages">
                <div class="advantages__title">
                  <h2>Преимущества:</h2>
                </div>
                <ul class="advantagesList">
                	<?php 
                	$block = get_field("adv");
                	if ($block):
                		foreach($block as $key => $item) :
                	?>
	                  <li class="advantagesList__item">
	                    <div class="advantagesList__icon">
	                      <svg class="icon <?php echo getAdvSVGClass($key); ?>">
	                        <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#<?php echo getAdvSVGClass($key); ?>"></use>
	                      </svg>
	                    </div>
	                    <div class="advantagesList__text"> <?php echo $item['text'] ?> </div>
	                  </li>
                		
                	<?php endforeach; endif; ?>
                </ul>
                <div class="advantages__bottom">
                  <a href="<?php echo get_page_link('296') ?>?type=cooperation" class="btn btn--primary"><span>Регистрация</span></a>
                </div>
              </div>
            </div>
            <div class="locationBox">
              <div class="locationBox__left">
                <div class="locationBox__map" id="mapLocation">карта яндекс из ACF</div>
              </div>
              <div class="locationBox__right">
                <ul class="locationBox__list">
                  <li class="locationBox__item">
                    <div class="locationBox__title">Адрес:</div>
                    <div class="locationBox__subtitle"> <?php the_field("c_adress", 39); ?></div>
                  </li>
                  <li class="locationBox__item">
                    <div class="locationBox__title">Время работы:</div>
                    <div class="locationBox__subtitle"><?php the_field("c_time", 39); ?></div>
                  </li>
                  <li class="locationBox__item">
                    <div class="locationBox__title">Телефон:</div>
                    <div class="locationBox__subtitle"><?php the_field("c_tel", 39); ?></div>
                  </li>
                  <li class="locationBox__item">
                    <div class="locationBox__title">Почта:</div>
                    <div class="locationBox__subtitle"><?php the_field("c_email", 39); ?></div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

<?php get_footer(); ?>