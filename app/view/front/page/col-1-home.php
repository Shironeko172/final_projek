<!DOCTYPE html>
<html>
  <?php $this->getThemeElement('page/html/head', $__forward) ?>
  <body>
  <?php $this->getThemeElement('page/html/navbar', $__forward) ?>
    <?php $this->getThemeContent() ?>

    <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
    <?php $this->getJsFooter(); ?>

    <?php $this->getThemeElement('page/html/footer', $__forward) ?>

    <!-- Load and execute javascript code used only in this page -->
  </body>
</html>