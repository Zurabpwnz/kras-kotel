<? 
/* Template Name: Brand */
get_header();?>


    <main class="main">

        <div class="container">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
        </div>

        <section class="seo-text">
            <div class="container">
                <h1 class="title title-h3"><? wp_title();?></h1>
                <? the_content();?>

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

            </div> <!--contaienr -->
        </section> <!-- seo-text -->
        <div class="contact">
            <div class="container">

                <div class="col col-2-1">
                    <div class="column">
                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A0b24ce98ed1d7e30e64e28050198aa1234ace78ac1cb3c93743d0414da14f1b5&amp;width=100%25&amp;height=331&amp;lang=ru_RU&amp;scroll=true"></script>
                    </div>
                    <div class="column column-grid">
                        <div class="header-main__address header-main__address_page">
                            <svg class="icon icon-address"><use xlink:href="<?php bloginfo('template_url') ?>/assets/img/main-sprite.svg#address-primary"></use></svg>
                            <p>660048, г. Красноярск, <span>ул. Караульная, д. 31, оф. 3-03</span></p>
                        </div>
                        
                        <div class="contact__call">
                            <a href="tel:+7 (391) 219 14 55" class="contact__phone">
                                <svg><use xlink:href="<?php bloginfo('template_url') ?>/assets/img/main-sprite.svg#phone-primary"></use></svg>
                                +7 (391) 219 14 55</a>
                            <a href="mailto:info@kras-kotel.ru" class="contact__email">info@kras-kotel.ru</a>
                        </div>

                        <div class="contact__social">
                            <p class="contact__time-online">Мы Online, спрашивайте</p>
                            <ul class="contact__social-list">
                                <li><a href="#"><svg><use xlink:href="<?php bloginfo('template_url') ?>/assets/img/main-sprite.svg#telegram"></use></svg></a></li>
                                <li><a href="#"><svg><use xlink:href="<?php bloginfo('template_url') ?>/assets/img/main-sprite.svg#whatsapp"></use></svg></a></li>
                                <li><a href="#"><svg><use xlink:href="<?php bloginfo('template_url') ?>/assets/img/main-sprite.svg#vk"></use></svg></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
    
<? get_footer();?>