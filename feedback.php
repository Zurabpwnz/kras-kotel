<? 
/* Template Name: Отзывы */
get_header();?>

<main class="main">

    <div class="container">
        <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
    </div>

    <section class="feedback">
        <div class="container">
            <h1 class="title title-h3"><? the_title();?></h1>
            

            <div class="feedback__flamp">
                <a class="flamp-widget" href="//krasnoyarsk.flamp.ru/firm/kras_kotjol_proizvodstvenno_torgovaya_kompaniya-985691699735505"  data-flamp-widget-type="responsive-new" data-flamp-widget-id="985691699735505" data-flamp-widget-width="100%" data-flamp-widget-count="5">Отзывы о нас на Флампе</a><script>!function(d,s){var js,fjs=d.getElementsByTagName(s)[0];js=d.createElement(s);js.async=1;js.src="//widget.flamp.ru/loader.js";fjs.parentNode.insertBefore(js,fjs);}(document,"script");</script>
            </div>
        </div> <!-- container -->
    </section>

</main>
    
<? get_footer(); ?>