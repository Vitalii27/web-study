<?php
/**
 * Template Name: Portfolio
 *
 * This is the Portfolio page template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package web
 */

get_header(); ?>
<?php get_template_part( './template-parts/blocks/sidebar-nav' ); ?>
<?php get_template_part('./template-parts/sections/portfolio-section'); ?>

<?php get_template_part('./template-parts/sections/form-section'); ?>
<?php get_template_part('./template-parts/sections/black-advantages'); ?>
<?php get_template_part('./template-parts/sections/result'); ?>
<?php get_template_part('./template-parts/sections/map-section'); ?>
<?php get_footer(); ?>


