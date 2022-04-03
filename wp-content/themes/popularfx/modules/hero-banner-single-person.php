<div class='hero-banner-wrapper hero-banner-single-wrapper' 
style="background:<?php the_field('banner_background_color_hero_banner_single') ?>">

    <div class="banner-single-person container">
        <?php if( get_field('person_image_hero_banner_single') ): ?>
            <div class="banner-single-person-img">
                <img src="<?php the_field('person_image_hero_banner_single') ?>" alt="logo">
            </div>
        <?php endif;?>

        <?php if( get_field('person_title_hero_banner_single') ): ?>
            <div class="banner-single-person-title">
                <?php the_field('person_title_hero_banner_single') ?>
            </div>
            <?php endif;?>
    </div>

    <?php if( get_field('show_waves_hero_banner_single') ): ?>
        <div class="banner-overlay">
    
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 174.88" style="opacity: 1.0">
            <path fill="#FFFFFF" d="M-.27,154.06C256.5,138.39,406.67,67.94,952.25,16.81c556.12-52.13,903.48,52.8,967.79,57.11,0,0,.67-37.24-.31,103.28H-.27"></path>
            </svg>
        
        </div>
        <div class="banner-overlay banner-overlay-2">
    
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 174.88" style="opacity: 1.0">
            <path fill=" #ea5c5d" d="M-.27,154.06C256.5,138.39,406.67,67.94,952.25,16.81c556.12-52.13,903.48,52.8,967.79,57.11,0,0,.67-37.24-.31,103.28H-.27"></path>
            </svg>

        </div>
    <?php endif;?>

</div>