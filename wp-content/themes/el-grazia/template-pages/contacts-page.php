<?php 
/* Template Name: Контакты */
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
        <div class="section section--contacts">
          <div class="container section__inner">
            <div class="section__title">
              <h1><?php the_title(); ?></h1>
            </div>
            <div class="tabs tabs--contacts">
              <ul class="tabsList">
                <li class="tabsList__item">
                  <a href="#" class="tab1 is-active">Центральный офис</a>
                </li>
                <li class="tabsList__item">
                  <a href="#" class="tab2">Обучающий центр</a>
                </li>
              </ul>
              <div class="tabsBox">
                <div class="tabs__con tabs__con_tab1 is-active">
                  <div class="contacts">
                    <ul class="contactsList">
                      <li class="contactsList__item">
                        <div class="contactsList__icon">
                          <svg class="icon icon-marker">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-marker"></use>
                          </svg>
                        </div>
                        <div class="contactsList__title">Адрес:</div>
                        <div class="contactsList__subtitle"> <?php the_field("c_adress"); ?></div>
                      </li>
                      <li class="contactsList__item">
                        <div class="contactsList__icon">
                          <svg class="icon icon-phone">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-phone"></use>
                          </svg>
                        </div>
                        <div class="contactsList__title">Телефон:</div>
                        <div class="contactsList__subtitle"><?php the_field("c_tel"); ?></div>
                      </li>
                      <li class="contactsList__item">
                        <div class="contactsList__icon">
                          <svg class="icon icon-time">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-time"></use>
                          </svg>
                        </div>
                        <div class="contactsList__title">Время работы:</div>
                        <div class="contactsList__subtitle"> <?php the_field("c_time"); ?></div>
                      </li>
                      <li class="contactsList__item">
                        <div class="contactsList__icon">
                          <svg class="icon icon-mail">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-mail"></use>
                          </svg>
                        </div>
                        <div class="contactsList__title">Почта:</div>
                        <div class="contactsList__subtitle"><?php the_field("c_email"); ?></div>
                      </li>
                    </ul>
                    <div class="contactsInfo"> <?php the_field("c_inn"); ?> </div>
                    <div class="contactsMap" id="map">карта яндекса через ACF сделать нужно </div>
                    <div class="roadMap">
                      <div class="roadMap__item">
                        <div class="roadMap__icon">
                          <svg class="icon icon-step">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-step"></use>
                          </svg>
                        </div>
                        <div class="roadMap__title">Как дойти:</div>
                        <div class="roadMap__text"><?php the_field("c_walk"); ?></div>
                      </div>
                      <div class="roadMap__item">
                        <div class="roadMap__icon">
                          <svg class="icon icon-car">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-car"></use>
                          </svg>
                        </div>
                        <div class="roadMap__title">Как доехать:</div>
                        <div class="roadMap__text"> <?php the_field("c_car"); ?></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tabs__con tabs__con_tab2">
                  <div class="contacts">
                    <ul class="contactsList">
                      <li class="contactsList__item">
                        <div class="contactsList__icon">
                          <svg class="icon icon-marker">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-marker"></use>
                          </svg>
                        </div>
                        <div class="contactsList__title">Адрес:</div>
                        <div class="contactsList__subtitle"><?php the_field("o_adress"); ?> </div>
                      </li>
                      <li class="contactsList__item">
                        <div class="contactsList__icon">
                          <svg class="icon icon-phone">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-phone"></use>
                          </svg>
                        </div>
                        <div class="contactsList__title">Телефон:</div>
                        <div class="contactsList__subtitle"> <?php the_field("o_tel"); ?> </div>
                      </li>
                      <li class="contactsList__item">
                        <div class="contactsList__icon">
                          <svg class="icon icon-time">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-time"></use>
                          </svg>
                        </div>
                        <div class="contactsList__title">Время работы:</div>
                        <div class="contactsList__subtitle"> <?php the_field("o_time"); ?> </div>
                      </li>
                      <li class="contactsList__item">
                        <div class="contactsList__icon">
                          <svg class="icon icon-mail">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-mail"></use>
                          </svg>
                        </div>
                        <div class="contactsList__title">Почта:</div>
                        <div class="contactsList__subtitle"><?php the_field("o_email"); ?></div>
                      </li>
                    </ul>
                    <div class="contactsInfo"><?php the_field("o_inn"); ?></div>
                    <div class="contactsMap" id="map"> карта яндекса через ACF сделать нужно </div>
                    <div class="roadMap">
                      <div class="roadMap__item">
                        <div class="roadMap__icon">
                          <svg class="icon icon-step">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-step"></use>
                          </svg>
                        </div>
                        <div class="roadMap__title">Как дойти:</div>
                        <div class="roadMap__text">  <?php the_field("o_walk"); ?> </div>
                      </div>
                      <div class="roadMap__item">
                        <div class="roadMap__icon">
                          <svg class="icon icon-car">
                            <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-car"></use>
                          </svg>
                        </div>
                        <div class="roadMap__title">Как доехать:</div>
                        <div class="roadMap__text">  <?php the_field("o_car"); ?> </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="section section--callback section--gray">
          <div class="container section__inner">
            <div class="section__title">Напишите нам</div>
            <div class="callback">
            	<?php echo do_shortcode('[contact-form-7 id="243" title="Напишите нам" html_class="form form--callback"]') ?>
            </div>
          </div>
        </div>
      </div>

<?php get_footer(); ?>