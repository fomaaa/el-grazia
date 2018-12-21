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
        <div class="section section--article">
          <div class="container section__inner">
            <article>
                <?php
                  while ( have_posts() ) :
                    the_post();

                            the_content(); 
                  endwhile; 
                ?>
            </article>
            <ul class="tagsList">
              <?php 
              $block = get_the_tags();
              if ($block):
                foreach($block as $item) :
              ?>
                <li class="tagsList__item">
                  <a href="<?php echo get_tag_link($item->term_id) ?>" class="tag"><?php echo $item->name?></a>
                </li>
              <?php endforeach; endif; ?>
            </ul>
          </div>
        </div>
      </div>