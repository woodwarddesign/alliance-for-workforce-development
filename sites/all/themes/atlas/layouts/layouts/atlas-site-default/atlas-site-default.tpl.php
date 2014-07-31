<section class="atlas-site-default">
  <div class="header-wrapper">
    <header class="header grid-container" id="header" role="banner">
  	   <?php if ($content['branding']): ?>
            <div class="region-branding">
              <?php print $content['branding']; ?>
            </div>
          <?php else: ?>
        <?php endif; ?>
        <?php if ($content['menu']): ?>
             <div class="region-menu">
               <?php print $content['menu']; ?>
             </div>
           <?php else: ?>
         <?php endif; ?>
    </header>
  </div>
        <?php if ($content['main_content']): ?>
          <div id="main" class="content-wrapper">
            <div id="content" class="column grid-container" role="main">
              <?php print $content['main_content']; ?>
            </div>
          </div>
        <?php else: ?>
        <?php endif; ?>
        <?php if ($content['footer']): ?>
          <footer class="grid-container">
            <?php print $content['footer']; ?>
          </footer>
        <?php else: ?>
        <?php endif; ?>
</section>
