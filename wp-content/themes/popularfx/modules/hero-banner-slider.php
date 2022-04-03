<div class='hero-banner-wrapper swiper-banner swiper'>

    <div class="banner-slider swiper-wrapper">
        <style>
            .banner-slider__item::before {
                content:"";
                background-color: <?php the_field('title_background_color_hero_banner') ?>;
            }
        </style>  
        <?php foreach (get_field('banner_slides_hero') as $item): ?>
                   
            <?php if ( $item['title'] && $item['image'] ): ?>
               
                <div data-aos="fade-up" class="swiper-slide banner-slider__item" 
                    style="background-image: url(<?= $item['image'] ?>);">
                        
                    <div class="container">
                        <?= $item['title'] ?>
                    </div>
                    
                </div>
       
            <?php endif; ?>
              
        <?php endforeach; ?>

    </div>
    
    <div class="swiper-pagination"></div>

    <?php if( get_field('show_wave') ): ?>
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