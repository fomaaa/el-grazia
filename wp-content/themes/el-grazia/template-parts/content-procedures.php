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
        <div class="section section--procedures">
          <div class="container section__inner">
            <div class="section__title">
              <h1> <?php the_title(); ?> </h1>
            </div>
            <article>
              <div class="procedures">
                <?php 
                $block = get_field("steps");
                if ($block):
                  foreach($block as $item) :
                ?>
                  <div class="procedures__item">
                    <div class="procedures__title">
                      <h2><?php echo $item['title'] ?></h2>
                    </div>
                    <div class="procedures__body i-content">
                      <img src="<?php echo $item['image'] ?>" alt="">
                      <p> <?php echo $item['text'] ?></p>
                        <?php 
                        if (!empty($item['steps'][0]['time'])): ?>
                        
                      <div class="proceduresInfo">
                        <?php
                          foreach($item['steps'] as $key => $step) :
                        ?>
                          <div class="proceduresInfo__item">
                            <?php 
                            if (!empty($step['steps'])):
                              foreach($step['steps'] as $index =>  $last) :
                            ?>
                              <div class="proceduresInfo__row">
                                <div class="proceduresInfo__column"><?php if (!$index) : ?><?php echo $step['time']; ?><?php endif ?></div> 
                                <div class="proceduresInfo__column">Шаг  <?php echo $index + 1; ?></div>
                                <div class="proceduresInfo__column">
                                  <a href="<?php echo get_post_permalink($last['product']) ?>"><?php echo $last['product']->post_title ?> </a>
                                </div>
                              </div>
                            
                            <?php endforeach; endif; ?>
                          </div>
                        <?php endforeach;?>
                      </div>
                        <?php endif; ?>
                    </div>
                  </div>
                <?php endforeach; endif; ?>
                <div class="blockRegistration">
                  <div class="blockRegistration__left"> Вы можете отправить заявку на участие моделью на обучении </div>
                  <div class="blockRegistration__right">
                    <a href="<?php echo get_page_link('296') ?>?type=model&id=<?php echo get_the_ID() ?>" class="btn btn--primary">Регистрация для моделей</a>
                  </div>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>