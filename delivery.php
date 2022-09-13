<? 
/* Template Name: Доставка */
get_header();?>


    <main class="main">

        <div class="container">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
        </div>

        <section class="seo-text">
            <div class="container">
                <h1 class="title title-h3">Доставка и оплата</h1>
                <div class="col col-page">
                    <div class="content">
                        <h2>Наша компания предлагает несколько вариантов доставки:</h2>
                        <ul class="delivery__list">
                            <li>Cамовывоз со склада в городе Красноярске;</li>
                            <li>Доставка по городу Красноярск и пригород города</li>
                            <li>Доставка транспортной компанией по всем городам России и за рубеж.</li>
                        </ul>

                        <h3>Самовывоз со склада в городе Красноярск:</h3>
                        <p>Вы можете забрать товар самостоятельно со склада по адресу: г. Красноярск, ул. Академика Павлова д.1 стр. 5</p>
                        <h3>Доставка по городу Красноярск и в пригород города:</h3>
                        <p>Мы можем осуществить доставку товара нашим транспортным средством по городу Красноярск бесплатно, - в пригород города Красноярск за дополнительную плату. Стоимость доставки можно уточнить у вашего персонального менеджера.</p>
                        <h3>Доставка товара по РФ. Международная доставка:</h3>
                        <p>Осуществляется доставка до терминала, выбранной вами транспортной компании, во все регионы России и за рубеж. Стоимость доставки рассчитывается самой транспортной компанией и оплачивается отдельно. Доставка до терминала по городу Красноярск абсолютно бесплатная.</p>
                        <p>Мы работаем со многими транспортными компаниями, поэтому сможем подобрать оптимальный тариф именно для вас.
                        </p>
                    </div> <!-- col -->

                    <div class="aside-post">
                        <p><img src="<?php bloginfo('template_url') ?>/assets/img/fire.svg" style="width: 100%;" alt=""></p>
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