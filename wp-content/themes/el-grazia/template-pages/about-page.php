<?php 
/* Template Name: О компании */
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
        <div class="section section--company">
          <div class="container section__inner">
            <div class="company">
              <div class="company__head">
                <div class="company__left">
                  <div class="company__title">
                    <h1> <?php the_field("title"); ?></h1>
                  </div>
                  <div class="company__subtitle">
                    <h2><?php the_field("subtitle"); ?></h2>
                  </div>
                </div>
                <div class="company__right">
                  <div class="languageSelect">
                      <?php if (get_the_ID() == '302') :  ?>
                          <span class="languageSelect__current">En
                          </span>
                          <ul class="languageSelect__list">
                            <li class="languageSelect__item">
                              <a href="<?php echo get_page_link('27') ?>">Ru</a>
                            </li>
                          </ul>
                      <?php else : ?>
                        <span class="languageSelect__current">Ru
                        </span>
                        <ul class="languageSelect__list">
                          <li class="languageSelect__item">
                            <a href="en">En</a>
                          </li>
                        </ul>
                      <?php endif ?>
                  </div>
                </div>
              </div>
              <div class="companyGallery js-gallery">
                <div class="companyGallery__main swiper-container js-gallery-main">
                  <div class="swiper-wrapper">
                  	<?php 
                  	$block = get_field("slider");

                  	if ($block):
                  		foreach($block as $item) :
                  	?>
	                    <div class="swiper-slide">
	                      <div class="photo" style="background-image: url('<?php echo $item['url'] ?>');"></div>
	                    </div>
                  		
                  	<?php endforeach; endif; ?>
                  </div>
                </div>
                <div class="companyGallery__thumbs">
                  <div class="swiper-container js-gallery-thumbs">
                    <div class="swiper-wrapper">
                    	<?php 
                    	if ($block):
                    		foreach($block as $item) :
                    	?>
	                      <div class="swiper-slide">
	                        <div class="photo" style="background-image: url('<?php echo $item['sizes']['thumbnail'] ?>')"></div>
	                      </div>
                    	<?php endforeach; endif; ?>
                    </div>
                  </div>
                  <div class="swiper-button swiper-button-prev button--default">
                    <svg class="icon icon-arrow_small_left">
                      <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-arrow_small_left"></use>
                    </svg>
                  </div>
                  <div class="swiper-button swiper-button-next button--default">
                    <svg class="icon icon-arrow_small_right">
                      <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-arrow_small_right"></use>
                    </svg>
                  </div>
                </div>
              </div>
              <div class="company__body">
                <article>
  			        <?php
      						while ( have_posts() ) :
      							the_post();

      		                	the_content(); 
      						endwhile; 
      					?>
				        </article>
                <div class="companyBrands">
                  <div class="companyBrands__title">
                    <?php if (get_the_ID() == "302") : ?>
                      <h4>The following global brands are included in the business portfolio of Elia Gracia:</h4>
                    <?php else : ?>
                      <h4>В бизнес-портфель "Элия Грация" включены следующие мировые бренды:</h4>
                    <?php endif; ?>
                  </div>
                  <?php get_template_part( 'template-parts/brands-block' ); ?>
                </div>
                <article>
                   <?php the_field("add_description"); ?>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
<?php get_footer(); ?>