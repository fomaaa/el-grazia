<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

                  <div class="grid__item">
                    <div class="card card--good">
                      <a href="<?php the_permalink(); ?>" class="card__link"></a>
                      <div class="card__photo">
                        <?php echo woocommerce_get_product_thumbnail() ?>
                      </div>
                      <div class="card__body">
                        <div class="card__title"><?php the_title(); ?></div>
                        <div class="card__subtitle"><?php the_field('subtitle') ?></div>
                      </div>
                    </div>
                  </div>