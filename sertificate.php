<? 
/* Template Name: Сертификаты */
get_header();?>

    <main class="main">

        <div class="container">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
        </div>

        <div class="page-inner">
            <div class="container">
                <h1 class="title title-h3"><? the_title();?></h1>
                <div class="col col-6">
                <?php if( have_rows('sert') ): ?>
                    <?php while( have_rows('sert') ): the_row(); ?>
                        
                    <a href="<? the_sub_field('img')?>" class="sertificate"><img src="<? the_sub_field('img')?>" alt=""></a>
                        
                    <?php endwhile; ?>
                <?php endif; ?>

                </div>
            </div>
        </div>


    </main>
    
<? get_footer();?>