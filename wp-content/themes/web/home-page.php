<?php
/**
 * Template Name: Home Page
 *
 * This is the Home page template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package web
 */

get_header(); ?>
<?php get_template_part('./template-parts/blocks/sidebar-nav'); ?>

<?php get_template_part('./template-parts/pages/home'); ?>
<?php get_template_part('./template-parts/sections/hero'); ?>
<div class="section section--colored">
    <?php get_template_part('./template-parts/sections/sub-hero'); ?>
    <?php get_template_part('./template-parts/sections/comparison'); ?>
    <!-- .S-PROMO-->

</div>
<!-- .section-->
<?php get_template_part('./template-parts/sections/section-third'); ?>
<!-- .S-MAKEPATH-->
<?php get_template_part('./template-parts/sections/stages-development'); ?>
<!-- .S-WORKPATH-->
<?php get_template_part('./template-parts/sections/portfolio-home'); ?>
<?php get_template_part('./template-parts/sections/result'); ?>
<?php get_template_part('./template-parts/sections/link-sites'); ?>
<div class="section section--colored">

    <?php get_template_part('./template-parts/sections/advantages'); ?>
    <!-- .S-ADVANTAGES-->

    <!-- .section-->
    <?php get_template_part('./template-parts/sections/form-section'); ?>
    <!-- .section-->
    <?php get_template_part('./template-parts/sections/black-advantages'); ?>
    <?php get_template_part('./template-parts/sections/section-about'); ?>
</div>
<?php get_template_part('./template-parts/sections/questions-section'); ?>
<?php get_template_part('./template-parts/sections/questions'); ?>
<?php get_template_part('./template-parts/sections/partners'); ?>
<?php get_template_part('./template-parts/sections/section-text'); ?>


<?php get_template_part('./template-parts/sections/map-section'); ?>

<?php get_footer(); ?>

