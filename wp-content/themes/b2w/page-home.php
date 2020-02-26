<?php
/**
    Template Name: Home Page
 */

 

get_header();
?>
<!--HERO -->
<?php get_template_part( 'template-parts/content', 'hero' ); ?>
<!--OPT IN SECTION -->
<?php get_template_part( 'template-parts/content', 'optin' ); ?>
<!--BOOST YOUR INCOME -->
<?php get_template_part( 'template-parts/content', 'boost' ); ?>
<!--WHO BENEFITS -->
<?php get_template_part( 'template-parts/content', 'benefit' ); ?>
<!--COURSE FEATURES-->
<?php get_template_part( 'template-parts/content', 'features' ); ?>
<!--PROJECTS FEATURES -->
<?php get_template_part( 'template-parts/content', 'projectfeatures' ); ?>
<!--VIDEO FEATURETEE-->
<?php get_template_part( 'template-parts/content', 'video' ); ?>
<!--INSTRUCTOR -->
<?php get_template_part( 'template-parts/content', 'instructor' ); ?>
<!--TESTIMONIALS-->
<?php get_template_part( 'template-parts/content', 'testimonial' ); ?>

<?php

get_footer();