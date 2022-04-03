<div class="image-text-wrapper" style="background-color:<?php the_field('background_color_image_richtext') ?>">

    <?php if( get_field('show_waves_image_richtext') ): ?>
        <div class="image-text-wrapper__overlay image-text-wrapper__overlay-top">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 226.81" style="opacity: 1.0">
                <path fill="#FFFFFF" d="M0,115.1c260.5.4,494.4,115.7,1054,111.6,444-3.2,657.6-87.6,866-161.9V0H0"></path>
            </svg>
        </div>
    <?php endif;?>

    <div class="container image-text-wrapper__content" 
        style="<?php if( get_field('layout_setting_image_rich_text') ): ?> flex-direction:row-reverse <?php endif;?>">

        <div class="image-content">
            <img src="<?php the_field('image_image_richtext') ?>" alt="logo" >
        </div>
        <div class="text-content">
            <?php the_field('text_image_richtext') ?>
        </div>

    </div>

    <?php if( get_field('show_waves_image_richtext') ): ?>
        <div class="image-text-wrapper__overlay image-text-wrapper__overlay-bottom">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 174.88" style="opacity: 1.0;">
                <path fill="#FFFFFF" d="M1920.53,151.74C1663.76,136.07,1513.59,65.62,968,14.49,411.89-37.64,64.53,67.29.22,71.6c0,0-.67-37.24.31,103.28h1920"></path>
            </svg>
        </div>
     <?php endif;?>

</div>