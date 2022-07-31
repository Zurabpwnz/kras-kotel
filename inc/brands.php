<section class="brand" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        
        <div class="brand__grid">
            <div class="brand__logo">
                <img src="<?php bloginfo('template_url') ?>/assets/img/vulkan.png" alt="Vulkan атопительные котлы">
            </div>
            <div class="brand__desc">
                <h4 class="title title-h4"><? the_field('heading_brand', 'option')?></h4>
                <? the_field('desc_brand', 'option')?>
            </div>
        </div>
        <div class="swiper__container">
            <div class="swiper brand__swiper">
                <div class="swiper-wrapper">
                <?php if( have_rows('product_brand', 'option') ): ?>
                    <?php while( have_rows('product_brand', 'option') ): the_row(); ?>
                        <div class="swiper-slide">
                            <a href="<? the_sub_field('link', 'option')?>" class="product-item product-item_center">
                                <div class="product-item__top">
                                    <img src="<? the_sub_field('photo', 'option')?>" alt="vulcan">
                                </div>
                                <div class="product-item__middle">
                                    <h4 class="product-item__title"><? the_sub_field('name', 'option')?></h4>
                                </div>
                                <div class="product-item__bottom">
                                    <button class="btn">Смотреть все</button>
                                </div>
                            </a>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </div>
            <div class="swiper__pagination">
                <div class="swiper__pagination-btn prev swiper__prev_brand"><svg><use xlink:href="<?php bloginfo('template_url') ?>/assets/img/main-sprite.svg#arrow-left"></use></svg></div>
                <div class="swiper__pagination-btn next swiper__next_brand"><svg><use xlink:href="<?php bloginfo('template_url') ?>/assets/img/main-sprite.svg#arrow-right"></use></svg></div>
            </div>
        </div>

    </div> <!-- container -->
</section> <!-- brand -->