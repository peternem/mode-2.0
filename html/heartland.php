<?php include 'includes/sitewide-globals.php';

//Flag for Brand Page to add Blue line css class 'activePage' to Product link on Main Nav Menu.
 $brandpage = 'brandPage';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php include 'includes/sitewide-PageTitle.php'; ?> Stoves, Refrigeration, Fridge, Oven, Appliances</title>
<meta name="keywords" content='Heartland, Stoves, Refrigeration, Fridge, Oven, Appliances' />
<meta name="description" content="Mode Distributing distributes the complete line of Heartland Classic appliances across Southwest California, Arizona, Nevada and Hawaii. The AGA brand is known for its performance, style and quality." />

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
<!--<link rel="stylesheet" href="demos.css">-->
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
      <p>Heartland Appliances is part of AGA Marvel's family of premium brands that includes Marvel undercounter refrigeration products, iconic AGA 
      	ranges and cookers, Northland full size built-in refrigeration, and La Cornue, the ultimate aspirational kitchen brand.</p>
      <p>The Heartland legacy dates back to the early 1900's, when the Findlay Bros. Co. Limited first produced the "Findlay Oval" in Carlton Place, 
      	Ontario. Heartland's classic styling is still based on this original, timeless design. Elmira Stove Works produced the Oval for a number of 
      	years until Heartland acquired the company in 1990. Aga Rangemaster purchased Heartland in 2005, and today the Heartland brand is manufactured 
      	in AGA Marvel's state-of-the-art manufacturing facility in Greenville, Michigan.</p>
      <p>Heartland Classic appliances combine nostalgic beauty and craftsmanship, attention to detail, and today's modern performance features to bring 
      	you a truly unique cooking experience. Our family of gas, electric, and dual fuel ranges, and woodburning cookstoves is inspired by the 
      	legendary Oval Woodburning cookstove first built in 1925. Lustrous nickel-plated trim, elegantly shaped handles and legs, and the vintage oven 
      	temperature gauge are just some of the design features that distinguish Heartland from all others.</p>
    </hgroup>
    <div id="slideshow_Prod" class="pics">
    	<img src="images/Classic_36_Refrigerator_Black_470x500.jpg" alt="<?php echo $nameX; ?> Products" class="mainImg brandImg "/>
    	<img src="images/Artisan-Kitchen-470x500.jpg" alt="<?php echo $nameX; ?> Products" class="mainImg brandImg "/>
    </div>
	<a href="http://www.ventahood.com/" title="Visit <?php echo $nameX; ?>"><img src="images/brand_logos/heartland_logo_158x22.png" alt=" <?php echo $nameX; ?>" class="product_brand_logo"></a>
  </article>
  <article id="mainContent">
    <div id="tabs">
      <div id="tab-left">
         <h3><?php echo $nameX; ?> Models</h3>
        <img src="images/AGA-PRO+_Range-Oven_Pizza-Detail-300x150.jpg" alt="" class="imageTabBox1 clearfix" /></a>
        <h4>Click a link below to learn more about our Vent-A-Hood product  model offerings.</h4>
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
                        //echo "<h3 class=\"h3TabContent\">$name1</h3>\n";
						include './'.$dir.'/'.$file;
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
