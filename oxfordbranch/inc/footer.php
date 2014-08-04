
  <div id="footer">
    <?php if ($page['footer']): ?>
      <div id="footer-region" class="region grid-12 clearfix">
        <?php print render($page['footer']); ?>
        <p id="copyright">&copy; Copyright Oxford Branch <?php echo date('Y'); ?></p>
      </div>
    <?php endif; ?>
  </div>