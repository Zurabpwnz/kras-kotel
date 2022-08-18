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

$taxonomy     = 'product_cat';
$orderby      = 'name';
$show_count   = 0;      // 1 for yes, 0 for no
$pad_counts   = 0;      // 1 for yes, 0 for no
$hierarchical = 1;      // 1 for yes, 0 for no
$title        = '';
$empty        = 0;
$args         = [
	'taxonomy'     => $taxonomy,
	'orderby'      => $orderby,
	'show_count'   => $show_count,
	'pad_counts'   => $pad_counts,
	'hierarchical' => $hierarchical,
	'title_li'     => $title,
	'hide_empty'   => $empty
];

$categories = get_categories( $args );

foreach ( $categories as $item_cat ) {
	if ( $item_cat->category_parent == 0 ) { ?>

        <section class="catalog">
            <div class="container">
                <div class="group-title">
                    <h3 class="title title-h3"><?php echo $item_cat->name; ?></h3>
                    <a href="<?php echo get_category_link( $item_cat->term_id ); ?>" class="more-link">Перейти в
                        каталог</a>
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

						<? get_template_part('inc/product-item'); ?>

					<?php endwhile; ?>
                    <!-- Сброс данных запроса -->
					<?php wp_reset_query(); ?>
                </div
            </div> <!-- contaienr -->
        </section>

		<?php
	}
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
