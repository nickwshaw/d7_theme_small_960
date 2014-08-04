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

  <?php if (!empty($page['search_box'])): ?>
    <div id="search-box" class="grid-6 prefix-10"><?php print render($page['search_box']); ?></div>
  <?php endif; ?>
  </div>

  <div class="prefix-1 suffix-1 clearfix">
  <?php if ($page['highlighted']): ?>
    <div id="highlighted" class="<?php print ns('grid-14', $page['header'], 7); ?>">
      <?php print render($page['highlighted']); ?>
    </div>
  <?php endif; ?>

  <?php if ($page['header']): ?>
    <div id="header-region" class="region <?php print ns('grid-14', $page['highlighted'], 7); ?> clearfix">
      <?php print render($page['header']); ?>
    </div>
  <?php endif; ?>
  </div>


  <div id="main" class="column grid-12">

    <?php print $messages; ?>
    <div id="main-content" class="region clearfix">
      <div class="grid-4 alpha">
      <?php if(!empty($page['homepage1'])) : ?>
       <?php print render($page['homepage1']); ?>
      <?php endif; ?>
      </div>
      <div class="grid-8 omega box_back"><div class="carousel"><?php print views_embed_view('homepage_carousel', 'block_1'); ?></div></div>
      <div id="home-bottom" class="grid-12 alpha omega">
        <div class="grid-4 alpha"><?php print (!empty($page['homepage_bottom_left'])) ? render($page['homepage_bottom_left']) : ''; ?></div>
        <div class="grid-4"><?php print (!empty($page['homepage_bottom_middle'])) ? render($page['homepage_bottom_middle']) : ''; ?></div>
        <div class="grid-4 omega"><?php print (!empty($page['homepage_bottom_right'])) ? render($page['homepage_bottom_right']) : ''; ?></div>
      </div>
    </div>

    <?php print $feed_icons; ?>
  </div>


  <?php include_once('inc/footer.php'); ?>

</div>
