<?php
/**
 * Template Name: contact Page
 *
 * This is the contact page template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package web
 */

get_header(); ?>
<?php get_template_part( './template-parts/blocks/sidebar-nav' ); ?>
<?php get_template_part('./template-parts/sections/contacts-section'); ?>
<?php get_template_part('./template-parts/sections/map-section'); ?>
<?php get_template_part('./template-parts/sections/form-section'); ?>
<?php get_template_part('./template-parts/sections/black-advantages'); ?>
<?php get_template_part('./template-parts/sections/result'); ?>


<?php get_footer();?>

