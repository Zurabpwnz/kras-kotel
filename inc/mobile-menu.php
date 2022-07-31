<div class="mobile-menu">
    <a href="<?php echo get_home_url(); ?>" class="logo header-main__logo header-main__logo_page">
        <img src="<?php bloginfo('template_url') ?>/assets/img/logo.svg" alt="Крас-Котел лого">
        <p>Производитель котлов в Красноярске</p>
    </a>

    <div class="mobile-menu__right">
        <a href="tel:+73912191455" class="mobile-menu__phone"><svg><use xlink:href="<?php bloginfo('template_url') ?>/assets/img/main-sprite.svg#phone-mobile"></use></svg></a>

        <div class="mobile-menu__burger">
            <div class="mobile-menu__burger-button"><i></i><i></i><i></i></div>
        </div>
    </div>

    <div class="mobile-menu__content">
        <div class="mobile-menu__top">
            <a href="<?php echo get_home_url(); ?>" class="logo header-main__logo header-main__logo_page">
                <img src="<?php bloginfo('template_url') ?>/assets/img/logo.svg" alt="Крас-Котел лого">
                <p>Производитель котлов в Красноярске</p>
            </a>

            <form class="search-modal__form" action="<?php echo home_url('/'); ?>" method="">
                <div class="placeholder-container">
                    <input type="search" name="s" class="input-main" placeholder=" ">
                    <label>Поиск по каталогу</label>
                </div>
            </form>
            <div class="mobile-menu__close"><img src="<?php bloginfo('template_url') ?>/assets/img/close.svg" alt=""></div>
        </div>

        <ul>
            <?php if( have_rows('menu', 'option') ): ?>
                <?php while( have_rows('menu', 'option') ): the_row(); ?>
                <li>
                    <a href="<? the_sub_field('link', 'option')?>"><? the_sub_field('name', 'option')?></a>
                    <?php if( get_sub_field('enable_menu', 'option') ):?>
                    <ul class="header-main__nav-submenu">
                    <?php if( have_rows('submenu', 'option') ): ?>
                        <?php while( have_rows('submenu', 'option') ): the_row(); ?>
                        <li><a href="<? the_sub_field('link', 'option')?>"><? the_sub_field('name', 'option')?></a></li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                        
                    </ul>
                    <?php endif;?>
                </li>
                <?php endwhile; ?>
            <?php endif; ?>
        </ul>
    </div>
</div>