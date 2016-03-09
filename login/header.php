<?php
  /**
   * Header
   *
   * @package Advanced Login System
   * @author wojoscripts.com
   * @copyright 2010
   * @version $Id: header.php, v2.00 2011-07-10 10:12:05 gewa Exp $
   */
  
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');
	  
	  $news = $core->renderNews();
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<title><?php echo $core->site_name;?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href="theme/css/front.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="assets/jquery-ui.css" type="text/css" />
<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script type="text/javascript" src="assets/js/jquery.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui.js"></script>
<script src="assets/js/jquery.ui.touch-punch.js"></script>
<script src="assets/js/jquery.wysiwyg.js"></script>
<script src="assets/js/global.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/js/modernizr.mq.js" type="text/javascript" ></script>
<script src="assets/js/checkbox.js"></script>
</head>
<body>
<div id="loader" style="display:none"></div>
<div class="container">
<div class="row"> 
<div class="col grid_8">
 
</div>
 
  </div>
  <?php if($news):?>
   
  <?php endif;?>
  <div id="msgholder"></div>