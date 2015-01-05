<?php

/**
 * Page Template
 */

?>

<div class="l-container" id="site-header">
  <div class="l-inner-container">
  </div>

  <div class="l-inner-container menu-container">
    <a class="logo" href="/"><span class="site-name"><?php print $site_name; ?></span><span class="site-slogan"><?php print $site_slogan; ?></span></a>
    <?php print render($page['header']); ?>
    <i class="hamburger fa fa-bars"></i>
  </div>
  <div class="clearfix"></div>
</div>

<article class="l-container" id="page-content">
  <div class="l-inner-container">


    <?php print $messages; ?>
    <?php print render($tabs); ?>

    <div class="l-title">
      <?php if($title): ?>
        <h1><?php print $title; ?></h1>
      <?php endif; ?>
    </div>

    <div class="l-main">
      <?php print render($page['content']); ?>
    </div>

    <?php if($page['sidebar']): ?>
      <aside class="l-sidebar">
        <?php print render($page['sidebar']); ?>
      </aside>
    <?php endif; ?>

  </div>
</article>


<div class="l-container" id="site-footer">
  <div class="l-inner-container">
    <?php print render($page['footer']); ?>
    <div class="copyright"><?php echo date('Y'); ?> &copy; Urbanarium Society. All Rights Reserved.</div>
  </div>
</div>
