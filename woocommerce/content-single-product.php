<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.

	return;
}
?>

<section id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
    <div class="container">
        <div class="product__grid">
            <div class="product__photo">
				<?php
				/**
				 * Hook: woocommerce_before_single_product_summary.
				 *
				 * @hooked woocommerce_show_product_sale_flash - 10
				 * @hooked woocommerce_show_product_images - 20
				 */
				do_action( 'woocommerce_before_single_product_summary' );
				?>
            </div>

            <div class="product__desc">
				<?php
				/**
				 * Hook: woocommerce_single_product_summary.
				 *
				 * @hooked woocommerce_template_single_title - 5
				 * @hooked woocommerce_template_single_rating - 10
				 * @hooked woocommerce_template_single_price - 10
				 * @hooked woocommerce_template_single_excerpt - 20
				 * @hooked woocommerce_template_single_add_to_cart - 30
				 * @hooked woocommerce_template_single_meta - 40
				 * @hooked woocommerce_template_single_sharing - 50
				 * @hooked WC_Structured_Data::generate_product_data() - 60
				 */
				do_action( 'woocommerce_single_product_summary' );
				?>
            </div>
        </div>
    </div>
</section>


<!-- Модальное окно  - Бесплатный замер*  -->
<div id="modalRequizOrder" class="modl">
    <div class="iziModal__content">
        <div class="iziModal__header">
            <h3>Оформить заявку на <?php the_title(); ?></h3>
            <i class="iziModal__close" data-izimodal-close><img
                        src="<?php bloginfo( 'template_url' ) ?>/assets/img/close.svg" alt=""></i>
        </div>
        <form action="#">
            <div class="iziModal__desc">Оставьте номер телефона и мы перезвоним вам в течении 15 минут</div>
            <div class="form-group iziModal__form">
                <div class="placeholder-container">
                    <input type="text" name="phone" class="input-main" placeholder=" ">
                    <label>Ваш номер телефона</label>
                </div>
                <div class="placeholder-container">
                    <input type="text" class="input-main" placeholder=" ">
                    <label>Имя</label>
                </div>
                <div class="placeholder-container">
                    <input type="text" class="input-main" placeholder=" ">
                    <label>Адрес доставки</label>
                </div>
                <div class="placeholder-container">
                    <input type="text" class="input-main" placeholder=" ">
                    <label>E-mail</label>
                </div>
                <div class="form-btn">
                    <button class="btn btn-large iziModal__btn">Обратиться к нам</button>
                    <p>Нажимая на кнопку вы соглашаетесь с <a href="#">обработкой персональных данных</a></p>
                </div>
            </div>
        </form>
    </div>
</div>

<?php
/**
 * Hook: woocommerce_after_single_product_summary.
 *
 * @hooked woocommerce_output_product_data_tabs - 10
 * @hooked woocommerce_upsell_display - 15
 * @hooked woocommerce_output_related_products - 20
 */
do_action( 'woocommerce_after_single_product_summary' );

do_action( 'woocommerce_after_single_product' );
