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
                      <div class="proceduresInfo">
                        <?php 
                        if (!empty($item['steps'])):
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
                        <?php endforeach; endif; ?>
                      </div>
                    </div>
                  </div>
                <?php endforeach; endif; ?>
<!--                 <div class="procedures__item">
                  <div class="procedures__title">
                    <h2>Увлажнение</h2>
                  </div>
                  <div class="procedures__body i-content">
                    <img src="img/procedures/item2.jpg" alt="">
                    <p> Ежедневная гидратация для всех типов кожи. Обеспечивает оптимальное увлажнение и восстанавливает водный баланс  кожи, предотвращает появление морщин, улучшает текстуру кожи. </p>
                    <div class="proceduresInfo">
                      <div class="proceduresInfo__item">
                        <div class="proceduresInfo__row">
                          <div class="proceduresInfo__column">День</div>
                          <div class="proceduresInfo__column">Шаг 1</div>
                          <div class="proceduresInfo__column">
                            <a href="#">Q89 Активирующий гель </a>
                          </div>
                        </div>
                        <div class="proceduresInfo__row">
                          <div class="proceduresInfo__column"></div>
                          <div class="proceduresInfo__column">Шаг 2</div>
                          <div class="proceduresInfo__column">
                            <a href="#">Q73 Увлажняющий крем со скваленовым маслом</a>
                          </div>
                        </div>
                      </div>
                      <div class="proceduresInfo__item">
                        <div class="proceduresInfo__row">
                          <div class="proceduresInfo__column">Ночь</div>
                          <div class="proceduresInfo__column">Шаг 1</div>
                          <div class="proceduresInfo__column">
                            <a href="#">Q89 Активирующий гель </a>
                          </div>
                        </div>
                        <div class="proceduresInfo__row">
                          <div class="proceduresInfo__column"></div>
                          <div class="proceduresInfo__column">Шаг 2</div>
                          <div class="proceduresInfo__column">
                            <a href="#">Q73 Увлажняющий крем со скваленовым маслом</a>
                          </div>
                        </div>
                      </div>
                    </div>
                    <p>
                      <b>Рекомендуется дополнить:</b>
                    </p>
                    <div class="proceduresInfo">
                      <div class="proceduresInfo__item">
                        <div class="proceduresInfo__row">
                          <div class="proceduresInfo__column">
                            <img src="img/procedures/dop_prod1.jpg" alt="">
                          </div>
                          <div class="proceduresInfo__column"><b>Ночь</b></div>
                          <div class="proceduresInfo__column">
                            <a href="#">Q84 Очищающее молочко</a>
                          </div>
                        </div>
                      </div>
                      <div class="proceduresInfo__item">
                        <div class="proceduresInfo__row">
                          <div class="proceduresInfo__column">
                            <img src="img/procedures/dop_prod2.jpg" alt="">
                          </div>
                          <div class="proceduresInfo__column"><b>Ночь</b></div>
                          <div class="proceduresInfo__column">
                            <a href="#">Q60 Маска 5-Fx</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="procedures__item">
                  <div class="procedures__title">
                    <h2>Лечение акне</h2>
                  </div>
                  <div class="procedures__body i-content">
                    <img src="img/procedures/item3.jpg" alt="">
                    <p> Домашнее лечение для устранения прыщей<br> Очищает и удаляет токсины с кожи, регулирует выработку кожного сала и успокаивает воспаления и покраснения. Настоятельно рекомендуется использовать маску Q60 5-Fx каждую ночь. </p>
                    <div class="proceduresInfo">
                      <div class="proceduresInfo__item">
                        <div class="proceduresInfo__row">
                          <div class="proceduresInfo__column">День</div>
                          <div class="proceduresInfo__column">Шаг 1</div>
                          <div class="proceduresInfo__column">
                            <a href="#">Q89 Активирующий гель </a>
                          </div>
                        </div>
                        <div class="proceduresInfo__row">
                          <div class="proceduresInfo__column"></div>
                          <div class="proceduresInfo__column">Шаг 2</div>
                          <div class="proceduresInfo__column">
                            <a href="#">Q73 Увлажняющий крем со скваленовым маслом</a>
                          </div>
                        </div>
                      </div>
                      <div class="proceduresInfo__item">
                        <div class="proceduresInfo__row">
                          <div class="proceduresInfo__column">Ночь</div>
                          <div class="proceduresInfo__column">Шаг 1</div>
                          <div class="proceduresInfo__column">
                            <a href="#">Q84 Очищающее молочко</a>
                          </div>
                        </div>
                        <div class="proceduresInfo__row">
                          <div class="proceduresInfo__column"></div>
                          <div class="proceduresInfo__column">Шаг 2</div>
                          <div class="proceduresInfo__column">
                            <a href="#">Q89 Активирующий гель </a>
                          </div>
                        </div>
                        <div class="proceduresInfo__row">
                          <div class="proceduresInfo__column"></div>
                          <div class="proceduresInfo__column">Шаг 3</div>
                          <div class="proceduresInfo__column">
                            <a href="#">Q60 Маска 5-Fx</a>
                          </div>
                        </div>
                        <div class="proceduresInfo__row">
                          <div class="proceduresInfo__column"></div>
                          <div class="proceduresInfo__column">Шаг 4</div>
                          <div class="proceduresInfo__column">
                            <a href="#">Q85 Молекулярная вода</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
            </article>
          </div>
        </div>
      </div>