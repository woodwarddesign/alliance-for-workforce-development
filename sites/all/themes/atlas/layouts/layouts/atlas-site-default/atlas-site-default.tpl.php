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
      <?php print $content['preface']; ?>
    </div>
  <?php else: ?>
  <?php endif; ?>
  <div id="main" class="content-wrapper">
    <div id="content" class="column grid-container" role="main">
    <?php if ($content['main_content']): ?>
        <div class="region-content">
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
  </div>
  <?php if ($content['postscript']): ?>
    <div class="postscript-wrapper">
      <div class="grid-container">
        <?php print $content['postscript']; ?>
      </div>
    </div>
  <?php else: ?>
  <?php endif; ?>

    <div class="footer-wrapper">
      <footer class="grid-container">
        <?php if ($content['footer']): ?>
          <?php print $content['footer']; ?>
        <?php else: ?>
        <?php endif; ?>
        <div class="copyright"><p>Copyright &copy; <?php echo(date("Y",time ())); ?> Alliance for Workforce Development, Inc. All Rights Reserved.</p></div>
      </footer>
    </div>
</section>
