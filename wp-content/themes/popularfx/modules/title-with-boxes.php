<div class="container title-box-wrapper">

    <?php if( get_field('title_with_three_boxes') ): ?>   

        <div class="title-box-wrapper__title">

            <?php the_field('title_with_three_boxes') ?>

        </div>

    <?php endif; ?>
    
    <div class="title-box-wrapper-items">

        <div class="single-item" style="background:<?php the_field('box_background_color_title_with_boxes') ?>">
            <a href="<?php the_field('box_1_url_title_with_boxes') ?>">
                <img src="<?php the_field('box_1_img_title_with_boxes') ?>" alt="logo" >
                <p style="color: <?php the_field('box_font_color_title_with_boxes') ?>"><?php the_field('box_1_text_title_with_boxes') ?></p>
            </a>
        </div>
        <div class="single-item" style="background:<?php the_field('box_background_color_title_with_boxes') ?>">
            <a href="<?php the_field('box_2_url_title_with_boxes') ?>">
                <img src="<?php the_field('box_2_img_title_with_boxes') ?>" alt="logo" >
                <p style="color: <?php the_field('box_font_color_title_with_boxes') ?>"><?php the_field('box_2_text_title_with_boxes') ?></p>
            </a>
        </div>
        <div class="single-item" style="background:<?php the_field('box_background_color_title_with_boxes') ?>">
            <a href="<?php the_field('box_3_url_title_with_boxes') ?>">
                <img src="<?php the_field('box_3_img_title_with_boxes') ?>" alt="logo" >
                <p style="color: <?php the_field('box_font_color_title_with_boxes') ?>"><?php the_field('box_3_text_title_with_boxes') ?></p>
            </a>
        </div>

    </div>
</div>