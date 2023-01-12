<?php 

/*
Template Name: Home Template
*/

get_header();?>

<!-- Bannar -->
<?php get_template_part('template-parts/home/home', 'bannar') ?>

<!-- Features -->
<?php get_template_part('template-parts/home/home', 'features') ?>

<!-- About -->
<?php get_template_part('template-parts/home/home', 'about') ?>

<!-- CTA -->
<?php get_template_part('template-parts/home/home', 'cta') ?>

<!-- Services -->
<?php get_template_part('template-parts/home/home', 'services') ?>

<!-- Appoinment -->
<?php get_template_part('template-parts/home/home', 'appoinment') ?>

<!-- Testimonials -->
<?php get_template_part('template-parts/home/home', 'testimonials') ?>

<!-- Clients -->
<?php get_template_part('template-parts/home/home', 'clients') ?>

<?php get_footer();?>