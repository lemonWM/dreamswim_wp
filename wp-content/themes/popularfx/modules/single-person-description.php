
<div class="single-person-richtext-wrapper container">

    <?php the_field('person_description_under_banner') ?>

</div>
<div class="single-person-description-wrapper"
    style="background:<?php the_field('description_background_color_hero_banner_single') ?>">

    <?php if( get_field('show_description_wave_hero_banner_single') ): ?>
        <div class="image-text-wrapper__overlay image-text-wrapper__overlay-top">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 226.81" style="opacity: 1.0">
                <path fill="#FFFFFF" d="M0,115.1c260.5.4,494.4,115.7,1054,111.6,444-3.2,657.6-87.6,866-161.9V0H0"></path>
            </svg>
        </div>
    <?php endif;?>


    <div class="description-person-wrapper container">

        <?php the_field('person_description_hero_banner_single') ?>

    </div>

    <?php if( get_field('show_description_wave_hero_banner_single') ): ?>
        <div class="image-text-wrapper__overlay image-text-wrapper__overlay-bottom">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 174.88" style="opacity: 1.0;">
                <path fill="#FFFFFF" d="M1920.53,151.74C1663.76,136.07,1513.59,65.62,968,14.49,411.89-37.64,64.53,67.29.22,71.6c0,0-.67-37.24.31,103.28h1920"></path>
            </svg>
        </div>
     <?php endif;?>

</div>