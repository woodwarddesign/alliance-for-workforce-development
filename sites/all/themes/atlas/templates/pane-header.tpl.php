<?php
/**
 * @file
 *
 * Theme implementation to display the header block on a Drupal page.
 *
 * This utilizes the following variables thata re normally found in
 * page.tpl.php:
 * - $logo
 * - $front_page
 * - $site_name
 * - $front_page
 * - $site_slogan
 * - $search_box
 *
 * Additional items can be added via theme_preprocess_pane_header(). See
 * template_preprocess_pane_header() for examples.
 */
 ?>
<div class="header-wrapper">
  <header class="header grid-container" id="header" role="banner">
    <div class="branding-wrapper">
    <div class="region region-branding">
      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" class="header__logo" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="header__logo-image" /></a>
      <?php endif; ?>

      <?php if ($site_name || $site_slogan): ?>
        <div class="header__name-and-slogan" id="name-and-slogan">
          <?php if ($site_name): ?>
            <h1 class="site-name">
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><?php print $site_name; ?></a>
            </h1>
          <?php endif; ?>

          <?php if ($site_slogan): ?>
            <div class="header__site-slogan" id="site-slogan"><?php print $site_slogan; ?></div>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php print render($page['branding']); ?>
    </div>
  </div>
  <div class="menu-wrapper">
     <?php if($main_menu): ?>
     <div class="region-menu">
      <a href="#menu" class="menu-link">Menu</a>
      <?php print render($page['menu']); ?>
    </div>
   <?php endif; ?>
  </div>
  </header>
</div>
