<div class="pricing-wrapper">
   
    <?php if( get_field('title_pricing') ): ?>
        <div class="container">
            <div class="pricing-text-wrapper">
                <?php the_field('title_pricing') ?>
            </div>
        </div>
    <?php endif;?>

    
    <div class="pricing-items-container" style="background: <?php the_field('background_color_pricing') ?>">
        <div class="image-text-wrapper__overlay image-text-wrapper__overlay-top">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 226.81" style="opacity: 1.0">
                <path fill="#FFFFFF" d="M0,115.1c260.5.4,494.4,115.7,1054,111.6,444-3.2,657.6-87.6,866-161.9V0H0"></path>
            </svg>
        </div>
        
        <div class="pricing-items-wrapper container">

            <?php foreach (get_field('pricing_tiers') as $item): ?>
                        
                <?php if ( $item['pokaz_element']): ?>
                    
                    <div class="pricing-item <?php if ( $item['polecany'] ): ?>pricing-item-active<?php endif; ?>">

                        <?php if ( $item['polecany'] ): ?>
               
                            <div class="pricing-item__promo">
                                <span>PROMOCJA</span>
                            </div>
                    
                        <?php endif; ?>

                        <div class="pricing-item__title">
                            <?= $item['tytul'] ?>
                        </div>
                        <div class="pricing-item__time">
                            <span class="item-text-title">Czas trwania</span>
                            <span class="item-text-subtitle"><?= $item['czas'] ?></span>                          
                        </div>
                        <div class="pricing-item__age">
                            <span class="item-text-title">Minimalny wiek</span>
                            <span class="item-text-subtitle"><?= $item['wiek'] ?></span> 
                        </div>
                        <div class="pricing-item__skills">
                            <span class="item-text-title">Poziom umiejętności</span>
                            <span class="item-text-subtitle"><?= $item['umiejetnosci'] ?></span>
                        </div>
                        <div class="pricing-item__price">
                            <?= $item['cena'] ?>
                        </div>
                    </div>
                        
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
        <div class="image-text-wrapper__overlay image-text-wrapper__overlay-bottom">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 174.88" style="opacity: 1.0;">
                <path fill="#FFFFFF" d="M1920.53,151.74C1663.76,136.07,1513.59,65.62,968,14.49,411.89-37.64,64.53,67.29.22,71.6c0,0-.67-37.24.31,103.28h1920"></path>
            </svg>
        </div>
    </div>
   
    <?php if( get_field('promotions') ): ?>
        <div class="pricing-promo-wrapper container">
            <div class="pricing-text-wrapper">
                <?php the_field('promotions') ?>
            </div>
        </div>
    <?php endif;?>
</div>