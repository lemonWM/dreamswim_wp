<a href="#kontakt" id="kontakt" style="height:0px"></a>
<div class="social-bar-wrapper" style="background:<?php the_field('background_color_social_bar') ?>">

    <?php if( get_field('show_waves_social_bar') ): ?>
        <div class="image-text-wrapper__overlay image-text-wrapper__overlay-top">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 226.81" style="opacity: 1.0">
                <path fill="#FFFFFF" d="M0,115.1c260.5.4,494.4,115.7,1054,111.6,444-3.2,657.6-87.6,866-161.9V0H0"></path>
            </svg>
        </div>
    <?php endif;?>

    <div class="container main-social-wrapper">

        <div class="social-wrapper">

            <?php if( get_field('title_social_bar') ): ?>
                <div class="social-wrapper__header">
                    <?php the_field('title_social_bar') ?>
                </div>
            <?php endif;?>

            <?php
            $social = get_field('social_items');
                if( $social ): ?>
                <div class="social-wrapper__content">
                    <ul>
                        <li class="inst">
                            <a href="<?php echo $social['url_instagram'] ?>" target="_blank">
                                <img src="<?php echo $social['instagram_icon']['url'] ?>" alt="instagram">
                            </a>
                        </li>
                        <li class="fb">
                            <a href="<?php echo $social['url_facebook'] ?>" target="_blank">
                                <img src="<?php echo $social['facebook_icon']['url'] ?>" alt="facebook">
                            </a>
                        </li>
                        <li class="yt">
                            <a href="<?php echo $social['url_youtube'] ?>" target="_blank">
                                <img src="<?php echo $social['youtube_icon']['url'] ?>" alt="youtube">
                            </a>
                        </li>
                        <li class="tel">
                            <a href="tel:+48<?php echo $social['url_phone'] ?>">
                                <img src="<?php echo $social['phone_icon']['url'] ?>" alt="phone">
                            </a>
                        </li>
                        <li class="mail">
                            <a href="mailto:<?php echo $social['url_email'] ?>" target="_blank">
                                <img src="<?php echo $social['mail_icon']['url'] ?>" alt="email">
                            </a>
                        </li>
                    </ul>
                </div>
            <?php endif; ?>
        </div>

    </div>
    
    <?php if( get_field('show_waves_social_bar') ): ?>            
        <div class="image-text-wrapper__overlay image-text-wrapper__overlay-bottom">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 174.88" style="opacity: 1.0;">
                    <path fill="#FFFFFF" d="M1920.53,151.74C1663.76,136.07,1513.59,65.62,968,14.49,411.89-37.64,64.53,67.29.22,71.6c0,0-.67-37.24.31,103.28h1920"></path>
                </svg>
        </div>
    <?php endif;?>   
</div>