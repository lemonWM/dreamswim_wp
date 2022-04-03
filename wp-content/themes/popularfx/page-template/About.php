<?php
/**
* Template Name: About
*
* @package WordPress
* @subpackage PopularFX
* @since PopularFX 1.0
*/

get_header();

?>

<main class="main-home">

    <?php get_template_part( 'modules/hero-banner-slider', 'page' ); ?>
    <?php get_template_part( 'modules/simple-gallery', 'page' ); ?>
    <?php get_template_part( 'modules/image-text-with-wave', 'page' ); ?>
    <?php get_template_part( 'modules/team-filters', 'page' ); ?>
    <?php get_template_part( 'modules/social-bar', 'page' ); ?>
    <?php get_template_part( 'modules/testimonials', 'page' ); ?>
    

    
</main>

<?php get_footer() ?>