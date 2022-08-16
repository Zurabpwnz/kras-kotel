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

                </div> <!-- team grid-->
                
                <div class="team__corporate">
                    <h2 class="title title-h3">Коллектив</h1>

                    <div class="team__corporate-grid">
                    <?php if ( have_rows( 'corporate' ) ) : ?>
                        <?php while ( have_rows( 'corporate' ) ) : the_row(); ?>
                            <?php if ( get_sub_field( 'img' ) ) : ?>
                                <a href="<?php the_sub_field( 'img' ); ?>"><img src="<?php the_sub_field( 'img' ); ?>" /></a>
                            <?php endif ?>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p>Нет фотографий</p>
                    <?php endif; ?>
                    </div>
                </div> <!-- team__corporate -->

            </div> <!-- container -->
        </section>

    </main>
  
<? get_footer(); ?>