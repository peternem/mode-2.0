<?php include 'includes/sitewide-globals.php';

//Flag for Brand Page to add Blue line css class 'activePage' to Product link on Main Nav Menu and quick links
 $brandpage = 'brandPage';
 $subProductPage = 'subProdPage';
 $marvelSubProdPage = 'marvelSubProdPg';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php include 'includes/sitewide-PageTitle.php'; ?> Products - Refrigeration, Fridge, Oven</title>
<meta name="keywords" content="Marvel, Marvel Refrigerators,Marvel Ice Makers,Marvel Outdoor Kitchens,Marvel Wine Coolers,Marvel Sinks and Faucets,Marvel Beverage Center,Marvel Appliance Accessories,Marvel Refrigerator Accessories,Marvel Ice Maker Drain PumpsMarvel Compact Refrigerators,Marvel Refrigerator Only,Marvel Beer Dispenser,Marvel Drawer Refrigerators,Marvel Black,Marvel Panel Ready,Marvel Stainless Steel,Marvel White,Marvel Outdoor Refrigerators,Marvel 26-50 Bottles,Marvel 51-75 Bottles,Marvel 25 Bottles and Under,Marvel 76 Bottles and Above,Marvel Wine Cooler Accessories,Marvel Sinks,Marvel Faucets,Marvel Sink Accessories,Marvel Black,Marvel Panel Ready,Marvel Stainless Steel,Marvel White,Marvel General Refrigerator Accessories">
<meta name="description" content="Mode Distributing is the premier home appliance Marvel Applience distributors in Southwest California, Arizona, Nevada and Hawaii.   We carry Vent-A-Hood Range Hoods, AGA, Heartland, Marvel high-end home and kitchen appliances.">

<link href="css/mode-style1.css" rel="stylesheet" type="text/css" />
<link href="css/main_navigation_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="themes/base/jquery.ui.all.css">
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
    <hgroup class="indexTitle1 mainCopyBrand">
      <h2><?php echo $nameX; ?></h2>
      <p>Marvel believes that confining refrigeration to the kitchen is like keeping a fine wine bottled forever. Your lifestyle simply demands more: more choices, more elegance, more quality. That’s why Marvel offers the industry's finest line of luxury undercounter refrigeration products, which free you to design refrigeration into any room.</p>
      <p><b>Beverage Centers - </b>Perfect for storing beverages and perishable fresh food.</p>
      <p><b>Beer Dispensers -</b> Hides kegs from sight while keeping them cold, and serve ice cold beer.</p>
      <p><b>Wine Cellars -</b> Elegant styling and a fabulous selection of colors and door choices for the ultimate in wine and beverage storage.</p>
    </hgroup>
    <div id="slideshow_Prod" class="pics"> 
    	<img src="images/marvel-470x500.jpg" alt="<?php echo $nameX; ?> Products" class="mainImg brandImg "/>
    	<img src="images/61WCM704_3BARM753-DET-470x500.jpg" alt="<?php echo $nameX; ?> Products" class="mainImg brandImg "/>
    	<img src="images/6OHK-SSX_30ARM750-keg-470x500.jpg" alt="<?php echo $nameX; ?> Products" class="mainImg brandImg "/>
   	</div>
   	<a href="http://www.agamarvel.com" target="_blank" title="Visit <?php echo $nameX; ?>"><img src="images/brand_logos/marvel_logo_117x43.png" alt="<?php echo $nameX; ?> Products" class="product_brand_logo"></a>
  </article>
  <article id="mainContent">
    <div id="tabs">
      <div id="tab-left">
        <h3><?php echo $nameX; ?> Models</h3>
        <img src="images/61WCM704_3BARM753-DET-300x150.jpg" alt="Marvel Beverage Center" class="imageTabBox1 clearfix" /></a>
        <h4>Click a link below to learn more about our Marvel product offerings.</h4>
        <ul class="ui-tabs-nav">
          <?php 	 
			$dir = "./products/" . $name_dir . "";
			$count= 1;
				/* Opens folder "custserv-popups" directory, and proceed to read its contents and styles rollover button. */
				if (is_dir($dir)) {
					if ($dh = opendir($dir)) {
					while (($file = readdir($dh)) !== false) {
						if ($file != "." && $file != ".." && $file != ".htaccess") {
							$name = basename($file, '.php'); // Removes file extension  
							$name1 =  ucwords(str_replace('_', ' ',basename($name)));       
							echo "<li><a href=\"#tabs-".$count++."\" target=\"blank\">$name1</a></li>\n";
						}
					}
					closedir($dh);
					}
				}
        		?>
        </ul>
      </div>
<?php
		$count= 1;
            /* Opens folder "custserv-popups" directory, and proceed to read its contents and styles rollover button. */
            if (is_dir($dir)) {
                if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if ($file != "." && $file != ".." && $file != ".htaccess") {
                        $name = basename($file, '.php'); // Removes file extension  
						$name1 = str_replace('_', ' ',basename($name) );  
						echo "<div id=\"tabs-".$count++."\">";     
						include './products/marvel/'.$file;
						echo "</div>";
                    }
					
                }
                closedir($dh);
                }
            }
        		?>
    </div>
  </article>
</div>
<footer>
  <?php include 'includes/sitewide-footer.php'; ?>
</footer>
<?php include 'includes/sitewide-copyright.php'; ?>
</body>
</html>
