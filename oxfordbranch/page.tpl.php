<?php
// $Id: page.tpl.php,v 1.1.2.2.4.2 2011/01/11 01:08:49 dvessel Exp $
?>
<div id="page" class="container-12 clearfix">

  <div id="site-header" class="clearfix">
    <div id="branding" class="grid-4 clearfix">
    <?php if ($linked_logo_img): ?>
      <span id="logo" class="grid-1 alpha"><?php print $linked_logo_img; ?></span>
    <?php endif; ?>

    <?php if ($site_slogan): ?>
      <div id="site-slogan" class="grid-3 omega"><?php print $site_slogan; ?></div>
    <?php endif; ?>
    </div>
  <?php if ($main_menu_links): ?>
    <div id="site-menu" class="grid-12">
      <?php print $main_menu_links; ?>
    </div>
  <?php endif; ?>

  <?php if ($page['search_box']): ?>
    <div id="search-box" class="grid-6 prefix-10"><?php print render($page['search_box']); ?></div>
  <?php endif; ?>
  </div>



  <div id="main" class="column grid-12">
    <?php //print $breadcrumb; ?>
    <?php print render($title_prefix); ?>

    <?php print render($title_suffix); ?>      
    <?php if ($tabs): ?>
      <div class="tabs"><?php print render($tabs); ?></div>
    <?php endif; ?>
    <?php print $messages; ?>
    <?php print render($page['help']); ?>

    <div id="main-content" class="region clearfix">
      <?php print render($page['content']); ?>
    </div>

    <?php print $feed_icons; ?>
  </div>



  <?php include_once('inc/footer.php'); ?>

</div>
