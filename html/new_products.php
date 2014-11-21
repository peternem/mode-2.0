<?php
include 'includes/sitewide-globals.php';
 ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>
<?php
	include 'includes/sitewide-PageTitle.php';
 ?>
</title>
<?php
	include 'includes/sitewide-metaTags.php';
 ?>
<link href="css/mode-style1.css" rel="stylesheet" type="text/css" />
<link href="css/main_navigation_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="themes/base/jquery.ui.all.css"/>
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script src="js/jquery-1.8.0.js"></script>
<script src="js/jquery-horizontalMenu.js" type="text/javascript"></script>
<script src="js/sitewide-scrollToDiv.js" type="text/javascript"></script>
<script src="external/jquery.bgiframe-2.1.2.js"></script>
<script src="ui/jquery.ui.core.js"></script>
<script src="ui/jquery.ui.widget.js"></script>
<script src="ui/jquery.ui.mouse.js"></script>
<script src="ui/jquery.ui.draggable.js"></script>
<script src="ui/jquery.ui.position.js"></script>
<script src="ui/jquery.ui.resizable.js"></script>
<script src="ui/jquery.ui.dialog.js"></script>
<script src="ui/jquery.ui.tabs.js"></script>
<script src="ui/jquery.ui.button.js"></script>
<script src="js/sitewide-scripts-tabs.js" type="text/javascript"></script>
<script src="js/sitewide-scripts-modal-popup.js" type="text/javascript"></script>
<!-- Slideshow UI -->
<script type="text/javascript" src="js/chili-1.7.pack.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/sitewide-scripts-slideshow.js"></script>
<?php include_once("includes/analyticstracking.php") ?>
</head>
<body>
<div id="wrapper">
  <?php include 'includes/sitewide-header.php'; ?>
  <div id="quickLinks"><?php include 'includes/sitewide-quickLinkNav.php'; ?></div>
  <article id="mainContentImage">
   <hgroup class="indexTitle1">
      <h2><?php echo $nameX; ?></h2>
      <p>We are continually introducing new products and brands on a regular basis. Here is just a few of the latest additions to our product line.</p>
      	<p>Mode Distributing is the premier home appliance distributor in Southwest California, Arizona, Nevada and Hawaii.</p>
    </hgroup>
    <img src="images/CWEAH6-K-ARS-357x179.jpg" alt="Mode Products" class="mainImg"/>
  </article>
  <article id="mainContent">
    <div id="tabs">
		<div id="tab-left">
			<h3>New Product Menu</h3>
			<img src="images/AGA-PRO+_Range-Oven_Pizza-Detail-300x150.jpg" alt="" class="imageTabBox1 clearfix" /></a>
			<h4>Click a link below to learn more about New products offerings at Mode Distributing.</h4>
			<ul class="ui-tabs-nav">
			  <li><a href="#tabs-1" target="blank">AGA Professional Series</a></li>
			  <li><a href="#tabs-2" target="blank">AGA Total Control TC5 Cooker</a></li>
			</ul>
      	</div>
		<div id="tabs-1">
			<?php include 'products/aga/AGA_professional_series.php'?>
		</div>
		<div id="tabs-2">
			<?php include 'products/aga/AGA_total_control_-_TC5.php'?>
		</div>
  </article>
</div>
<footer>
  <?php
	include 'includes/sitewide-footer.php';
 ?>
</footer>
<?php
	include 'includes/sitewide-copyright.php';
 ?>
</body>
</html>
