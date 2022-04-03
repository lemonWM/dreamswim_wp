<?php
/**
* Template Name: Person Single
*
* @package WordPress
* @subpackage PopularFX
* @since PopularFX 1.0
*/

get_header();

?>

<main class="main-home">

    <?php get_template_part( 'template-parts/content', 'page' ); ?>
    <?php get_template_part( 'modules/hero-banner-single-person', 'page' ); ?>
    <?php get_template_part( 'modules/single-person-description', 'page' ); ?>


</main>

<?php get_footer() ?>