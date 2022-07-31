<?
/* Template Name: Главная */
get_header('main'); ?>

    <main class="main">
        <? get_template_part('inc/bullets'); ?>

        <section class="popular" data-aos="fade-up" data-aos-duration="1000">
            <div class="container">
                <div class="group-title">
                    <h3 class="title title-h3">Популярные товары</h3>
                    <a href="#" class="more-link">Перейти в каталог</a>
                </div> <!-- group-title -->
                <div class="swiper__container">
                    <div class="popular__swiper swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <article class="product-item">
                                    <div class="product-item__top">
                                        <div class="product-item__sticker">Хит</div>
                                        <img src="<?php bloginfo('template_url') ?>/assets/img/product.png" alt="vulcan eko котел">
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
                            <div class="swiper-slide">
                                <article class="product-item">
                                    <div class="product-item__top">
                                        <div class="product-item__sticker">Хит</div>
                                        <img src="<?php bloginfo('template_url') ?>/assets/img/product.png" alt="vulcan eko котел">
                                    </div>
                                    <div class="product-item__middle">
                                        <div class="product-item__available product-item__available_not">Не наличии</div>
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
                            <div class="swiper-slide">
                                <article class="product-item">
                                    <div class="product-item__top">
                                        <div class="product-item__sticker">Хит</div>
                                        <img src="<?php bloginfo('template_url') ?>/assets/img/product.png" alt="vulcan eko котел">
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
                            <div class="swiper-slide">
                                <article class="product-item">
                                    <div class="product-item__top">
                                        <div class="product-item__sticker">Хит</div>
                                        <img src="<?php bloginfo('template_url') ?>/assets/img/product.png" alt="vulcan eko котел">
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
                            
                        </div>
                    </div> <!-- popular__swiper -->
                    <div class="swiper__pagination">
                        <div class="swiper__pagination-btn swiper__prev"><svg><use xlink:href="<?php bloginfo('template_url') ?>/assets/img/main-sprite.svg#arrow-left"></use></svg></div>
                        <div class="swiper__pagination-btn swiper__next"><svg><use xlink:href="<?php bloginfo('template_url') ?>/assets/img/main-sprite.svg#arrow-right"></use></svg></div>
                    </div>
                </div>

            </div> <!-- contaienr -->
        </section> <!-- popular -->


        <? get_template_part('inc/brands'); ?>

        <section class="faq" data-aos="fade-up" data-aos-duration="1000">
            <div class="container">
                <div class="group-title">
                    <h3 class="title title-h3">Ответы на вопросы</h3>
                    <a href="/voprosy-i-otvety/" class="more-link">Все вопросы</a>
                </div>

                <div class="faq__grid">
                    <?php if( have_rows('faq') ): ?>
                        <?php while( have_rows('faq') ): the_row(); ?>
                        <div class="faq__item">
                            <div class="faq__header" aria-expanded="false"><i class="faq__icon" aria-hidden="true"></i> <? the_sub_field('question')?></div>
                            <div class="faq__content"><p><? the_sub_field('answer')?></p></div>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div> <!-- container-->
        </section> <!-- faq -->
        

        <section class="seo-text">
            <div class="container">
                <h2>Какие ошибки бывают, при выборе котла отопления и системы отопления для частного дома?</h2>
                <div class="seo-text__visible seo-text__visible_off">
                    <? the_content();?>
                </div> <!-- seo-text__visible -->

            </div> <!--contaienr -->
        </section> <!-- seo-text -->

        <section class="last-news">
            <div class="container">
                <div class="group-title">
                    <h3 class="title title-h3">Последние новости</h3>
                    <a href="/stati/" class="more-link">Все новости</a>
                </div>
            </div> <!-- container -->

            <div class="container-full">
                <div class="last-news__grid">

                    <a href="https://kras-kotel.dacorn.ru/privet-mir/" class="last-news__item" style="background-image: url(<?php bloginfo('template_url') ?>/assets/img/post.png);">
                        <div class="last-news__date">02.03.2022</div>
                        <h4>Дымоходы и их разновидности</h4>
                        <button href="#" class="btn">Подробнее</button>
                    </a> <!--last-news__item-->

                    <a href="https://kras-kotel.dacorn.ru/privet-mir/" class="last-news__item" style="background-image: url(<?php bloginfo('template_url') ?>/assets/img/post2.png);">
                        <div class="last-news__date">02.03.2022</div>
                        <h4>Дымоходы и их разновидности</h4>
                        <button class="btn">Подробнее</button>
                    </a> <!--last-news__item-->

                    <a href="https://kras-kotel.dacorn.ru/privet-mir/" class="last-news__item" style="background-image: url(<?php bloginfo('template_url') ?>/assets/img/post3.png);">
                        <div class="last-news__date">02.03.2022</div>
                        <h4>Дымоходы и их разновидности</h4>
                        <button class="btn">Подробнее</button>
                    </a> <!--last-news__item-->

                </div> <!--last-news__grid-->
            </div> <!-- container-full -->
        </section> <!-- last-news-->
    </main>
    
<? get_footer(); ?>