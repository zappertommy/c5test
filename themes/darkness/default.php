<?php $this->inc('elements/header.php'); ?>
<div class="wrapper">
  <div id="container">
    <?php
      $a = new Area('Main');
      $a->display($c);
    ?>
  </div>
</div>
<?php $this->inc('elements/footer.php'); ?>