<? /* Template Name: Страница продукта */ 
get_header();?>

    <main class="main">

        <div class="container">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
        </div>

        <section class="product">
            <div class="container">
                <div class="product__grid">
                    <div class="product__photo">
                        <img src="<?php bloginfo('template_url') ?>/assets/img/product.png" alt="">
                    </div>

                    <div class="product__desc">
                        <div class="product-item__available">В наличии</div>
                        <h1>Vulkan EKO</h1>
                        <ul class="product__property">
                            <li><span>Производитель:</span> Vulkan</li>
                            <li><span>Страна производитель: Россия</li>
                            <li><span>Тип:</span> Автоматический</li>
                            <li><span>Мощность:</span> 12-100 кВт.</li>
                            <li><span>Основное топливо:</span> Измельченный уголь, Эко-горошек, Орешек, Уголь фракционный</li>
                            <li><span>Резервное топливо:</span> Уголь, Дрова, Пеллеты, Брикеты</li>
                            <li><span>Назначение:</span> Для дома, Для дачи, Для предприятия</li>
                            <li><span>КПД:</span> 90 %</li>
                            <li><span>Давление:</span> 3 бар</li>
                            <li><span>Напряжение:</span> 220 В.</li>
                            <li><span>Потребляемая мощность:</span> 350 Вт.</li>
                            <li><span>Температура теплоносителя:</span> 90 °C</li>
                        </ul>
                        <div class="product__price">от 21 560 ₽</div>
                        <a href="#" class="btn btn-large" data-izimodal-open="#modalRequiz">Получить консультацию</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="seo-text">
            <div class="container">
                <h2>Описание</h2>
                <div class="seo-text__visible">
                    <? the_content();?>
                </div> <!-- seo-text__visible -->

            </div> <!--contaienr -->
        </section> <!-- seo-text -->

        <section class="popular" data-aos="fade-up" data-aos-duration="1000">
            <div class="container">
                <h3 class="title title-h3">Модификации</h3>
            
                <div class="swiper__container">
                    <div class="mod__swiper swiper">
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
                                        <a href="#" class="btn">Подробнее</a>
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
                                        <a href="#" class="btn">Подробнее</a>
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
                                        <a href="#" class="btn">Подробнее</a>
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
                                        <a href="#" class="btn">Подробнее</a>
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
                                        <a href="#" class="btn">Подробнее</a>
                                        <a href="#" class="more-link">Узнать цену</a>
                                    </div>
                                </article>
                            </div>
                            
                        </div>
                    </div> <!-- popular__swiper -->
                    <div class="swiper__pagination">
                        <div class="swiper__pagination-btn prev swiper__prev_brand"><svg><use xlink:href="<?php bloginfo('template_url') ?>/assets/img/main-sprite.svg#arrow-left"></use></svg></div>
                        <div class="swiper__pagination-btn next swiper__next_brand"><svg><use xlink:href="<?php bloginfo('template_url') ?>/assets/img/main-sprite.svg#arrow-right"></use></svg></div>
                    </div>
                </div>

            </div> <!-- contaienr -->
        </section> <!-- popular -->

        <? get_template_part('inc/bullets'); ?>
        <? get_template_part('inc/brands'); ?>
    </main>
    
<? get_footer(); ?>