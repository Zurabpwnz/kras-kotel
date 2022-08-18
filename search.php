<? get_header();?>
    <main class="main">

        <div class="container">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
        </div>

        <section class="page-inner">
            <div class="container">
                <h1 class="title title-h3"><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Вы искали: %s', 'kras-kotel' ), '<span>' . get_search_query() . '</span>' );
					?></h1>

                <div class="col col-4">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <article class="product-item">
                            <div class="product-item__top">

								<?php if ( get_field( 'is_hit', $post->ID ) == 1 ) : ?>
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
								if ( $product->stock_status == 'instock' ) {
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
                <div class="pagination">
                <?php
                        // global $wp_query;
                        $big = 999999999; // need an unlikely integer
                        echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $wp_query->max_num_pages,
                        'prev_text' => '&laquo;',
                        'next_text' => '&raquo;'
                        ) );
                        ?>
                </div>
                <?php else: ?>
                <!-- no posts found -->
                <?php endif; ?>
                </div> <!-- col-3-->
    
            </div> <!-- contaienr -->
        </section> <!-- popular -->

    </main>
 

<? get_footer();?>