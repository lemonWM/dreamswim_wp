<div class="simple-gallery-wrapper">
    <div class="container">
        <div class="simple-gallery">
            <div class="simple-gallery__header">
                <?php if( get_field('title_simple_gallery') ): ?>
                    <?php the_field('title_simple_gallery') ?>
                <?php endif;?>
            </div>
            <div class="simple-gallery__grid">
                
                <?php
                    $hero = get_field('images_simple_gallery');
                    if( $hero ): ?>
                    
                    <div class="simple-gallery__grid-item item-big"
                            style="background-image: url(<?php echo $hero['image_simple_gallery_1']['url'] ?>)">

                            <p class="item-title"><?php echo $hero['text_simple_gallery_1'] ?></p>
                    </div>
                    <div class="four-items">
                        <div class="simple-gallery__grid-item item-normal"
                                style="background-image: url(<?php echo $hero['image_simple_gallery_2']['url'] ?>)">

                                <p class="item-title"><?php echo $hero['text_simple_gallery_2'] ?></p>
                        </div>

                        <div class="simple-gallery__grid-item item-normal"
                                style="background-image: url(<?php echo $hero['image_simple_gallery_3']['url'] ?>)">

                                <p class="item-title"><?php echo $hero['text_simple_gallery_3'] ?></p>
                        </div>

                        <div class="simple-gallery__grid-item item-normal"
                                style="background-image: url(<?php echo $hero['image_simple_gallery_4']['url'] ?>)">

                                <p class="item-title"><?php echo $hero['text_simple_gallery_4'] ?></p>
                        </div>

                        <div class="simple-gallery__grid-item item-normal"
                                style="background-image: url(<?php echo $hero['image_simple_gallery_5']['url'] ?>)">

                                <p class="item-title"><?php echo $hero['text_simple_gallery_5'] ?></p>
                        </div>
                    </div>


                    <div class="simple-gallery__grid-item item-normal"
                            style="background-image: url(<?php echo $hero['image_simple_gallery_6']['url'] ?>)">

                            <p class="item-title"><?php echo $hero['text_simple_gallery_6'] ?></p>
                    </div>

                    <div class="simple-gallery__grid-item item-width"
                            style="background-image: url(<?php echo $hero['image_simple_gallery_7']['url'] ?>)">

                            <p class="item-title"><?php echo $hero['text_simple_gallery_7'] ?></p>
                    </div>
                                    
                <?php endif; ?>
            </div>

            <div class="simple-gallery__btn">
                <a class="btn-1" href="<?php the_field('button_link') ?>"><?php the_field('button_text') ?></a>
            </div>
        </div>
    </div>
</div>