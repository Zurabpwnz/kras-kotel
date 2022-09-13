<? 
/* Template Name: Галерея */
get_header();?>


<main class="main">

    <div class="container">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
    </div>

    <section class="faq faq__page" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <h3 class="title title-h3"><? the_title();?></h3>

            <? the_content();?>
        </div> <!-- container-->
    </section> <!-- faq -->
    
</main>


    
<? get_footer();?>