<? get_header();?>
    <main class="main">

        <div class="container">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
        </div>

        <section class="page-inner">
            <div class="container">
                <h1 class="title title-h3"><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Вы искали: %s', 'kras-kotel' ), '<span>' . get_search_query() . '</span>' );
					?></h1>

                <div class="col col-4">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <? get_template_part('inc/product-item'); ?>
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
                </div> <!-- col-3-->
    
            </div> <!-- contaienr -->
        </section> <!-- popular -->

    </main>
 

<? get_footer();?>