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
  <?php if ($content['preface']): ?>
    <div class="preface-wrapper">
      <div class="grid-container">
        <?php print $content['preface']; ?>
      </div>
    </div>
  <?php else: ?>
  <?php endif; ?>
  <div id="main" class="content-wrapper">
    <?php if ($content['main_content']): ?>
      <div id="content" class="column grid-container" role="main">
        <?php print $content['main_content']; ?>
      </div>
    <?php else: ?>
    <?php endif; ?>
    <?php if ($content['sidebar_content']): ?>
      <div class="column aside region-sidebar-second">
          <?php print $content['sidebar_content']; ?>
      </div>
    <?php else: ?>
    <?php endif; ?>
  </div>
  <?php if ($content['postscript']): ?>
    <div class="postscript-wrapper">
      <div class="grid-container">
        <?php print $content['postscript']; ?>
      </div>
    </div>
  <?php else: ?>
  <?php endif; ?>
  <?php if ($content['footer']): ?>
    <div class="footer-wrapper">
      <footer class="grid-container">
        <?php print $content['footer']; ?>
      </footer>
    </div>
  <?php else: ?>
  <?php endif; ?>
</section>
