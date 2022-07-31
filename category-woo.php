<? /* Template Name: Подкатегория Woo */ 
get_header(); ?>

    <main class="main">

        <div class="container">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
        </div>

        <section class="page-inner">
            <div class="container">
                <h1 class="title title-h3">Котлы отопления</h1>

                <div class="col col-page">
                    
                    <div class="page-inner__content">
                        <div class="col col-3">
                            <a href="/katalog/kotly-otopleniya/avtomaticheskie-kotly/" class="product-item product-item_center">
                                <div class="product-item__top">
                                    <img src="<?php bloginfo('template_url') ?>/assets/img/products/v1.jpeg" alt="vulcan">
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
                                    <img src="<?php bloginfo('template_url') ?>/assets/img/products/v1.jpeg" alt="vulcan">
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
                            <? the_content();?>
                        </div> <!-- seo-text -->
                        
                        <div class="page-inner__form">
                            <div class="page-inner__form-top">
                                <div class="page-inner__form-ava"><img src="<?php bloginfo('template_url') ?>/assets/img/ava.png" alt="менеджер Крас-Котел"></div>
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
                        <form action="#" class="filter">
                            <div class="filter__group">
                                <div class="filter__label">
                                    Цена
                                </div>
                                <div class="filter__col-2">
                                    <input type="number" class="filter__input" placeholder="от 200">
                                    <input type="number" class="filter__input" placeholder="до 9000">
                                </div>

                                <div class="dual-range">
                                    <input class="dual-range__input" type="range" min="0" max="100" value="37" data-input="left"/>
                                    <input class="dual-range__input" type="range" min="0" max="100" value="67" data-input="right"/>
                                    <div class="dual-range__fill"></div>
                                </div>
                            </div> <!-- filter__group -->

                            <div class="filter__group">
                                <div class="filter__label">
                                    Бренд
                                </div>

                                <div class="filter__checkbox">
                                    <div class="filter__checkbox-container">
                                        <input type="checkbox" id="brand_1" name="checkbox" class="filter__checkbox-input" checked>
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
                                        <input type="checkbox" id="type_1" name="checkbox" class="filter__checkbox-input" checked>
                                        <label for="type_1">Автоматический</label>
                                    </div>
                                    <div class="filter__checkbox-container">
                                        <input type="checkbox" id="type_2" name="checkbox" class="filter__checkbox-input" checked>
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
        </section> <!-- popular -->

        <? get_template_part('inc/brands'); ?>
    </main>
    
<? get_footer();?>