<?php
/**
* Template Name: Product Single
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
    <?php get_template_part( 'modules/rich-text', 'page' ); ?>

</main>

<?php get_footer() ?>