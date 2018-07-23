<?php
/**
 * Template Name: Seo
 *
 * This is the Seo page template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package web
 */

get_header(); ?>
<?php get_template_part('./template-parts/blocks/sidebar-nav'); ?>
<?php get_template_part('./template-parts/sections/hero'); ?>
<?php get_template_part('./template-parts/sections/sub-hero'); ?>

<?php get_template_part('./template-parts/sections/seo-gols'); ?>
<?php get_template_part('./template-parts/sections/seo-list'); ?>

<?php get_template_part('./template-parts/sections/benefits'); ?><?php get_template_part('./template-parts/sections/supplement'); ?>


<!-- .b-line-->

<?php get_template_part('./template-parts/sections/map-section'); ?>
<?php get_footer(); ?>


