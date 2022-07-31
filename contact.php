<? 
/* Template Name: Контакты */
get_header();?>


    <main class="main">

        <div class="container">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
        </div>

        <section class="seo-text">
            <div class="container">
                <h1 class="title title-h3">Контакты</h1>
                <div class="seo-text__visible">
                    <? the_content();?>
                </div> <!-- seo-text__visible -->

            </div> <!--contaienr -->
        </section> <!-- seo-text -->

        <div class="page-inner">
            <div class="container">
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
            </div>
        </div>

        <div class="contact">
            <div class="container">
                <h3>Офисы в Красноярске и других городах</h3>

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