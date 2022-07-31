<? 
/* Template Name: Статьи */
get_header();?>

<main class="main">

    <div class="container">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
    </div>

    <section class="news">
        <div class="container">
            <h1 class="title title-h3"><? wp_title();?></h1>

            <div class="news__grid">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="news__item">
                    <div class="news__img-wrapper">
                        <?php the_post_thumbnail('full', 'class=imgstyle'); ?>
                        <div class="news__date"><?php the_time('j.m.Y'); ?></div>
                    </div>

                    <div class="news__info">
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?></div>
                    </div>
                </a>
            <?php endwhile; ?>
            <div class="pagination">
            <?php
                    // global $wp_query;
                    $big = 999999999; // need an unlikely integer
                    echo paginate_links( array(
                    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                    'format' => '?paged=%#%',
                    'current' => max( 1, get_query_var('paged') ),
                    'total' => $wp_query->max_num_pages,
                    'prev_text' => '&laquo;',
                    'next_text' => '&raquo;'
                    ) );
                    ?>
            </div>
            <?php else: ?>
            <!-- no posts found -->
            <?php endif; ?>
                
            </div>
        </div> <!-- container -->
    </section>

</main>
    
<? get_footer();?>