<? 
/* Template Name: Доставка */
get_header();?>


    <main class="main">

        <div class="container">
            <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(''); ?>
        </div>

        <section class="seo-text">
            <div class="container">
                <div class="col col-page">
                    <div class="content">
                        <h1 class="title title-h3"><? wp_title();?></h1>
                        <? the_content();?>
                    </div> <!-- col -->

                    <div class="aside-post">
                        <!-- Put this script tag to the <head> of your page -->
                        <script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>

                        <!-- Put this div tag to the place, where the Group block will be -->
                        <div id="vk_groups"></div>
                        <script type="text/javascript">
                        VK.Widgets.Group("vk_groups", {mode: 4, wide: 1, height: 400, color1: "FFFFFF", color2: "000000", color3: "b85151"}, 96807291);
                        </script>
                    </div>
                </div>

            </div> <!--contaienr -->
        </section> <!-- seo-text -->
    </main>
    
<? get_footer();?>