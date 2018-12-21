<?php
/**
 * Product Loop End
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/loop/loop-end.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
      $category = single_term_title("", false);;
      $current_cat = get_terms('hierarchical=1&hide_empty=0&taxonomy=product_cat&slug='. $category);
?>
              </div>
                <div class="grid__bottom">
                	<?php if ($current_cat[0]->count > 6) : ?>
                  <a href="#" id="load_more" data-category="<?php echo $current_cat[0]->term_id ?>" class="btn btn--primary"><span>Показать еще</span></a>
              	<?php endif; ?>
                  <a href="<?php echo get_page_link('296') ?>?type=price" class="btn btn--secondary"><span>Узнать стоимость</span></a>
                </div>
            </div>