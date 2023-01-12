<?php 

/*
Template Name: About Template
*/

get_header();?>

<!-- Breadcumb -->
<?php get_template_part('template-parts/about/about', 'breadcumb'); ?>

<!-- Title -->
<?php get_template_part('template-parts/about/about', 'title'); ?>

<!-- Features -->
<?php get_template_part('template-parts/about/about', 'features'); ?>

<!-- Awards -->
<?php get_template_part('template-parts/about/about', 'awards'); ?>

<!-- Teams -->
<?php get_template_part('template-parts/about/about', 'teams'); ?>

<!-- Testimonials -->
<?php get_template_part('template-parts/about/about', 'testimonial'); ?>

<?php get_footer();?>