<?php $this->inc('elements/header.php'); ?>
<div class="wrapper">
  <div id="container">
    <div id="content">
      <?php
        $a = new Area('Main');
        $a->display($c);
      ?>
    </div>
    <div id="column">
      <?php
        $a = new Area('Sidebar');
        $a->display($c);
      ?>
    </div>
    <br class="clear" />
  </div>
</div>
<?php $this->inc('elements/footer.php'); ?>