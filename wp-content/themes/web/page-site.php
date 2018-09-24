<?php
/**
 * Template Name: Content
 *
 * This is the Content page template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package web
 */

get_header(); ?>
<?php get_template_part('./template-parts/blocks/sidebar-nav'); ?>
<div class="section section--colored">
    <?php get_template_part('./template-parts/blocks/breadcrumbs'); ?>

    <?php get_template_part('./template-parts/sections/landing-section'); ?>
</div>
<?php get_template_part('./template-parts/sections/section-third'); ?>
<?php get_template_part('./template-parts/sections/ready_bussines'); ?>
<?php get_template_part('./template-parts/sections/stages-development'); ?>
<?php get_template_part('./template-parts/sections/teach-features'); ?>

<?php get_template_part('./template-parts/sections/result'); ?>
<div class="section section--colored">

    <?php get_template_part('./template-parts/sections/sub-hero'); ?>
    <?php get_template_part('./template-parts/sections/comparison'); ?>

    <?php get_template_part('./template-parts/sections/black-advantages'); ?>
    <?php get_template_part('./template-parts/sections/advantages'); ?>
</div>
<?php get_template_part('./template-parts/sections/section-text'); ?>
<?php get_template_part('./template-parts/sections/map-section'); ?>
<?php get_footer(); ?>


