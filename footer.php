<footer class="footer">
    <div class="container">
        <div class="footer__line">
            <a href="#" class="logo footer__logo">
                <img src="<?php bloginfo( 'template_url' ) ?>/assets/img/logo.svg" alt="Крас-Котел лого">
                <p>Производитель котлов в Красноярске</p>
            </a>

            <div class="search footer__search">

            </div>

            <div class="footer__address">
                <svg class="icon icon-address">
                    <use xlink:href="<?php bloginfo( 'template_url' ) ?>/assets/img/main-sprite.svg#address"></use>
                </svg>
                <p>660048, г. Красноярск, <span>ул. Караульная, д. 31, оф. 3-03</span></p>
            </div>

            <div class="footer__contacts">
                <p class="footer__time-online">Ежедневно с 9:30 до 18:30</p>
                <a href="tel:+73912191455" class="footer__phone">+7 (391) 219 14 55</a>
                <a href="mailto:kras-kotel@mail.ru " class="footer__mail">kras-kotel@mail.ru </a>
            </div>
        </div> <!-- footer__line -->

        <div class="footer__bottom-grid">
            <div class="footer__menu">
                <div class="footer__menu-title">Меню</div>
                <ul class="footer__menu-list">
					<?php if ( have_rows( 'menu_footer', 'option' ) ): ?>
						<?php while ( have_rows( 'menu_footer', 'option' ) ): the_row(); ?>
                            <li>
                                <a href="<? the_sub_field( 'link', 'option' ) ?>"><? the_sub_field( 'name', 'option' ) ?></a>
                            </li>
						<?php endwhile; ?>
					<?php endif; ?>
                </ul>
            </div> <!-- footer__menu -->
            <div class="footer__menu">
                <div class="footer__menu-title">Каталог</div>
                <ul class="footer__menu-list">
					<?php if ( have_rows( 'menu_catalog', 'option' ) ): ?>
						<?php while ( have_rows( 'menu_catalog', 'option' ) ): the_row(); ?>
                            <li>
                                <a href="<? the_sub_field( 'link', 'option' ) ?>"><? the_sub_field( 'name', 'option' ) ?></a>
                            </li>
						<?php endwhile; ?>
					<?php endif; ?>
                </ul>
            </div> <!-- footer__menu -->

            <div class="footer__social">
                <p class="footer__time-online">Мы Online, спрашивайте</p>
                <ul class="footer__social-list">
                    <li><a href="https://www.instagram.com/kraskotel/">
                            <svg>
                                <use xlink:href="<?php bloginfo( 'template_url' ) ?>/assets/img/main-sprite.svg#vkvk"></use>
                            </svg>
                        </a></li>
                    <li><a href="#">
                            <svg>
                                <use xlink:href="<?php bloginfo( 'template_url' ) ?>/assets/img/main-sprite.svg#whatsapp-white"></use>
                            </svg>
                        </a></li>
                    <li><a href="https://vk.com/kraskotel">
                            <svg>
                                <use xlink:href="<?php bloginfo( 'template_url' ) ?>/assets/img/main-sprite.svg#vk-white"></use>
                            </svg>
                        </a></li>
                </ul>
            </div>
        </div> <!-- footer__bottom-grid -->

        <div class="footer__info">
            <div class="footer__info-offer">Обращаем ваше внимание на то, что информация на данном интернет-сайте носит
                исключительно ознакомительный характер и ни при каких условиях не является публичной офертой,
                определяемой положениями Статьи 437 Гражданского кодекса РФ
            </div>
            <a href="#" class="footer__info-politic">Политика конфиденциальности</a>
        </div>
    </div> <!-- container -->
</footer>


<div id="modalRequiz" class="modl">
    <div class="iziModal__content">
        <div class="iziModal__header">
            <h3>Оставьте заявку для консультации</h3>
            <i class="iziModal__close" data-izimodal-close><img
                        src="<?php bloginfo( 'template_url' ) ?>/assets/img/close.svg" alt=""></i>
        </div>
        <form action="#">
            <div class="iziModal__desc">Оставьте номер телефона и мы перезвоним вам в течении 15 минут</div>
            <div class="form-group iziModal__form">
                <div class="placeholder-container">
                    <input type="text" name="phone" class="input-main" placeholder=" ">
                    <label>Ваш номер телефона</label>
                </div>
                <div class="placeholder-container">
                    <input type="text" class="input-main" placeholder=" ">
                    <label>Имя</label>
                </div>
                <div class="form-btn">
                    <button class="btn btn-large iziModal__btn">Обратиться к нам</button>
                    <p>Нажимая на кнопку вы соглашаетесь с <a href="#">обработкой персональных данных</a></p>
                </div>
            </div>
        </form>
    </div>
</div>
<? wp_footer(); ?>
</body>
</html>