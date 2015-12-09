<div class="wrapper">
  <div id="footer">
    <div id="newsletter">
      <?php
        $a = new GlobalArea('Newsletter Signup');
        $a->display();
      ?>
    </div>
    <div class="footbox">
      <?php
        $a = new GlobalArea('Footbox 1');
        $a->display();
      ?>
    </div>
    <div class="footbox">
      <?php
        $a = new GlobalArea('Footbox 2');
        $a->display();
      ?>
    </div>
    <div class="footbox">
      <?php
        $a = new GlobalArea('Footbox 3');
        $a->display();
      ?>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <br class="clear" />
  </div>
</div>
<?php echo Loader::element('footer_required'); ?>
</body>
</html>