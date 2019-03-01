<?php 
/* Template Name: Скидки и акции */
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
        <div class="section section--promo">
          <div class="container section__inner">
            <div class="section__title">
              <h1><?php the_title(); ?></h1>
            </div>
            <div class="grid gridDesktop--2">
            	<?php 
            	$block = get_field("goods");
            	if ($block):
            		foreach($block as $item) :
            	?>
		              <div class="grid__item">
		                <div class="card card--sales">
		                  <a href="<?php echo get_post_permalink($item['good']->ID) ?>" class="card__link"></a>
		                  <div class="card__photo" style="background-image: url('<?php echo $item['image'] ?>');"></div>
		                  <div class="card__body">
		                    <div class="card__title"><?php echo $item['text'] ?></div>
		                    <a href="" class="btn btn--border">
		                      <span>Подробнее о бренде</span>
		                    </a>
		                  </div>
		                </div>
		              </div>
            		
            	<?php endforeach; endif; ?>

            </div>
            <div class="phonesBox">
              <div class="phonesBox__left">
                <div class="phonesBox__title"> <?php the_field("text"); ?></div>
              </div>
              <div class="phonesBox__right">
              	<?php 
              	$block = get_field("tel");
              	if ($block):
              		foreach($block as $item) :
              	?>
                	<a href="tel:<?php echo $item['item'] ?>"><?php echo $item['item'] ?></a>
              		
              	<?php endforeach; endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php get_footer(); ?>