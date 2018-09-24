<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package web
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KXBN842');</script>
    <!-- End Google Tag Manager -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body><!--[if lte IE 9]>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KXBN842"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!--<p class="browsehappy">Вы используете <strong>устаревший</strong> браузер. Пожалуйста <a href="http://browsehappy.com/"-->
<!--                                                                                         target="_blank">обновите ваш-->
<!--    браузер</a> чтобы воспользоваться всем функционалом сайта.</p><![endif]-->-->
<?php get_template_part('./template-parts/blocks/menu-btn'); ?>

<?php if( is_front_page() ) { ?>
    <header class="header">
        <div class="container-fluid">
            <div class="s-hero__top">
                <div class="header_container">
                    <div class="header_left">
                        <a class="s-hero-callback btn--black js-pop-up" href="#callback">Заказать звонок</a></div>
                    <!-- .col-->
                    <div class="header_right">
                        <?php get_template_part('./template-parts/blocks/swipe-menu'); ?>

                    </div>
                    <!-- .col-->
                </div>
                <!-- .row-->
            </div>
        </div>
    </header>
<?php } else { ?>

    <header class="header header--blue">
        <div class="container-fluid">
            <div class="s-hero__top">
                <div class="header_container">
                    <div class="header_left">
                        <a class="s-hero-callback js-pop-up" href="#callback">Заказать звонок</a></div>
                    <!-- .col-->
                    <div class="header_right">
                        <?php get_template_part('./template-parts/blocks/swipe-menu'); ?>

                    </div>
                    <!-- .col-->
                </div>
                <!-- .row-->
            </div>
        </div>
    </header>
<?php } ?>
<main class="main">