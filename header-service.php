<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php bloginfo('template_url') ?>/favicon.png" type="image/png">
    <title><? wp_title(); ?></title>
    <? wp_head();?>
</head>
<body>
    <div class="search-modal">
        <div class="search-modal__block">
            <form class="search-modal__form" action="<?php echo home_url('/'); ?>" method="">
                <div class="placeholder-container">
                    <input type="search" name="s" class="input-main" placeholder=" ">
                    <label>Поиск по каталогу. Введите запрос и нажмите Enter.</label>
                </div>
            </form>
        </div>
    </div>
    <div class="search-modal__overlay"></div>
    <? get_template_part('inc/mobile-menu'); ?>

    <header class="header-main" style="background-image: url(<?php the_field( 'img_serv' ); ?>);">
        <div class="container">
            <div class="header-main__topline" data-aos="fade-up" data-aos-duration="1000">
                <a href="#" class="logo header-main__logo">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/logo.svg" alt="Крас-Котел лого">
                    <p>Производитель котлов в Красноярске</p>
                </a>

                <div class="search header-main__search">
                    <div class="header-main__search-icon" type="submit"><svg class="icon icon-search"><use xlink:href="<?php bloginfo('template_url') ?>/assets/img/main-sprite.svg#search"></use></svg></div>
                    <input type="search" placeholder="Поиск по каталогу...">
                </div>

                <div class="header-main__address">
                    <svg class="icon icon-address"><use xlink:href="<?php bloginfo('template_url') ?>/assets/img/main-sprite.svg#address"></use></svg>
                    <p>660048, г. Красноярск, <span>ул. Караульная, д. 31, оф. 3-03</span></p>
                </div>

                <div class="header-main__contacts">
                    <a href="tel:+73912191455" class="header-main__phone">+7 (391) 219 14 55</a>
                    <a href="mailto:info@kras-kotel.ru" class="header-main__mail">info@kras-kotel.ru</a>
                </div>

            </div> <!-- header-main__topline -->
            
            <nav class="header-main__nav" data-aos="fade-up" data-aos-duration="1000">
                <? get_template_part('inc/menu-list'); ?>

                <a href="" class="btn" data-izimodal-open="#modalRequiz">Заказать звонок</a>
            </nav>

            <div class="header-main__offer">
                <p class="header-main__offer-subtitle" data-aos="fade-up"
                data-aos-duration="1000" data-aos-delay="100">ОПЫТ В МОНТАЖЕ ИНЖЕНЕРНЫХ СИСТЕМ ОТОПЛЕНИЯ С 2000 ГОДА</p>
                <div class="header-main__offer-title" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400"><?php the_title();?></div>

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
            </div> <!-- header-main__offer -->

            <div class="header-main__feature">
                <p class="header-main__feature-title"><span>Преимущества в наличии</span></p>
                <div class="header-main__feature-grid">
                    <div class="header-main__feature-item" data-aos="fade-up" data-aos-duration="1000">
                        <div class="header-main__feature-count">2 000 +</div>
                        <div class="header-main__feature-desc">автоматических Котлов работают у наших клиентов</div>
                    </div>
                    <div class="header-main__feature-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        <div class="header-main__feature-count">22 года</div>
                        <div class="header-main__feature-desc">создаем тепло и занимаемся монтажом систем отопления</div>
                    </div>
                    <div class="header-main__feature-item" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                        <div class="header-main__feature-count">100%</div>
                        <div class="header-main__feature-desc">Предоставляем гарантию возврата средств</div>
                    </div>
                </div>
            </div> <!-- header-main__feature -->
        </div> <!-- container -->
    </header>