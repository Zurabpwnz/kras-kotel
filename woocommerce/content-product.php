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
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<article <?php wc_product_class( 'product-item', $product ); ?>>
    <div class="product-item__top">
		<?php if ( get_field( 'is_hit', $product->ID ) === 1 ) : ?>
            <div class="product-item__sticker">Хит</div>
		<?php endif; ?>
        <img src="<?php echo get_the_post_thumbnail_url( $product->ID ); ?>"
             alt="vulcan eko котел">
    </div>
    <div class="product-item__middle">

		<?php if ( $product->stock_status === 'instock' ) {
			echo '<div class="product-item__available">В наличии</div>';
		} else {
			echo '<div class="product-item__available product-item__available_not">Не наличии</div>';
		} ?>

        <h4 class="product-item__title"><?php echo get_the_title( $product->ID ); ?></h4>
        <ul class="product-item__property">
            <li><?php
				$values = get_the_terms( $product->ID, 'pa_tip' );
				foreach ( $values as $value ) {
					echo $value->name;
				}
				?></li>
            <li>Мощность: <?php
				$values = get_the_terms( $product->ID, 'pa_moshhnost' );
				foreach ( $values as $value ) {
					echo $value->name;
				}
				?>
            </li>
        </ul>
        <div class="product-item__price">
			<?php
			$price = $product->get_regular_price();
			$sale  = $product->get_sale_price();

			if ( ! empty( $sale ) ) {
				echo 'от ' . $sale . ' ₽';
			} else {
				echo 'от ' . $price . ' ₽';
			}
			?>
        </div>
    </div>
    <div class="product-item__bottom">
        <a href="<?php echo get_the_permalink( $product->ID ); ?>"
           class="btn">Подробнее</a>
        <a href="#" class="more-link">Узнать цену</a>
    </div>
</article>
