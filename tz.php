<? 
/* Template Name: Товарные знаки */
get_header();?>

    <main class="main">

        <div class="container">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
        </div>

        <div class="page-inner">
            <div class="container">
                <h1 class="title title-h3"><? the_title();?></h1>
                <div class="col col-6">
                <?php if( have_rows('tz') ): ?>
                    <?php while( have_rows('tz') ): the_row(); ?>
                    
                    <div class="tz">
                       <img src="<? the_sub_field('tz_img')?>" alt="">
                       <a href="<? the_sub_field('tz_file')?>">Скачать ТЗ</a>
                    </div>
                        
                    <?php endwhile; ?>
                <?php endif; ?>

                </div>
            </div>
        </div>


    </main>
    
<? get_footer();?>