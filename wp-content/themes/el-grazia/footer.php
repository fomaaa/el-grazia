      <footer class="footer">
        <div class="footer__top">
          <div class="container">
            <div class="footer__inner">
              <div class="footer__left">
            <nav class="nav">
              <ul class="menu js-splitter" data-columns="2" data-direction="horizontal">
                <?php
                 $menu = get_field('main_menu', 'option'); 

                 foreach ($menu as $key => $item) : ?>
                    <li class="menu__item">
                      <a href="<?php the_permalink($item['page']) ?>" class="menu__link"> <?php echo $item['name'] ?></a>
                    </li>
                 
                <?php endforeach; ?>
              </ul>
            </nav>              </div>
              <div class="footer__center">
                <div class="logo">
                  <a href="/">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="170px" height="62px" viewBox="0 0 172.5 65.2">
                      <defs>
                      </defs>
                      <g>
                        <path class="st0" d="M51.4,29.8V0h16.1v1.9H53.8v11.8h13.3v1.9H53.8v12.1h14.1v2H51.4z" />
                        <path class="st0" d="M21.6,52.8c-0.2-1-0.3-2-0.3-3c0-2.3,0.5-4.3,1.5-6.3c1-1.9,2.4-3.5,4.3-4.7c1.1-0.7,2.3-1.3,3.6-1.6
		c1.3-0.4,2.6-0.6,4-0.6c1.6,0,3.2,0.3,4.9,0.8c1.7,0.5,3.6,1.3,5.6,2.4v-2.5c-1.8-0.9-3.6-1.6-5.3-2.1c-1.7-0.5-3.4-0.7-5.1-0.7
		c-2.2,0-4.3,0.4-6.3,1.1c-1.9,0.8-3.7,1.9-5.2,3.4c-1.5,1.4-2.6,3-3.4,4.9c-0.8,1.9-1.2,3.8-1.2,5.8c0,1.2,0.1,2.4,0.4,3.6
		C19.9,53.1,20.8,52.9,21.6,52.8z" />
                        <path class="st0" d="M139.7,51.7l5.5-12.9l5.7,13.5l0.6,1.4c0.9,0.2,1.8,0.3,2.6,0.5L145.6,35h-1l-7.2,16.4
		C138.2,51.5,139,51.6,139.7,51.7z" />
                        <path class="st0" d="M128.8,50.3V35h-2.6v15C127.1,50.1,127.9,50.2,128.8,50.3z" />
                        <path class="st0" d="M110,48.2c0.9,0.1,1.9,0.1,2.8,0.2l10.5-12.6V35H98.4v1.9h21L110,48.2z" />
                        <path class="st0" d="M81.5,47.2l3.5-8.4l3.5,8.4c0.7,0,1.5,0,2.3,0L85.5,35h-1l-5.4,12.3C80,47.2,80.8,47.2,81.5,47.2z" />
                        <path class="st0" d="M65.9,36.9c-1.7-1.3-4.1-1.9-7.2-1.9h-7.2v13.9c0.8-0.1,1.6-0.1,2.4-0.2v-0.3v-1.4V37h5c2.2,0,4,0.5,5.2,1.4
		c1.2,0.9,1.8,2.3,1.8,4c0,1.3-0.3,2.3-0.8,3.2c-0.5,0.9-1.4,1.5-2.4,2c-0.4,0.2-0.9,0.4-1.5,0.5c5.6,0,7.4-3.9,7.4-5.7
		C68.4,40,67.5,38.2,65.9,36.9z" />
                        <path class="st0" d="M86.2,51.2c34.6,0,65.5,4.4,86.2,11.2c-19.4-7.9-50.8-13.1-86.2-13.1c-35.4,0-66.8,5.2-86.2,13.1
		C20.7,55.6,51.7,51.2,86.2,51.2z" />
                        <path class="st0" d="M42.7,53.6v7.4c-1.5,0.6-2.9,1.1-4.2,1.5c-1.3,0.3-2.6,0.5-3.9,0.5c-1.9,0-3.7-0.3-5.3-1
		c-1.6-0.7-3.1-1.6-4.3-2.9c-0.7-0.8-1.4-1.6-1.9-2.5c-0.9,0.2-1.7,0.3-2.6,0.5c1.2,2.2,2.9,4,5,5.4c1.3,0.9,2.8,1.5,4.3,2
		c1.5,0.4,3.2,0.7,4.9,0.7c1.7,0,3.4-0.2,5.1-0.7c1.7-0.5,3.5-1.1,5.3-2.1v-9C44.3,53.5,43.5,53.6,42.7,53.6z" />
                        <path class="st0" d="M51.4,52.7v11.9h2.4V52.5C53,52.6,52.2,52.7,51.4,52.7z" />
                        <path class="st0" d="M65.4,52.1c-0.1-0.1-0.2-0.2-0.3-0.4c-1,0.1-2,0.1-2.9,0.2c0.4,0.4,0.9,1,1.5,1.9c0.7,0.9,1.5,2.1,2.4,3.5
		l4.7,7.3h0.3h2.4l-1.5-2.2L65.4,52.1z" />
                        <path class="st0" d="M77.3,51.3l-5.2,12l0.7,1.4h1.3l4.4-10.3l0.8-2l0.4-1C78.9,51.3,78.1,51.3,77.3,51.3z" />
                        <path class="st0" d="M90.2,51.2l0.4,1.1l0.8,2l4.4,10.3h1.8h0.2v-1.2l-5.2-12.1C91.8,51.2,91,51.2,90.2,51.2z" />
                        <path class="st0" d="M110,51.9c-1-0.1-1.9-0.1-2.9-0.2l-9.7,11.6v1.2h0.5h25.4v-2.1h-22.2L110,51.9z" />
                        <path class="st0" d="M126.2,53.3v11.4h2.6V53.5C127.9,53.4,127.1,53.3,126.2,53.3z" />
                        <path class="st0" d="M136.2,54.5l-4.4,10.2h2.5l4.2-9.8C137.7,54.7,136.9,54.6,136.2,54.5z" />
                        <path class="st0" d="M153,57.3l3.1,7.3h2.5l-2.9-6.7C154.8,57.7,153.9,57.5,153,57.3z" />
                        <g>
                          <path class="st0" d="M109.6,3.5l3.8,8.9c0.7,0,1.4,0,2.2,0L110.1,0h-1l-5.5,12.4c0.9,0,1.5,0,2.2,0L109.6,3.5z" />
                          <path class="st0" d="M116.6,14.6c-1.9,0-3.9,0-5.8,0c-2.8,0-5.4,0-8.1,0.1L96,29.8h2.6l5.6-13.3c2.2,0,4.4-0.1,6.6-0.1
			c1.4,0,3,0,4.4,0l5.6,13.3h2.5L116.6,14.6z" />
                        </g>
                        <polygon class="st0" points="73.4,27.8 73.4,0 73.3,0 70.9,0 70.9,29.8 87.4,29.8 87.4,27.8 	" />
                        <rect x="90.5" class="st0" width="2.5" height="29.8" />
                      </g>
                    </svg>
                  </a>
                </div>
                <div class="footer__wrapper">
                  <ul class="socialsList">
                    <li class="socialsList__item">
                      <a href="<?php the_field("contact_instagram", 'option'); ?>" target="_blank" class="social">
                        <svg class="icon icon-instagram">
                          <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-instagram"></use>
                        </svg>
                      </a>
                    </li>
                    <li class="socialsList__item">
                      <a href="<?php the_field("contact_facebook", 'option'); ?>" target="_blank" class="social">
                        <svg class="icon icon-facebook">
                          <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-facebook"></use>
                        </svg>
                      </a>
                    </li>
                    <li class="socialsList__item">
                      <a href="<?php the_field("contact_youtube", 'option'); ?>" target="_blank" class="social">
                        <svg class="icon icon-youtube">
                          <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-youtube"></use>
                        </svg>
                      </a>
                    </li>
                  </ul>
                  <div class="mailLink">
                    <a href="<?php the_field("contact_email", 'option'); ?>"><?php the_field("contact_email", 'option'); ?></a>
                  </div>
                </div>
              </div>
              <div class="footer__right">
                <div class="location location--column">
                  <div class="location__title"> Центральныйофис </div>
                  <div class="location__info">
                    <a href="tel:<?php echo str_replace(" ","", get_field("central_phone", 'option')); ?>" class="location__phone"><?php the_field("central_phone", 'option'); ?></a>
                    <div class="location__place">
                      <span> <?php the_field("central_adress", 'option'); ?> </span>
                      <a  href="#mapModal" class="js-locationModal-centerOffice">Показать на карте</a>
                    </div>
                  </div>
                </div>
                <div class="location location--column">
                  <div class="location__title"> Обучающий центр </div>
                  <div class="location__info">
                    <a href="tel:<?php echo str_replace(" ","", get_field("study_phone", 'option')); ?>" class="location__phone"> <?php the_field("study_phone", 'option'); ?></a>
                    <div class="location__place">
                      <span> <?php the_field("study_adress", 'option'); ?> </span>
                      <a href="#mapModal" class="js-locationModal-studyOffice">Показать на карте</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer__bottom">
          <div class="container footer__inner">
            <div class="footer__left">
              <div class="textBlock textBlock--xs">
              <div class="textBlock textBlock--xs">
                <p>© 2010–<?php echo date('Y') ?> Elia Grazia.</p>
                <p>Все права защищены.</p>
              </div>
              </div>
              <div class="textBlock textBlock--xs">
                <p>  <a href="/privacy-policy/"><?php the_field("text", 'option'); ?> </a></p>
              </div>
            </div>
            <div class="footer__right">
              <div class="mailLink">
                <a href="mailto:<?php the_field("contact_email", 'option'); ?>"><?php the_field("contact_email", 'option'); ?></a>
              </div>
              <div class="dev">
                <a href="http://zendesign.ru/" target="_blank">
                  <span> Сделано<br> в ДзенДизайн </span>
                  <img src="<?php echo get_template_directory_uri() ?>/img/dev.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <div class="menuBox">
        <div class="menuBox__top">
            <nav class="nav">
                <ul class="menu js-splitter" data-columns="2" data-direction="horizontal">
                <?php
                 $menu = get_field('main_menu', 'option'); 

                 foreach ($menu as $key => $item) : ?>
                    <li class="menu__item <?php if ($item['page'] == 313 || !empty($item['add_menu'])) echo 'menu__parent' ?>">
                      <a href="<?php the_permalink($item['page']) ?>" class="menu__link"> <?php echo $item['name'] ?></a>
                      <?php if ($item['page'] == 313) : ?>
                      <ul class="menuChild">
                        <?php 
                          $prod_terms = get_terms('hierarchical=1&taxonomy=product_cat&hide_empty=0&orderby=id&parent=0');
                          foreach ($prod_terms as $prod_term) :


                        ?>
                          <li class="menuChild__item">
                            <a href="<?php echo get_term_link($prod_term); ?>"><?php echo  $prod_term->name ?></a>
                            <ul class="subMenu">
                              <?php $child_terms = get_terms('hierarchical=1&taxonomy=product_cat&hide_empty=0&orderby=id&parent=' . $prod_term->term_id); ?>
                              <?php foreach ($child_terms as $child_term) : ?>
                              <li class="subMenu__item">
                                <a href="<?php echo get_term_link($child_term); ?>"><?php echo $child_term->name ?></a>
                                <ul class="subMenu">
                                  <?php 
                                    $lastChilds = get_terms('hierarchical=1&taxonomy=product_cat&hide_empty=0&orderby=id&parent=' . $child_term->term_id);
                                    if ($lastChilds) :
                                    foreach  ($lastChilds as $lastChild) :
                                  ?>
                                    <li class="subMenu__item">
                                      <a href="<?php echo get_term_link($lastChild) ?>"><?php echo $lastChild->name; ?></a>
                                    </li>
                                  <?php endforeach; endif; ?>
                                </ul>
                              </li>
                              <?php endforeach; ?>
      
                            </ul>
                          </li>
                        <?php endforeach; ?>
                      </ul>
                    <?php  elseif (!empty($item['add_menu'])) : ?>
                      <ul class="menuChild">
                      <?php foreach ($item['add_menu'] as $subItem) : ?>
                            <li class="menuChild__item">
                              <a href="<?php echo get_the_permalink($subItem['page']); ?>"><?php echo  $subItem['name'] ?></a>
                            </li>
                      <?php endforeach; ?>
                      </ul>
                    <?php endif; ?>
                    </li>
                 
                <?php endforeach; ?>
              </ul>
            </nav>
          </div>
        <div class="menuBox__bottom">
          <div class="location">
            <div class="location__title"> Центральный офис </div>
            <div class="location__info">
              <a href="tel:<?php echo str_replace(" ","", get_field("central_phone", 'option')); ?>" class="location__phone"><?php the_field("central_phone", 'option'); ?></a>
              <a href="#" class="location__place">Показать на карте</a>
            </div>
          </div>
          <div class="location">
            <div class="location__title"> Обучающий центр </div>
            <div class="location__info">
              <a href="tel:<?php echo str_replace(" ","", get_field("study_phone", 'option')); ?>" class="location__phone"><?php the_field("study_phone", 'option'); ?></a>
              <a href="#" class="location__place">Показать на карте</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div id="mapModal" class="mapModal" style="display: none;">
      <div id="modal-map"></div>
    </div>
    <!-- END content -->
    <script>
      var ajax_url = '<?php echo admin_url('admin-ajax.php'); ?>';
    </script>
    <script>
      var centerOffice = {
        coords: [<?php the_field('c_coord', '39') ?>]
      };
      var studyOffice = {
        coords: [<?php the_field('o_coord', '39') ?>]
      };

    </script>
    <!-- BEGIN scripts -->
    <script src="http://api-maps.yandex.ru/2.0/?lang=ru-RU&load=package.full"></script>
    <?php wp_footer(); ?>
    <script src="<?php echo get_template_directory_uri() ?>/js/app.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/custom.js"></script>
    <script>
      (function()
      {
        ymaps.ready(function()
        {
          var myMap, myPlacemark;

          function handlerMap(coords)
          {
            myMap = new ymaps.Map('modal-map',
            {
              center: coords,
              zoom: 16
            });
            var myPlacemark = new ymaps.Placemark(coords,
            {
              balloonContent: '123'
            },
            {
              // iconImageHref: '/assets/templates/main/img/map-ico2.png', // link image icon
              // iconImageSize: [100, 50], // size image
              // iconImageOffset: [-80, -60] // position image
            });
            // add balloon to map
            myMap.geoObjects.add(myPlacemark);
            myMap.controls.add('zoomControl',
            {
              top: 5,
              right: 5
            }); // add zoom control to map, and positon
            myMap.controls.add('miniMap',
            {
              bottom: 5,
              left: 5
            }); // add mini map
            myMap.controls.add('routeEditor',
            {
              top: 5,
              left: 5
            }); // add route Editor
          }
          $('.js-locationModal-centerOffice').fancybox(
          {
            autoSize: false,
            closeClick: false,
            afterShow: function()
            {
              handlerMap(centerOffice.coords)
            },
            afterClose: function()
            {
              myMap.destroy();
              myMap = null;
            }
          });
          $('.js-locationModal-studyOffice').fancybox(
          {
            autoSize: false,
            closeClick: false,
            afterShow: function()
            {
              handlerMap(studyOffice.coords)
            },
            afterClose: function()
            {
              myMap.destroy();
              myMap = null;
            }
          });
        });
      }());

    </script>
    <!-- END scripts -->
    <!-- Yandex.Metrika informer -->
<a href="https://metrika.yandex.ru/stat/?id=27121013&amp;from=informer"
target="_blank" rel="nofollow"><img src="https://informer.yandex.ru/informer/27121013/3_1_FFFFFFFF_EFEFEFFF_0_pageviews"
style="width:88px; height:31px; border:0;" alt="Яндекс.Метрика" title="Яндекс.Метрика: данные за сегодня (просмотры, визиты и уникальные посетители)" class="ym-advanced-informer" data-cid="27121013" data-lang="ru" /></a>
<!-- /Yandex.Metrika informer -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

ym(27121013, "init", {
id:27121013,
clickmap:true,
trackLinks:true,
accurateTrackBounce:true,
webvisor:true
});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/27121013" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '363966524436393');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=363966524436393&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '733416030363599');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=733416030363599&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?160",t.onload=function(){VK.Retargeting.Init("VK-RTRG-330227-atPbK"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-330227-atPbK" style="position:fixed; left:-999px;" alt=""/></noscript>
  </body>

</html>
