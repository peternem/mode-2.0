<?php
include 'includes/sitewide-globals.php';

//Flag for Brand Page to add Blue line css class 'activePage' to Product link on Main Nav Menu. Also used for guicklings navigation
$brandpage = 'brandPage';
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>
<?php
include 'includes/sitewide-PageTitle.php';
 ?> Ranges, Refrigeration, Dishwashers, Cookers and Stoves </title>
<meta name="keywords" content='Marvel, AGA, Cooker, Refrigeration, Fridge, Oven Luxury Oven, Luxury Stove, Aga Range, Aga Legacy, Aga Ranges, Aga Stoves, Aga Gas, Aga Appliances, Aga Cooker' />
<meta name="description" content="Mode Distributing distributes the complete line of AGA Ranges, Refrigeration, Dishwashers, Cookers and Stoves across Southwest California, Arizona, Nevada and Hawaii. The AGA brand is known for its performance, style and quality." />
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
	<?php
	include 'includes/sitewide-header.php';
 ?>
  	<div id="quickLinks">
 <?php
include 'includes/sitewide-quickLinkNav.php';
 ?></div>
  <article id="mainContentImage">
    <hgroup class="indexTitle1 mainCopyBrand">
      <h2>AGA</h2>
      <p> AGA is known the world over for their manufacturing of high performance, style and quality stoves, ovens and ranges. Their claim to fame is the AGA Cooker.</p>
      <p> The AGA cooker is a heat storage stove and cooker, which works on the principle that a heavy frame made from 
        cast iron components can absorb heat from a relatively low-intensity but continuously-burning source, and 
        the accumulated heat can then be used when needed for cooking. Originally heated by slow-burning coal, the 
        AGA cooker was invented in 1922 by a Nobel Prize-winning Swedish physicist.</p>
      <p>They also offer a line of <a href="marvel.php" title="Marvel">Marvel</a> undercounter refrigeration products.</p>
    </hgroup>
    <div id="slideshow_Prod" class="pics">
    	<img src="images/aga/aga-470x500.jpg" alt="<?php echo $nameX; ?> Products" class="mainImg brandImg "/>
    	<img src="images/aga/Aga_OA1-Black-470x500.jpg" alt="<?php echo $nameX; ?> Products" class="mainImg brandImg "/>
    </div>
        <hgroup class="indexTitle1 mainCopyBrand">
      <h2>AGA</h2>
      <p> AGA is known the world over for their manufacturing of high performance, style and quality stoves, ovens and ranges. Their claim to fame is the AGA Cooker.</p>
      <p> The AGA cooker is a heat storage stove and cooker, which works on the principle that a heavy frame made from 
        cast iron components can absorb heat from a relatively low-intensity but continuously-burning source, and 
        the accumulated heat can then be used when needed for cooking. Originally heated by slow-burning coal, the 
        AGA cooker was invented in 1922 by a Nobel Prize-winning Swedish physicist.</p>
      <p>They also offer a line of <a href="marvel.php" title="Marvel">Marvel</a> undercounter refrigeration products.</p>
    </hgroup>
  <a href="http://www.aga-ranges.com/" target="_blank" title="Visit <?php echo $nameX; ?>"><img src="images/brand_logos/aga_logo_100x36.png" alt="<?php echo $nameX; ?>" class="product_brand_logo"></a>
  </article>
  <article id="videoContent">
  	<div class="vTab-left">
  	<h3>AGA Videos</h3>
        <img src="images/aga/4-oven-30-amp-big.jpg" alt="" class="imageTabBox1 clearfix" /></a>
        <h4>Watch a AGA video to learn more about their fabulous kitchen appliance offerings.</h4>
    </div>
    <div class="vTab-right">
    	<h3 class="h3TabContent">The AGA Story</h3>
		<iframe id="ytplayer" type="text/html" width="588" height="330.75" src="https://www.youtube.com/embed/5gZCfDTuerY" frameborder="0" allowfullscreen></iframe>
	</div>
		</article>
  <article id="mainContent">
    <div id="tabs">
      <div id="tab-left">
        <h3>AGA Models</h3>
        <img src="images/AGA-PRO+_Range-Oven_Pizza-Detail-300x150.jpg" alt="" class="imageTabBox1 clearfix" /></a>
        <h4>Click a link below to learn more about our Vent-A-Hood product  model offerings.</h4>
        <ul class="ui-tabs-nav">
          <?php
		$dir = "./products/" . $name_dir . "";
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
						//echo "<h3 class=\"h3TabContent\">$name1</h3>\n";
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
<div id="dialog" title="An Image!" style="display: none;">
  <img id="image" src=""/>
</div>
</body>
</html>
