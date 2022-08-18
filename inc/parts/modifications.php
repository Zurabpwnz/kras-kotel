<?php
$modification = get_field( 'modification' );
if ( $modification ) : ?>

    <section class="popular" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <h3 class="title title-h3">Модификации</h3>

            <div class="swiper__container">
                <div class="mod__swiper swiper">
                    <div class="swiper-wrapper">

						<?php foreach ( $modification as $post ) : ?>
							<?php setup_postdata( $post );
							$product = wc_get_product( $post->ID );
							?>

                            <div class="swiper-slide">
                                <article class="product-item">
                                    <div class="product-item__top">
	                                    <?php if ( get_field( 'is_hit', $post->ID) == 1 ) : ?>
                                            <div class="product-item__sticker">Хит</div>
	                                    <?php endif; ?>
                                        <img src="<?php echo get_the_post_thumbnail_url( $post->ID ); ?>"
                                             alt="vulcan eko котел">
                                    </div>
                                    <div class="product-item__middle">

										<?php if ( $product->stock_status == 'instock' ) {
											echo '<div class="product-item__available">В наличии</div>';
										} else {
											echo '<div class="product-item__available product-item__available_not">Не наличии</div>';
										} ?>

                                        <h4 class="product-item__title"><?php echo get_the_title( $post->ID ); ?></h4>
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
                                        <div class="product-item__price">
											<?php
											$price = get_post_meta( $post->ID, '_regular_price', true );
											$sale  = get_post_meta( $post->ID, '_price', true );
											if ( ! empty( $sale ) ) {
												echo 'от ' . $sale . ' ₽';
											} else {
												echo 'от ' . $price . ' ₽<';
											}
											?>
                                        </div>
                                    </div>
                                    <div class="product-item__bottom">
                                        <a href="<?php echo get_the_permalink( $post->ID ); ?>"
                                           class="btn">Подробнее</a>
                                        <!--  -->
                                    </div>
                                </article>
                            </div>

						<?php endforeach; ?>
						<?php wp_reset_postdata(); ?>

                    </div>
                </div> <!-- popular__swiper -->
                <div class="swiper__pagination">
                    <div class="swiper__pagination-btn prev swiper__prev_brand">
                        <svg>
                            <use xlink:href="./assets/img/main-sprite.svg#arrow-left"></use>
                        </svg>
                    </div>
                    <div class="swiper__pagination-btn next swiper__next_brand">
                        <svg>
                            <use xlink:href="./assets/img/main-sprite.svg#arrow-right"></use>
                        </svg>
                    </div>
                </div>
            </div>

        </div> <!-- contaienr -->
    </section> <!-- popular -->


<?php endif; ?>