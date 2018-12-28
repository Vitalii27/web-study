<?php
/**
 * Template Name: Portfolio-single
 *
 * This is the Portfolio-single page template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package web
 */

get_header(); ?>
<?php get_template_part( './template-parts/blocks/sidebar-nav' ); ?>

<?php get_template_part('./template-parts/blocks/breadcrumbs'); ?>
<?php get_template_part('./template-parts/sections/project-page'); ?>

<?php get_template_part('./template-parts/sections/form-section'); ?>
<?php //get_template_part('./template-parts/sections/black-advantages'); ?>
<?php //get_template_part('./template-parts/sections/result'); ?>

<?php get_template_part('./template-parts/sections/section-text'); ?>
<?php get_template_part('./template-parts/sections/map-section'); ?>
<?php get_footer(); ?>


