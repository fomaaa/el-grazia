<ul class="companyBrands__list grid gridDesktop--4 gridMobile--2">
  <?php 
  $block = get_field("brands", 25);

  if ($block):
    foreach($block as $item) :
  ?>
      <li class="companyBrands__item grid__item">
        <div class="card card--brand">
          <a href="<?php the_permalink($item['item']->ID); ?>" class="card__link"></a>
          <div class="card__photo">
            <img src="<?php echo get_the_post_thumbnail_url($item['item']->ID, 'medium') ?>" alt="">
          </div>
          <div class="card__body">
            <div class="card__title"><?php echo get_the_title($item['item']->ID); ?></div>
            <div class="card__subtitle"> <?php the_field("subtitle", $item['item']->ID); ?></div>
          </div>
        </div>
      </li>
  <?php endforeach; endif; ?>
</ul>