<div class="simple-gallery-wrapper">
    <div class="container">
        <div class="simple-gallery">
            <div class="simple-gallery__header">
            <?php if( get_field('title_four_item_grid') ): ?>
                    <?php the_field('title_four_item_grid') ?>
                <?php endif; ?>
            </div>
            <div class="simple-gallery__grid">
                
                <?php
                    $hero = get_field('four_images_with_links');
                    if( $hero ): ?>
                    

                    <div class="four-items">
                        <?php if ($hero['image_1_four_image_grid']['url']  ): ?>
                            <a  href="<?php echo $hero['url_1_four_image_grid'] ?>" 
                                class="simple-gallery__grid-item item-width item-width-60"
                                style="background-image: url(<?php echo esc_url( $hero['image_1_four_image_grid']['url'] ); ?>)">

                                    <p class="item-title"><?php echo $hero['title_1_four_image_grid'] ?></p>
                            </a>
                        <?php endif; ?>
                        <?php if ($hero['image_2_four_image_grid']['url']  ): ?>
                            <a  href="<?php echo $hero['url_2_four_image_grid'] ?>"
                                class="simple-gallery__grid-item item-normal"
                                style="background-image: url(<?php echo esc_url( $hero['image_2_four_image_grid']['url'] ); ?>)">

                                <p class="item-title"><?php echo $hero['title_2_four_image_grid'] ?></p>
                            
                            </a>
                        <?php endif; ?>
                        <?php if ($hero['image_3_four_image_grid']['url']  ): ?>
                            <a  href="<?php echo $hero['url_3_four_image_grid'] ?>" 
                                class="simple-gallery__grid-item item-normal"
                                style="background-image: url(<?php echo esc_url( $hero['image_3_four_image_grid']['url'] ); ?>)">

                                <p class="item-title"><?php echo $hero['title_3_four_image_grid'] ?></p>
                            </a>
                        <?php endif; ?>
                    </div>
                    <?php if ($hero['image_4_four_image_grid']['url']  ): ?>
                        <a  href="<?php echo $hero['url_4_four_image_grid'] ?>" 
                            class="simple-gallery__grid-item item-big"
                            style="background-image: url(<?php echo esc_url( $hero['image_4_four_image_grid']['url'] ); ?>)">

                            <p class="item-title"><?php echo $hero['title_4_four_image_grid'] ?></p>
                        </a>
                    <?php endif; ?> 
                    <?php if ($hero['image_5_four_image_grid']['url']  ): ?>
                            <a  href="<?php echo $hero['url_5_four_image_grid'] ?>" 
                                class="simple-gallery__grid-item item-normal"
                                style="background-image: url(<?php echo esc_url( $hero['image_5_four_image_grid']['url'] ); ?>)">

                                <p class="item-title"><?php echo $hero['title_5_four_image_grid'] ?></p>
                            </a>
                    <?php endif; ?>
                    <?php if ($hero['image_6_four_image_grid']['url']  ): ?>
                            <a  href="<?php echo $hero['url_6_four_image_grid'] ?>" 
                                class="simple-gallery__grid-item item-normal"
                                style="background-image: url(<?php echo esc_url( $hero['image_6_four_image_grid']['url'] ); ?>)">

                                <p class="item-title"><?php echo $hero['title_6_four_image_grid'] ?></p>
                            </a>
                    <?php endif; ?>    
                    <?php if ($hero['image_7_four_image_grid']['url']  ): ?>
                            <a  href="<?php echo $hero['url_7_four_image_grid'] ?>" 
                                class="simple-gallery__grid-item item-normal"
                                style="background-image: url(<?php echo esc_url( $hero['image_7_four_image_grid']['url'] ); ?>)">

                                <p class="item-title"><?php echo $hero['title_7_four_image_grid'] ?></p>
                            </a>
                    <?php endif; ?>                  
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>