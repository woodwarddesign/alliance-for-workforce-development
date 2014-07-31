<div class="atlas-site-default">
  <section class="header-wrapper">
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
  </section>
  <?php if ($content['preface']): ?>
    <section class="preface-wrapper">
      <?php print $content['preface']; ?>
    </section>
  <?php else: ?>
  <?php endif; ?>
  <section id="main" class="content-wrapper">
    <div id="content" class="column grid-container" role="main">
    <?php if ($content['main_content']): ?>
      <article class="region-content">
        <?php print $content['main_content']; ?>
      </article>
    <?php else: ?>
    <?php endif; ?>
    <?php if ($content['sidebar_content']): ?>
      <aside class="column aside region-sidebar-second">
          <?php print $content['sidebar_content']; ?>
      </aside>
    <?php else: ?>
    <?php endif; ?>
  </div>
</section>
  <?php if ($content['postscript']): ?>
    <section class="postscript-wrapper">
      <div class="postscript grid-container">
        <?php print $content['postscript']; ?>
      </div>
    </section>
  <?php else: ?>
  <?php endif; ?>

    <section class="footer-wrapper">
      <footer class="grid-container">
        <?php if ($content['footer']): ?>
          <?php print $content['footer']; ?>
        <?php else: ?>
        <?php endif; ?>
        <div class="copyright"><p>Copyright &copy; <?php echo(date("Y",time ())); ?> Alliance for Workforce Development, Inc. All Rights Reserved.</p></div>
      </footer>
    </section>
</div>
