<div class="image-text-wrapper multi-image-text-wrapper" style="background-color:<?php the_field('background_color_multi_images') ?>">

    <?php if( get_field('show_waves_multi_images') ): ?>
        <div class="image-text-wrapper__overlay image-text-wrapper__overlay-top">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 226.81" style="opacity: 1.0">
                <path fill="#FFFFFF" d="M0,115.1c260.5.4,494.4,115.7,1054,111.6,444-3.2,657.6-87.6,866-161.9V0H0"></path>
            </svg>
        </div>
    <?php endif;?>

    <div class="container multi-image-text-wrapper">

    <?php if( get_field('title_multi_images') ): ?>

        <div class="multi-images-text-wrapper__title">

            <?php the_field('title_multi_images') ?>

        </div>
    
    <?php endif;?>

    <div class="multi-images-text-wrapper__items">
        <?php foreach (get_field('image_text_items_multi') as $item): ?>
                   
            <?php if ($item['text_multi_images'] && $item['image_multi_images'] && $item['link_multi_images']): ?>
                    
                <a href="<?= $item['link_multi_images'] ?>"
                    style="background-image:url('<?= $item['image_multi_images'] ?>')"> 
                
                    <p> <?= $item['text_multi_images'] ?></p>
                
                </a>
            <?php endif; ?>

        <?php endforeach; ?>
    </div>

    </div>

    <?php if( get_field('show_waves_multi_images') ): ?>
        <div class="image-text-wrapper__overlay image-text-wrapper__overlay-bottom">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 174.88" style="opacity: 1.0;">
                <path fill="#FFFFFF" d="M1920.53,151.74C1663.76,136.07,1513.59,65.62,968,14.49,411.89-37.64,64.53,67.29.22,71.6c0,0-.67-37.24.31,103.28h1920"></path>
            </svg>
        </div>
     <?php endif;?>

</div>