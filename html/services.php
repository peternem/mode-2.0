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
	<article id="mainContentImage" class="contactPad">
    <hgroup class="indexTitle1 mainCopyBrand">
      <h2><?php echo $nameX; ?></h2>
      <p>Mode Distributing is the premier home appliance distributor in Southern California. Our goal is to provide you with the highest level of service for your building, remodeling or replacement project.</p>
      <?php include 'includes/sitewide-contactInfo.php' ?>
    </hgroup>
    <img src="images/vah/ventahood-470x500.jpg" alt="Mode Products" class="mainImg brandImg "/>
  </article>
</div>
<footer>
  <?php include 'includes/sitewide-footer.php'; ?>
</footer>
<?php include 'includes/sitewide-copyright.php'; ?>
</body>
</html>
