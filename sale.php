<? 
/* Template Name: Скидки */
get_header();?>

    <main class="main">

        <div class="container">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
        </div>

        <section class="news">
            <div class="container">
                <h1 class="title title-h3"><? the_title();?></h1>

                <div class="news__grid news__grid_sale">
                    <?php if( have_rows('sale', 'option') ): ?>
                        <?php while( have_rows('sale', 'option') ): the_row(); ?>
                            
                        <a href="#" class="news__item">
                            <div class="news__img-wrapper news__img-wrapper_sale">
                                <img src="<? the_sub_field('photo', 'option');?>" alt="post">
                            </div>
    
                            <div class="news__info">
                                <h3><? the_sub_field('heading', 'option');?></h3>
                            </div>
                        </a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div> <!-- container -->
        </section>

    </main>
   
<? get_footer(); ?>