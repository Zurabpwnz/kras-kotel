<?php
/**
 * The Template for displaying products in a product category. Simply includes the archive template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/taxonomy-product-cat.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce\Templates
 * @version     4.7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header( 'shop' );
$term_object = get_queried_object();

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' ); ?>

	<section class="page-inner">
		<div class="container">
			<h1 class="title title-h3"><?php echo $term_object->name; ?></h1>

			<div class="col col-page">

				<div class="page-inner__content">
					<div class="col col-3">
						<a href="/katalog/kotly-otopleniya/avtomaticheskie-kotly/" class="product-item product-item_center">
							<div class="product-item__top">
								<img src="https://kraskotel.local/wp-content/themes/kras-kotel/assets/img/products/v1.jpeg" alt="vulcan">
							</div>
							<div class="product-item__middle">
								<h4 class="product-item__title">Vulkan EKO</h4>
							</div>
							<div class="product-item__bottom">
								<button class="btn">Смотреть все</button>
							</div>
						</a>
						<a href="/katalog/kotly-otopleniya/avtomaticheskie-kotly/" class="product-item product-item_center">
							<div class="product-item__top">
								<img src="https://kraskotel.local/wp-content/themes/kras-kotel/assets/img/products/v1.jpeg" alt="vulcan">
							</div>
							<div class="product-item__middle">
								<h4 class="product-item__title">Vulkan EKO</h4>
							</div>
							<div class="product-item__bottom">
								<button class="btn">Смотреть все</button>
							</div>
						</a>
					</div> <!-- col-3-->
					<div class="seo-text seo-text__category">

						<?php echo $term_object->description; ?>

					</div> <!-- seo-text -->

					<div class="page-inner__form">
						<div class="page-inner__form-top">
							<div class="page-inner__form-ava"><img src="https://kraskotel.local/wp-content/themes/kras-kotel/assets/img/ava.png" alt="менеджер Крас-Котел"></div>
							<p>Оставьте свои данные! Наш менеджер <span>перезвонит вам в течении 15 минут</span></p>
						</div>
						<form action="#">
							<div class="form-group form-group_col-3">
								<div class="placeholder-container">
									<input type="text" class="input-main" placeholder=" ">
									<label>Ваш номер телефона</label>
								</div>
								<div class="placeholder-container">
									<input type="text" class="input-main" placeholder=" ">
									<label>Имя</label>
								</div>
								<div class="form-btn">
									<button class="btn btn-large">Обратиться к нам</button>
									<p>Нажимая на кнопку вы соглашаетесь с <a href="#">обработкой персональных данных</a></p>
								</div>
							</div>
						</form>
					</div>

				</div> <!-- page-inner__content -->

				<aside class="aside">
					<?php
					if ( function_exists('dynamic_sidebar') ) {
						dynamic_sidebar( 'right-sidebar' );
					}
					?>

					<form action="#" class="filter" style="display: none;">
						<div class="filter__group">
							<div class="filter__label">
								Цена
							</div>
							<div class="filter__col-2">
								<input type="number" class="filter__input" placeholder="от 200">
								<input type="number" class="filter__input" placeholder="до 9000">
							</div>

							<div class="dual-range">
								<input class="dual-range__input" type="range" min="0" max="100" value="37" data-input="left">
								<input class="dual-range__input" type="range" min="0" max="100" value="67" data-input="right">
								<div class="dual-range__fill" style="left: 37%; width: 30%;"></div>
							</div>
						</div> <!-- filter__group -->

						<div class="filter__group">
							<div class="filter__label">
								Бренд
							</div>

							<div class="filter__checkbox">
								<div class="filter__checkbox-container">
									<input type="checkbox" id="brand_1" name="checkbox" class="filter__checkbox-input" checked="">
									<label for="brand_1">Наименование бренда</label>
								</div>
								<div class="filter__checkbox-container">
									<input type="checkbox" id="brand_2" name="checkbox" class="filter__checkbox-input">
									<label for="brand_2">Наименование бренда</label>
								</div>
								<div class="filter__checkbox-container">
									<input type="checkbox" id="brand_3" name="checkbox" class="filter__checkbox-input">
									<label for="brand_3">Наименование бренда</label>
								</div>
								<div class="filter__checkbox-container">
									<input type="checkbox" id="brand_4" name="checkbox" class="filter__checkbox-input">
									<label for="brand_4">Наименование бренда</label>
								</div>
							</div>
						</div> <!-- filter__group -->
						<div class="filter__group">
							<div class="filter__label">
								Тип
							</div>

							<div class="filter__checkbox">
								<div class="filter__checkbox-container">
									<input type="checkbox" id="type_1" name="checkbox" class="filter__checkbox-input" checked="">
									<label for="type_1">Автоматический</label>
								</div>
								<div class="filter__checkbox-container">
									<input type="checkbox" id="type_2" name="checkbox" class="filter__checkbox-input" checked="">
									<label for="type_2">Полуавтоматический</label>
								</div>
								<div class="filter__checkbox-container">
									<input type="checkbox" id="type_3" name="checkbox" class="filter__checkbox-input">
									<label for="type_3">Традиционный</label>
								</div>
								<div class="filter__checkbox-container">
									<input type="checkbox" id="type_4" name="checkbox" class="filter__checkbox-input">
									<label for="type_4">Промышленный</label>
								</div>
							</div>
						</div> <!-- filter__group -->

						<button type="reset" class="btn">Применить</button>
					</form>
				</aside>
			</div> <!-- col-page -->

		</div> <!-- contaienr -->
	</section>

<?php if ( woocommerce_product_loop() ) {

	/**
	 * Hook: woocommerce_before_shop_loop.
	 *
	 * @hooked woocommerce_output_all_notices - 10
	 * @hooked woocommerce_result_count - 20
	 * @hooked woocommerce_catalog_ordering - 30
	 */
	do_action( 'woocommerce_before_shop_loop' );

	woocommerce_product_loop_start();

	if ( wc_get_loop_prop( 'total' ) ) {
		while ( have_posts() ) {
			the_post();

			/**
			 * Hook: woocommerce_shop_loop.
			 */
			do_action( 'woocommerce_shop_loop' );

			wc_get_template_part( 'content', 'product' );
		}
	}

	woocommerce_product_loop_end();

	/**
	 * Hook: woocommerce_after_shop_loop.
	 *
	 * @hooked woocommerce_pagination - 10
	 */
	do_action( 'woocommerce_after_shop_loop' );
} else {
	/**
	 * Hook: woocommerce_no_products_found.
	 *
	 * @hooked wc_no_products_found - 10
	 */
	do_action( 'woocommerce_no_products_found' );
}

require get_template_directory() . '/inc/brands.php';

get_footer( 'shop' );