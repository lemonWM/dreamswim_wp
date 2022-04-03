<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PopularFX
 */

?>


<div class="container" style="margin-top: <?php the_field('gallery_margin_top') ?>px; margin-bottom: <?php the_field('gallery_margin_bottom') ?>px;">
<div class="gallery-description" style=""><?php the_field('gallery_description') ?></div>
  <div class="gallery-filters" style="margin-top: 50px;">
    <p class="all-filter active-filter">Wszystko</p>
    <p class="videos-filter">Filmy</p>
    <p class="images-filter">Zdjęcia</p>
  </div>
	<div id="content" class="gallery-wrapper">
   <?php foreach (get_field('gallery_items') as $gallery_items): ?>
      <?php if ($gallery_items['video']): ?>
         <a class="gallery-wrapper__item videos" data-fancybox="gallery" href="<?= $gallery_items['video_link'] ?>" data-fancybox data-type="iframe" data-preload="false" >
         <iframe id="ytplayer" type="text/html" src="<?= $gallery_items['video_link'] ?>" frameborder="0"></iframe> 
         </a>
      <?php endif; ?>
      <?php if ($gallery_items['video'] == false): ?>
         <a class="gallery-wrapper__item images" data-fancybox="gallery" data-caption="<?= $gallery_items['title_of_image'] ?>" href="<?= $gallery_items['image'] ?>"><img alt="" src="<?= $gallery_items['image'] ?>" /></a>
         <?php endif; ?>
       
   <?php endforeach; ?> 
		<div class="gallery-wrapper__buttons">
			<div id="showLess" style="display: none;"><?php the_field('gallery_button_less') ?></div>
			<div id="loadMore"><?php the_field('gallery_button_more') ?></div>
		</div>
	</div>
</div>