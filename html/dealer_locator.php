<?php include 'includes/sitewide-globals.php'; ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>
<?php include 'includes/sitewide-PageTitle.php'; ?>
</title>
<?php include 'includes/sitewide-metaTags.php'; ?>
<link href="css/mode-style1.css" rel="stylesheet" type="text/css" />
<link href="css/main_navigation_style.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php include 'includes/sitewide-scripts.php'; ?>
<?php include_once("includes/analyticstracking.php") ?>
</head>
<body>
<div id="wrapper">
	<?php include 'includes/sitewide-header.php'; ?>
  	<div id="quickLinks"><?php include 'includes/sitewide-quickLinkNav.php'; ?></div> 
  	<article id="mainContentImage">
    <hgroup class="indexTitle1">
      <h2><?php echo $nameX; ?></h2>
      <p>Mode Distributing has dealers in California, Hawaii, Nevada, Arizona, and Southern Utah which carry our products. Feel free to use the Mode Distributing store/dealer locator to locate a dealer that carries our products. The locator will search our database based on your current zip code or location and output a list of dealers.</p>
    </hgroup>
    <img src="images/18AR-AF-SS_357x179.jpg" alt="Mode Products" class="mainImg"/> </article>
  <article id="mainContent">
    <div class="ui-tabs">
      <!-- Begin Easy Locator Store Locator Service //-->
      <script type="text/javascript" src="http://www.easylocator.net/api/embedIframe/webmaster/controller/search/function/map2/template/template_0005"></script>
      <div id="EasyLocatorWrapper"></div>
      <!-- End Easy Locator Store Locator Service //-->
    </div>
  </article>
</div>
<footer>
  <?php include 'includes/sitewide-footer.php'; ?>
</footer>
<?php include 'includes/sitewide-copyright.php'; ?>
</body>
</html>
