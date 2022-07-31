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
        </div> <!-- container-->
    </section> <!-- faq -->
</main>
    
<? get_footer();?>