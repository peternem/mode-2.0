<?php include 'includes/sitewide-globals.php'; 

//Flag for Brand Page to add Blue line css class 'activePage' to Product link on Main Nav Menu. Also used for guicklings navigation
 $subProductPage = 'subProdPage';
 $brandpage = 'brandPage';
 
 ?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>
<?php include 'includes/sitewide-PageTitle.php'; ?>
</title>
<meta name="description" content="Mode Distributing is the premier home appliance distributor in Southwest California, Arizona, Nevada and Hawaii.   We carry Vent-A-Hood Range Hoods, AGA, Heartland, Marvel high-end home and kitchen appliances.">
<meta name="keywords" content=" Vent-A-Hood Range Hoods, AGA, Heartland, Marvel , Luxury Appliances, Luxury Appliance Showrooms, Appliances Southern California, Appliance Showrooms">
<meta content="range hoods, range hood, kitchen range hoods, range vent hoods, kitchen range hood, kitchen vent hood, kitchen ventilations, kitchen ventilation, kitchen island range hood, island range hoods, range hood under cabinet, wall mount range hoods, range hood style, euro style wall mount, european style wall mount, island range hoods, kitchen island hoods, island ceiling mount hoods, island vent hoods, island exhaust hoods, island stove hoods, liner inserts, general ventilations, hood canopy, blower system"/>
<meta content="stoves, cooking ranges, kitchen refridgerators, under counter refridgerators, outdoor patio, outdoor patio refridgerators"/>

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
  <article id="mainContentImage" class="marvelProd">
    <hgroup class="indexTitle1">
      <h2><?php echo $nameX; ?></h2>
 <p>The best of everything comes together in Marvel undercounter refrigeration. Elegant styling, smart shelving designs, and superior performance from products built in the USA.
 <p>Marvel and Marvel Professional refrigerators are a marriage of performance and style. Our advanced Dynamic Cooling™ technology provides superior temperature control. Even with frequent usage, temperature recovery times are fast and temperatures are consistent from top to bottom. And we've designed a shelving configuration that provides unmatched storage capacity and flexibility.</p></p>
	</hgroup>
    <img src="images/marvel/MPRO66WCM-In-Set-copy.jpg" alt="Mode Products" class="mainImg"/> </article>
  <article id="mainContent">
  	<section class="prodBox_odd oneHalfBox">&nbsp;</section>
    <section class="prodBox_odd">
      <h3 class="brand_logo"><a href="marvel.php" title="Marvel"><img src="images/brand_logos/marvel_logo_95x34.png" alt="Marvel"></a></h3>
      <a title="Visit Marvel" href="marvel.php" class="imageLink rollButton"><img src="images/rollover/marvel-btn.png" alt="AGA/Marvel Appliances" class="imageFloat1 clearfix" /></a>
      <div class="moreInfoDiv"> <a href="marvel.php"><span>Learn More</span><img src="images/icons/learnMoreArrow.png" alt="&raquo;"/></a></div>
    </section>
	<section class="prodBox_odd">
      <h3 class="brand_logo"><a href="marvel_outdoor.php" title="Marvel"><img src="images/brand_logos/marvel_outdoor_100x36.png" alt="Marvel"></a></h3>
      <a title="Visit Marvel Outdoor" href="marvel_outdoor.php" class="imageLink rollButton"><img src="images/rollover/marvel-btn.png" alt="AGA/Marvel Appliances" class="imageFloat1 clearfix" /></a>
      <div class="moreInfoDiv"> <a href="marvel_outdoor.php"><span>Learn More</span><img src="images/icons/learnMoreArrow.png" alt="&raquo;"/></a></div>
    </section>
    <section class="prodBox_odd">
      <h3 class="brand_logo"><a href="marvel_professional.php" title="Marvel"><img src="images/brand_logos/marvel_profesional_100x36.png" alt="Marvel"></a></h3>
      <a title="Visit Marvel Professional" href="marvel_professional.php" class="imageLink rollButton"><img src="images/rollover/marvel-prof-btn.png" alt="AGA/Marvel Appliances" class="imageFloat1 clearfix" /></a>
      <div class="moreInfoDiv"> <a href="marvel_professional.php"><span>Learn More</span><img src="images/icons/learnMoreArrow.png" alt="&raquo;"/></a></div>
    </section>
    <section class="prodBox_even oneHalfBox last">&nbsp;</section>
  </article>
</div>
<footer>
  <?php include 'includes/sitewide-footer.php'; ?>
</footer>
<?php include 'includes/sitewide-copyright.php'; ?>
</body>
</html>
