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
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body><!--[if lte IE 9]>

<p class="browsehappy">Вы используете <strong>устаревший</strong> браузер. Пожалуйста <a href="http://browsehappy.com/"
                                                                                         target="_blank">обновите ваш
    браузер</a> чтобы воспользоваться всем функционалом сайта.</p><![endif]-->
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