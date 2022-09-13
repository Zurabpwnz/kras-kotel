<? 
/* Template Name: Вопросы и ответы */
get_header();?>


<main class="main">

    <div class="container">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
    </div>

    <section class="faq faq__page" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <h3 class="title title-h3"><? the_title();?></h3>

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
            <a href="#" class="btn btn-faq" data-izimodal-open="#modalFaq">Задать вопрос</a>
        </div> <!-- container-->
    </section> <!-- faq -->
</main>

<div id="modalFaq" class="modl">
    <div class="iziModal__content">
        <div class="iziModal__header">
            <h3 class="center">Задать вопрос</h3>
            <i class="iziModal__close" data-izimodal-close><img
                        src="<?php bloginfo( 'template_url' ) ?>/assets/img/close.svg" alt=""></i>
        </div>
        <form action="#">
            <div class="iziModal__desc">Напишите свой вопрос и мы обязательно его опубликуем</div>
            <div class="form-group iziModal__form">
                <div class="placeholder-container">
                    <input type="text" class="input-main" placeholder=" ">
                    <label>Имя</label>
                </div>
                <div class="placeholder-container">
                    <textarea name=""class="textarea-main" cols="30" rows="10"></textarea>
                    <label>Ваш вопрос</label>
                </div>
                <div class="form-btn">
                    <button class="btn btn-large iziModal__btn">Обратиться к нам</button>
                    <p>Нажимая на кнопку вы соглашаетесь с <a href="#">обработкой персональных данных</a></p>
                </div>
            </div>
        </form>
    </div>
</div>
    
<? get_footer();?>