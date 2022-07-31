<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' );

/**
 * Hook: woocommerce_before_main_content.
 *
 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
 * @hooked woocommerce_breadcrumb - 20
 * @hooked WC_Structured_Data::generate_website_data() - 30
 */
do_action( 'woocommerce_before_main_content' ); ?>

	<section class="catalog">
		<div class="container">
			<div class="group-title">
				<h3 class="title title-h3">КОТЛЫ ОТОПЛЕНИЯ</h3>
				<a href="/kotly-otopleniya/" class="more-link">Перейти в каталог</a>
			</div> <!-- group-title -->

			<div class="col col-3">
				<article class="product-item">
					<div class="product-item__top">
						<div class="product-item__sticker">Хит</div>
						<img src="https://kraskotel.local/wp-content/themes/kras-kotel/assets/img/product.png" alt="vulcan eko котел">
					</div>
					<div class="product-item__middle">
						<div class="product-item__available">В наличии</div>
						<h4 class="product-item__title">Vulkan EKO</h4>
						<ul class="product-item__property">
							<li>Автоматические</li>
							<li>Мощность: 12-100 кВт.</li>
						</ul>
						<div class="product-item__price">от 21 560 ₽</div>
					</div>
					<div class="product-item__bottom">
						<a href="https://kras-kotel.dacorn.ru/katalog/kotly-otopleniya/avtomaticheskie-kotly/vulkan-eko/" class="btn">Подробнее</a>
						<a href="#" class="more-link">Узнать цену</a>
					</div>
				</article>
				<article class="product-item">
					<div class="product-item__top">
						<div class="product-item__sticker">Хит</div>
						<img src="https://kraskotel.local/wp-content/themes/kras-kotel/assets/img/product.png" alt="vulcan eko котел">
					</div>
					<div class="product-item__middle">
						<div class="product-item__available">В наличии</div>
						<h4 class="product-item__title">Vulkan EKO</h4>
						<ul class="product-item__property">
							<li>Автоматические</li>
							<li>Мощность: 12-100 кВт.</li>
						</ul>
						<div class="product-item__price">от 21 560 ₽</div>
					</div>
					<div class="product-item__bottom">
						<a href="https://kras-kotel.dacorn.ru/katalog/kotly-otopleniya/avtomaticheskie-kotly/vulkan-eko/" class="btn">Подробнее</a>
						<a href="#" class="more-link">Узнать цену</a>
					</div>
				</article>
				<article class="product-item">
					<div class="product-item__top">
						<div class="product-item__sticker">Хит</div>
						<img src="https://kraskotel.local/wp-content/themes/kras-kotel/assets/img/product.png" alt="vulcan eko котел">
					</div>
					<div class="product-item__middle">
						<div class="product-item__available">В наличии</div>
						<h4 class="product-item__title">Vulkan EKO</h4>
						<ul class="product-item__property">
							<li>Автоматические</li>
							<li>Мощность: 12-100 кВт.</li>
						</ul>
						<div class="product-item__price">от 21 560 ₽</div>
					</div>
					<div class="product-item__bottom">
						<a href="https://kras-kotel.dacorn.ru/katalog/kotly-otopleniya/avtomaticheskie-kotly/vulkan-eko/" class="btn">Подробнее</a>
						<a href="#" class="more-link">Узнать цену</a>
					</div>
				</article>
			</div>

		</div> <!-- contaienr -->
	</section>


<?php
if ( woocommerce_product_loop() ) {

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


/**
 * Hook: woocommerce_archive_description.
 *
 * @hooked woocommerce_taxonomy_archive_description - 10
 * @hooked woocommerce_product_archive_description - 10
 */
do_action( 'woocommerce_archive_description' );


/**
 * Hook: woocommerce_after_main_content.
 *
 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
 */
do_action( 'woocommerce_after_main_content' );

get_footer( 'shop' );
