<? /* Template Name: Наши сотрудники */ get_header();?>


    <main class="main">

        <div class="container">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
        </div>

        <section class="team">
            <div class="container">
                <h1 class="title title-h3"><? the_title(); ?></h1>
                
                <div class="team__grid">
                    
                    <?php if( have_rows('team') ): ?>
                        <?php while( have_rows('team') ): the_row(); ?>
                        <div class="team__item">
                            <div class="team__photo" style="background-image: url(<? the_sub_field('photo')?>);"></div>
    
                            <div class="team__info">
                                <h3><? the_sub_field('name')?></h3>
                                <p><? the_sub_field('post')?></p>
                                <p><? the_sub_field('mail')?></з>
                            </div>
                        </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div> <!-- container -->
        </section>

    </main>
  
<? get_footer(); ?>