<?php $team_filters_spacing = get_field('team_filters_spacings') ?>
<?php $team_filters_settings = get_field('team_filters_settings') ?>
<div class="container">
    <section class="team-navigation" style="margin-top: <?php echo $team_filters_spacing['container_margin_top']; ?>px; margin-bottom: <?php echo $team_filters_spacing['container_margin_bottom']; ?>px;">
      <div class="team-navigation-wrapper">
        <div class="team-navigation-wrapper__header">
          <h2><?php the_field('team_filters_header') ?></h2>
          <p><?php the_field('team_filters_description') ?></p>
          <div class="team-navigation-wrapper__header--filters" style="margin-bottom: <?php echo $team_filters_settings['filters_margin_bottom']; ?>px;">
          <?php foreach (get_field('team_filters') as $item): ?>
            <?php if ($item): ?>
            <p style="color: <?php echo $team_filters_settings['filters_colors']; ?>; border-color: <?php echo $team_filters_settings['filters_colors']; ?>;" data-filter=".<?= $item ?>"><?= $item ?></p>
            <?php endif; ?>
          <?php endforeach; ?>
          </div>
        </div>
        <div class="team-navigation-wrapper__images">
        <?php foreach (get_field('team_filters_items') as $item): ?>
          <?php if ($item['image'] && $item['filter_name'] && $item['link_to']['url'] ): ?>
            <div style="background-image: url('<?= $item['image'] ?>')"class="team-navigation-wrapper__images--image <?= $item['filter_name'] ?>"><a href="<?= $item['link_to']['url'] ?>"><p><?= $item['full_name'] ?></p></a></div>
          <?php endif; ?>
          <?php endforeach; ?>
        </div>
      </div>
    </section>
  </div>
  </div>