<? 
/* Template Name: Почему мы */
get_header();?>

    <main class="main">

        <div class="container">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
        </div>

        <section class="feature feature_page">
            <div class="container">
                <h3 class="title title-h3">Почему клиенты <span> выбирают нас</span></h3>
                <div class="feature__list">
            <div class="feature__item" data-aos="fade-up" data-aos-duration="1000">
                <div class="feature__item-inner">
                    <div class="feature__info">
                        <h4><? the_field('feature_heading_1', 'option')?></h4>
                        <p><? the_field('feature_desc_1', 'option')?></p>
                    </div>
                    <div class="feature__icon">
                        <svg><use xlink:href="<?php bloginfo('template_url') ?>/assets/img/main-sprite.svg#feature-1"></use></svg>
                    </div>
                </div>
            </div> <!-- feature__item -->
            <div class="feature__item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="feature__item-inner">
                    <div class="feature__info">
                        <h4><? the_field('feature_heading_2', 'option')?></h4>
                        <p><? the_field('feature_desc_2', 'option')?></p>
                    </div>
                    <div class="feature__icon">
                        <svg><use xlink:href="<?php bloginfo('template_url') ?>/assets/img/main-sprite.svg#feature-2"></use></svg>
                    </div>
                </div>
            </div> <!-- feature__item -->
            <div class="feature__item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <div class="feature__item-inner">
                    <div class="feature__info">
                        <h4><? the_field('feature_heading_3', 'option')?></h4>
                        <p><? the_field('feature_desc_3', 'option')?></p>
                    </div>
                    <div class="feature__icon">
                        <svg><use xlink:href="<?php bloginfo('template_url') ?>/assets/img/main-sprite.svg#feature-3"></use></svg>
                    </div>
                </div>
            </div> <!-- feature__item -->
            <div class="feature__item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                <div class="feature__item-inner">
                    <div class="feature__info">
                        <h4><? the_field('feature_heading_4', 'option')?></h4>
                        <p><? the_field('feature_desc_4', 'option')?></p>
                    </div>
                    <div class="feature__icon">
                        <svg><use xlink:href="<?php bloginfo('template_url') ?>/assets/img/main-sprite.svg#feature-4"></use></svg>
                    </div>
                </div>
            </div> <!-- feature__item -->
            <div class="feature__item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="800">
                <div class="feature__item-inner">
                    <div class="feature__info">
                        <h4><? the_field('feature_heading_5', 'option')?></h4>
                        <p><? the_field('feature_desc_5', 'option')?></p>
                    </div>
                    <div class="feature__icon">
                        <svg><use xlink:href="<?php bloginfo('template_url') ?>/assets/img/main-sprite.svg#feature-5"></use></svg>
                    </div>
                </div>
            </div> <!-- feature__item -->
            <div class="feature__item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="1000">
                <div class="feature__item-inner">
                    <div class="feature__info">
                        <h4><? the_field('feature_heading_6', 'option')?></h4>
                        <p><? the_field('feature_desc_6', 'option')?></p>
                    </div>
                    <div class="feature__icon">
                        <svg><use xlink:href="<?php bloginfo('template_url') ?>/assets/img/main-sprite.svg#feature-6"></use></svg>
                    </div>
                </div>
            </div> <!-- feature__item -->
        </div> <!-- feature__list -->
            </div> <!-- container -->
        </section> <!-- feature -->


        <section class="seo-text">
            <div class="container">
                <? the_content();?>
            
                <div class="seo-text__feature">
                    <div class="seo-text__feature-grid">
                        <div class="seo-text__feature-item" data-aos="fade-up" data-aos-duration="1000">
                            <div class="seo-text__feature-count">2 000 +</div>
                            <div class="seo-text__feature-desc">автоматических Котлов работают у наших клиентов</div>
                        </div>
                        <div class="seo-text__feature-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                            <div class="seo-text__feature-count">22 года</div>
                            <div class="seo-text__feature-desc">создаем тепло и занимаемся монтажом систем отопления</div>
                        </div>
                        <div class="seo-text__feature-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                            <div class="seo-text__feature-count">100%</div>
                            <div class="seo-text__feature-desc">Предоставляем гарантию возврата средств</div>
                        </div>
                    </div>
                </div> <!-- seo-text__feature -->
            </div> <!--contaienr -->
        </section> <!-- seo-text -->
    </main>
    
<? get_footer();?>