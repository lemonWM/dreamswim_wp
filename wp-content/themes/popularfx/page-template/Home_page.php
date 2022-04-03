<?php
/**
* Template Name: Home
*
* @package WordPress
* @subpackage PopularFX
* @since PopularFX 1.0
*/

get_header();

?>

<main class="main-home">

    <?php get_template_part( 'template-parts/content', 'page' ); ?>
    <?php get_template_part( 'modules/hero-banner-slider', 'page' ); ?>
    <?php get_template_part( 'modules/title-with-boxes', 'page' ); ?>
    <?php get_template_part( 'modules/image-text-with-wave', 'page' ); ?>
    <?php get_template_part( 'modules/four-image-grid', 'page' ); ?>
    <?php get_template_part( 'modules/multi-image-text-with-wave', 'page' ); ?>
    <?php get_template_part( 'modules/simple-gallery', 'page' ); ?>
    <?php get_template_part( 'modules/social-bar', 'page' ); ?>

</main>

<?php get_footer() ?>