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


<?php

$args         = [
	'taxonomy' => 'product_cat'
];
$categories   = get_categories( $args );
$postParentIn = [];

foreach ( $categories as $item_cat ) {
	$postParentIn[] = $item_cat->term_id;
	?>

    <section class="catalog">
        <div class="container">
            <div class="group-title">
                <h3 class="title title-h3"><?php echo $item_cat->name; ?></h3>
                <a href="<?php echo get_category_link( $item_cat->term_id ); ?>" class="more-link">Перейти в каталог</a>
            </div> <!-- group-title -->

            <div class="col col-3">
				<?php
				// Выполнение запроса по категориям и атрибутам
				$args = array(
					// Использование аргумента tax_query для установки параметров терминов таксономии
					'tax_query'      => array(
						// Использование нескольких таксономий требует параметр relation
						'relation' => 'AND',
						// значение AND для выборки товаров принадлежащим одновременно ко всем указанным терминам
						// массив для категории имеющей слаг slug-category-1
						array(
							'taxonomy' => 'product_cat',
							'field'    => 'id',
							'terms'    => $item_cat->term_id
						),
					),
					// Параметры отображения выведенных товаров
					'posts_per_page' => 3, // количество выводимых товаров
					'post_type'      => 'product', // тип товара
					'orderby'        => 'title', // сортировка
				);

				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
					global $product;
					?>

                    <article class="product-item">
                        <div class="product-item__top">

	                        <?php if ( get_field( 'is_hit', $post->ID) == 1 ) : ?>
                                <div class="product-item__sticker">Хит</div>
	                        <?php endif; ?>

                            <?php
							if ( has_post_thumbnail( $loop->post->ID ) ) {
								echo get_the_post_thumbnail( $loop->post->ID, 'shop_catalog' );
							} else {
								echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" width="250px" height="250px" />';
							}
							?>

                        </div>
                        <div class="product-item__middle">

							<?php
							if ( $product->stock_status == 'instock') {
								echo '<div class="product-item__available">В наличии</div>';
							} else {
								echo '<div class="product-item__available product-item__available_not">Нет в наличии</div>';
							}
							?>

                            <h4 class="product-item__title"><?php the_title(); ?></h4>
                            <ul class="product-item__property">
                                <li><?php
		                            $values = get_the_terms( $post->ID, 'pa_tip' );
		                            foreach ( $values as $value ) {
			                            echo $value->name;
		                            }
		                            ?></li>
                                <li>Мощность: <?php
		                            $values = get_the_terms( $post->ID, 'pa_moshhnost' );
		                            foreach ( $values as $value ) {
			                            echo $value->name;
		                            }
		                            ?>
                                </li>
                            </ul>
                            <div class="product-item__price">от <?php echo $product->get_price_html(); ?></div>
                        </div>
                        <div class="product-item__bottom">
                            <a href="<?php echo get_permalink( $loop->post->ID ) ?>" class="btn">Подробнее</a>
                            <a href="#" class="more-link">Узнать цену</a>
                        </div>
                    </article>

				<?php endwhile; ?>
                <!-- Сброс данных запроса -->
				<?php wp_reset_query(); ?>
            </div
        </div> <!-- contaienr -->
    </section>

	<?php
}

?>


<?php
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
