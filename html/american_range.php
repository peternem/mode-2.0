<?php
include 'includes/sitewide-globals.php';

//Flag for Brand Page to add Blue line css class 'activePage' to Product link on Main Nav Menu.
$brandpage = 'brandPage';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php include 'includes/sitewide-PageTitle.php';?> - Appliances, Ranges, and Ovens for Homes and Restaurants</title>
<meta name="description" content="Mode Distributing your Headquarters for American Range residential and commercial ranges, ovens, and cooking equipment for your home or restaurant." />
<meta name="keywords" content="american stoves, american range, american ranges, commercial grade stoves, residential stoves, top quality residential stoves" />
<TITLE>American Range </TITLE>
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
	<div id="dialog" title="An Image!" style="display:none;">
		  <img id="image" src=""/>
		</div>
	<?php
	include 'includes/sitewide-header.php';
 ?>
  	<div id="quickLinks"><?php
		include 'includes/sitewide-quickLinkNav.php';
 ?></div>
  	<article id="mainContentImage">
    <hgroup class="indexTitle1 mainCopyBrand">
      <h2><?php echo $nameX; ?></h2>
     <p>Inspired by their passion for perfection, renowned for their product innovation and quality, American Range® is a recognized leader in the commercial food service industry. American Range had a commercial workhorse pedigree that has been proven in the world’s most demanding kitchens for over past 30 years. In that time, innovative technology and robust engineering have advanced every aspect of their cooking equipment.</p>
     <p>American has perfected the professional home range.  The residential professional line of gas ranges, French-door wall ovens, and cook-tops are commercial grade. Their professional cooking products have the soul and capability of our commercial ranges bended with luxurious style. To summarize, they have ‘civilized’ their commercial ranges.</p>
    </hgroup>
    <div id="slideshow_Prod" class="pics">
    	<img src="images/american-range/americanRange-1_470x500.jpg" alt="<?php echo $nameX; ?> Products" class="mainImg brandImg "/>
    	<img src="images/american-range/americanRange-2_470x500.jpg" alt="<?php echo $nameX; ?> Products" class="mainImg brandImg "/>
    </div>
  <a href="http://www.northlandnka.com/" target="_blank" title="Visit <?php echo $nameX; ?>"><img src="images/brand_logos/americanRange_logo_158x36png.png" alt="<?php echo $nameX; ?>" class="product_brand_logo"></a>
  </article>
  <article id="mainContent">
    <div id="tabs">
      <div id="tab-left">
        <h3><?php echo $nameX; ?> Models</h3>
        <img src="images/american-range/americanRange-1_350x150.jpg" alt="" class="imageTabBox1 clearfix" /></a>
        <h4>Click a link below to learn more about our Vent-A-Hood product  model offerings.</h4>
        <ul class="ui-tabs-nav">
          <?php $dir = "./products/" . $name_dir . "";
			$count = 1;
			/* Opens folder "custserv-popups" directory, and proceed to read its contents and styles rollover button. */
			if (is_dir($dir)) {
				if ($dh = opendir($dir)) {
					while (($file = readdir($dh)) !== false) {
						if ($file != "." && $file != ".." && $file != ".htaccess") {
							$name = basename($file, '.php');
							// Removes file extension
							$name1 = ucwords(str_replace('_', ' ', basename($name)));
							echo "<li><a href=\"#tabs-" . $count++ . "\" target=\"blank\">$name1</a></li>\n";
						}
					}
					closedir($dh);
				}
			}
        		?>
        </ul>
      </div>
      <?php $count = 1;
		/* Opens folder "custserv-popups" directory, and proceed to read its contents and styles rollover button. */
		if (is_dir($dir)) {
			if ($dh = opendir($dir)) {
				while (($file = readdir($dh)) !== false) {
					if ($file != "." && $file != ".." && $file != ".htaccess") {
						$name = basename($file, '.php');
						// Removes file extension
						$name1 = str_replace('_', ' ', basename($name));
						echo "<div id=\"tabs-" . $count++ . "\">";
						include './' . $dir . '/' . $file;
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
  <?php
	include 'includes/sitewide-footer.php';
 ?>
</footer>
<?php
	include 'includes/sitewide-copyright.php';
 ?>

</body>
</html>
