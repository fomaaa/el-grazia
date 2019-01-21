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
        <div class="section section--event">
          <div class="container section__inner">
            <div class="section__title">
              <h1><?php get_h1(); ?></h1>
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
                      <div class="photo" alt="<?php echo $item['alt'] ?>" title="<?php echo $item['title'] ?>"  style="background-image: url(' <?php echo $item['url'] ?>');"></div>
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
                        <div class="photo" style="background-image: url('<?php echo $item['sizes']['thumbnail'] ?>');"></div>
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
            <div class="listBox">
              <div class="listBox__title">  <?php the_field("dates"); ?> </div>
              <div class="listBox__body listBox__body--flex">
                <div class="listBox__column">
                  <ul>
                    <li>
                       <?php the_field("for_whom"); ?>
                    </li>
                    <li>
                      <b>Продолжительность курса:</b>  <?php the_field("time"); ?> </li>
                    <li>
                      <b>Стоимость обучения:</b> <?php if (get_field('old price')) : ?> <span class="oldPrice"> <?php the_field("old price"); ?> </span> <?php endif; ?> 
                      <span class="newPrice"><?php the_field("price"); ?> <?php if (!preg_match("/[а-я]/i", get_field('price'))) echo ' руб.'; ?>  <?php the_field("price_add"); ?></span>
                    </li>
                    <li>
                      <a href="/seminars">Расписание других курсов</a>
                    </li>
                  </ul>
                </div>
                <div class="listBox__column">
                  <ul class="listIcon">
                    <?php 
                    $block = get_field("add_list");
                    if ($block):
                      foreach($block as $key => $item) :
                    ?>
                      <li class="listIcon__item">
                        <div class="listIcon__icon">
                          <img src="<?php echo get_template_directory_uri() ?>/img/icons/seminar<?php echo $key+1 ?>.svg" alt="">
                        </div>
                        <div class="listIcon__text">  <?php echo $item['text'] ?> </div>
                      </li>
                     
                    <?php endforeach; endif; ?>
                  </ul>
                </div>
              </div>
            </div>
            <div class="blockInfoWrapper">
              <div class="blockInfo">
                <div class="blockInfo__left"> Дополнительная информация: </div>
                <div class="blockInfo__right">
                  <?php the_field("add_inf"); ?>
                  <a href="<?php echo get_page_link('296') ?>?type=seminar&id=<?php echo get_the_ID() ?>" class="btn btn--primary"><span>Регистрация</span></a>
                </div>
              </div>
              <div class="blockInfo">
                <div class="blockInfo__left"> План семинара: </div>
                <div class="blockInfo__right">
                  <div class="plan">
                    <?php 
                    $block = get_field("plan");
                    if ($block):
                      foreach($block as $item) :
                    ?>
                    <div class="plan__item">
                      <div class="plan__head"> <?php echo $item['title'] ?> </div>
                      <div class="planBody">
                        <?php 
                        if ($item['steps']):
                          foreach($item['steps'] as $step) :
                        ?>
                          <div class="planBody__item">
                            <div class="planBody__title"><?php echo $step['step_title'] ?></div>
                            <ol>
                              <?php 
                              if ($step['list']):
                                foreach($step['list'] as $listItem) :
                              ?>
                                <li><?php echo $listItem['item'] ?></li>
                                
                              <?php endforeach; endif; ?>
                            </ol>
                          </div>
                        <?php endforeach; endif; ?>
                      </div>
                    </div>
                    <?php endforeach; endif; ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="blockRegistration">
              <div class="blockRegistration__left"> Вы можете отправить заявку на участие моделью на обучении </div>
              <div class="blockRegistration__right">
                <a href="<?php echo get_page_link('296') ?>?type=model&id=<?php echo get_the_ID() ?>" class="btn btn--primary">Регистрация для моделей</a>
              </div>
            </div>
          </div>
        </div>
      </div>