<?php get_header(); ?>
<?php if (is_shop()) : 
	global $post;
	$prod_terms = get_terms('hierarchical=1&taxonomy=product_cat&hide_empty=0&orderby=id&parent=0')
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
        <div class="section section--catalog">
          <div class="container section__inner">
            <div class="section__title"> Продукция </div>
            <div class="grid gridDesktop--3 gridTablet--2">
            	<?php foreach ($prod_terms as $prod_term) : ?>
            		<?php if ($prod_term->parent == "0") : ?>
            			<?php 
            			$thumb_id = get_woocommerce_term_meta( $prod_term->term_id, 'thumbnail_id', true );
						      $term_img = wp_get_attachment_url(  $thumb_id ); 
						?>
		              <div class="grid__item">
		                <div class="card card--product">
		                  <a href="<?php echo get_term_link($prod_term) ?>" class="card__link"></a>
		                  <div class="card__photo" style="background-image: url('<?php echo $term_img; ?>');"></div>
		                  <div class="card__title"><?php echo  $prod_term->name ?></div>
		                </div>
		              </div>
	         		 <?php endif ?>
          		<?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>

<?php else :?>
  <?php if (!is_product()) : ?>
    <?php 
      $cate = get_queried_object();
      $cateID = $cate->term_id;

      $current_cat = get_terms('hierarchical=1&hide_empty=0&taxonomy=product_cat&term_taxonomy_id='. $cateID);
      $tree = getProductCatTree($current_cat[0]->term_taxonomy_id);
      $tree = array_reverse($tree);


      if (!empty($current_cat[0]->parent)) {
        $parent_cat = get_term($current_cat[0]->parent);
        $parent_cat_id = $parent_cat->parent;
      } else {
           $parent_cat_id = $current_cat[0]->term_id;
      }
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
        <div class="section section--catalog">
          <div class="container section__inner">
            <div class="section__title" data-counter="<?php if (!empty($current_cat[0])) : echo $current_cat[0]->count; else : echo 0 ; endif?>"><?php echo single_cat_title(); ?> </div>
            <div class="section__left">
              <div class="filter">
                <button type="button" class="filter__title">
                  <span>Фильтр</span>
                  <span class="arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 10 6" width="10px" height="6px">
                      <path fill-rule="evenodd" fill="rgb(210, 210, 210)" d="M0.000,1.493 L5.000,6.000 L10.000,1.493 L8.366,0.000 L5.000,3.035 L1.633,0.000 L0.000,1.493 Z" />
                    </svg>
                  </span>
                </button>
                <div class="filterMobile">
                  <?php   
                    $prod_terms = get_terms('hierarchical=1&taxonomy=product_cat&hide_empty=0&orderby=id&parent=' . $tree[0]);
                    foreach ($prod_terms as $prod_term) :
                  ?>
                    <div class="subCategory">
                      <a href="javascript:void(0)" data-id="<?php echo $prod_term->term_id; ?>" class="subCategory__title" role="button"> <?php echo $prod_term->name ?> </a>
                      <ul>
                        <?php $child_terms = get_terms('hierarchical=1&taxonomy=product_cat&hide_empty=0&orderby=id&parent=' . $prod_term->term_id) ; ?>
                        <?php foreach ($child_terms as $child_term) : 
                          $lastChilds = get_terms('hierarchical=1&taxonomy=product_cat&hide_empty=0&orderby=id&parent=' . $child_term->term_id);
                        ?>
                        <li>
                          <a href="<?php echo get_term_link($child_term->term_id) ?>" data-id="<?php echo $child_term->term_id; ?>" class=""><?php echo $child_term->name ?></a>
                        </li>
                        <?php endforeach; ?>
                      </ul>
                    </div>
                 <?php endforeach; ?>
                </div>
                <div class="filter__body">
                  <?php   
                    $prod_terms = get_terms('hierarchical=1&taxonomy=product_cat&hide_empty=0&orderby=id&parent=0');
                    foreach ($prod_terms as $prod_term) :
                  ?>
                    <div class="filter__item">
                      <div class="category">
                        <a href="" role="button" data-id="<?php echo $prod_term->term_id ?>" class="category__title <?php if($prod_term->term_id == $tree[0]) echo 'is-active'; ?>">
                          <span><?php echo  $prod_term->name ?></span>
                          <span class="arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 10 6" width="10px" height="6px">
                              <path fill-rule="evenodd" fill="rgb(210, 210, 210)" d="M0.000,1.493 L5.000,6.000 L10.000,1.493 L8.366,0.000 L5.000,3.035 L1.633,0.000 L0.000,1.493 Z" />
                            </svg>
                          </span>
                        </a>
                        <?php $child_terms = get_terms('hierarchical=1&taxonomy=product_cat&hide_empty=0&orderby=id&parent=' . $prod_term->term_id) ; ?>
                        <?php foreach ($child_terms as $child_term) : 
                          $lastChilds = get_terms('hierarchical=1&taxonomy=product_cat&hide_empty=0&orderby=id&parent=' . $child_term->term_id);
                        ?>
                        <div class="subCategory" style="<?php if($prod_term->term_id == $tree[0]) echo 'display: block'; ?>">
                          <a href="<?php if (!$lastChilds) : echo  get_term_link($child_term); else : echo 'javascript:void(0)'; endif; ?>)" class="subCategory__title <?php if($child_term->term_id == $tree[1]) echo 'is-active'; ?>" role="button" data-id="<?php echo $child_term->term_id ?>"> <?php echo $child_term->name ?> </a>
                          <?php if($lastChilds) : ?>
                          <ul  style="<?php if($child_term->term_id == $tree[1]) echo 'display: block'; ?>" >
                            <?php 
                              
                              foreach ($lastChilds as $lastChild) :
                            ?>
                            <li>
                              <a class="<?php
                              if (!empty($tree[2])) {

                               if ($lastChild->term_id == $tree[2]) echo 'is-active'; 
                              }
                              ?>" data-id="<?php echo $lastChild->term_id ?>" href="<?php echo get_term_link($lastChild) ?>" role="button"><?php echo $lastChild->name; ?></a>
                            </li>
                            <?php endforeach; ?>
                          </ul>
                        <?php endif ?>
                        </div>
                        <?php endforeach; ?>
                      </div>
                    </div>

                  <?php endforeach; ?>

                </div>
              </div>
            </div>
	         <?php woocommerce_content(); ?>
          </div>
        </div>
      </div>
    <?php else : ?>
        <?php woocommerce_content(); ?>
  <?php endif; ?>
<?php endif; ?>
<?php get_footer(); ?>