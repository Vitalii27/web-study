<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package TopShoes
 */

get_header(); ?>
    <section class="section section_error shadow-text--light" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/404-bg.jpg)">
        <div class="container-fluid">
            <div class="row">
                <div class="page-container">
                    <span class="error-404-numbers"><span>4</span>0<span>4</span></span>
                </div>
                <header class="page-header">
                    <h1 class="page-title">Страница не найдена!!!</h1>
                </header>
                <a href="<?php echo home_url(); ?>" class="b-worktype__link  main-btn"><span>На главную</span></a>
            </div>
        </div>

    </section>


<?php
get_footer();
