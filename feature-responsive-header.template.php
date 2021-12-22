
<header class="feature-responsive-header" id="top">
  <div class="site-layout-container">
    <div class="site-layout-container__inner">

      <?php do_action("feature_responsive_header_begin"); ?>

      <div class="feature-responsive-header__logo">
        <figure>
          <a href="/" title="<?= get_bloginfo('name'); ?>">
            <?php if (has_custom_logo()): ?>
              <img src="<?= esc_url(wp_get_attachment_url(get_theme_mod('custom_logo'))); ?>" alt="">
            <?php else: ?>
              <strong><?= get_bloginfo('name'); ?></strong>
            <?php endif; ?>
          </a>
          <figcaption><?= get_bloginfo('description'); ?></figcaption>
        </figure>
      </div>

      <?php do_action("feature_responsive_header_end"); ?>

    </div>
  </div>
</header>
