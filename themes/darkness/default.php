<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Darkness
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="<?php echo $this->getThemePath(); ?>/styles/layout.css" type="text/css" />
<?php echo Loader::element('header_required'); ?>
</head>
<body id="top">
<div class="wrapper">
  <div id="header">
    <div id="logo">
      <?php
        $a = new GlobalArea('Site Logo');
        $a->display();
      ?>
    </div>
    <div id="topnav">
      <?php
        $a = new GlobalArea('Header Nav');
        $a->display();
      ?>
    </div>
    <br class="clear" />
  </div>
</div>
 
<div class="wrapper">
  <div id="container">
    <?php
      $a = new Area('Main');
      $a->display($c);
    ?>
  </div>
</div>
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