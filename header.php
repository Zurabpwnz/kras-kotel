<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php bloginfo('template_url') ?>/favicon.png" type="image/png">
    <title><? wp_title(); ?></title>
    <? wp_head(); ?>
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

    <header class="header-page">
        <div class="container">

            <div class="header-main__topline header-main__topline_page">
                <a href="<?php echo get_home_url(); ?>" class="logo header-main__logo header-main__logo_page">
                    <img src="<?php bloginfo('template_url') ?>/assets/img/logo.svg" alt="Крас-Котел лого">
                    <p>Производитель котлов в Красноярске</p>
                </a>

                <div class="search header-main__search header-main__search_page">
                    <div class="header-main__search-icon" type="submit"><svg class="icon icon-search"><use xlink:href="<?php bloginfo('template_url') ?>/assets/img/main-sprite.svg#search-dark"></use></svg></div>
                    <input type="search" placeholder="Поиск по каталогу...">
                </div>

                <div class="header-main__address header-main__address_page">
                    <svg class="icon icon-address"><use xlink:href="<?php bloginfo('template_url') ?>/assets/img/main-sprite.svg#address-dark"></use></svg>
                    <p>660048, г. Красноярск, <span>ул. Караульная, д. 31, оф. 3-03</span></p>
                </div>

                <div class="header-main__contacts header-main__contacts_page">
                    <a href="tel:+73912191455" class="header-main__phone header-main__phone_page">+7 (391) 219 14 55</a>
                    <a href="mailto:info@kras-kotel.ru" class="header-main__mail header-main__mail_page">info@kras-kotel.ru</a>
                </div>
            </div> <!-- header-main__topline -->
        </div> <!-- container -->
        <hr class="header-page__hr">
        <div class="container">
            <nav class="header-main__nav header-main__nav_page">
                <? get_template_part('inc/menu-list'); ?>
                <a href="#" class="btn" data-izimodal-open="#modalRequiz">Заказать звонок</a>
            </nav>
        </div> <!-- container -->
    </header>
