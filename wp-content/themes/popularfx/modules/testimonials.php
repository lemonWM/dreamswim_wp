
<style>
 .testimonials .swiper-pagination-testimonials .swiper-pagination-bullet-active {
   background-color: <?php the_field('testimonials_bullet_background_color') ?>;
 }
</style>
<div class="container">
    <section class="testimonials">
      <div class="swiper testimonial-swiper" style="margin-top: <?php the_field('testimonials_margin_top') ?>px; margin-bottom: <?php the_field('testimonials_margin_bottom') ?>px;">
        <div class="swiper-container">
          <div class="title">
            <h2><?php the_field('testimonial_title') ?></h2>
            <p><?php the_field('testimonial_description') ?></p>
          </div>
          <div class="swiper-wrapper">
          <?php foreach (get_field('testimonials_items') as $testimonial): ?>
            <?php if ($testimonial['testimonial_description']): ?>
            <div class="swiper-slide" id="swiper-slide">
              <div class="swiper-slide-wrapper" style="background-color: <?= $testimonial['testimonial_background_color'] ?>;">
                <div class="content">
                  <div class="description">
                    <?= $testimonial['testimonial_description'] ?>
                  </div>
                </div>
              </div>
            </div>
            <?php endif; ?>
            <?php endforeach; ?>
          </div>
          <div class="swiper-pagination-testimonials"></div>
        </div>
      </div>
    </section>
  </div>