<?php include 'includes/sitewide-globals.php'; 

//Flag for Brand Page to add Blue line to Product link on Main Nav Menu.
 $brandpage = 'brandPage';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>
<?php include 'includes/sitewide-PageTitle.php'; ?>
</title>
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
      <p>For over 80 years, Vent-A-Hood® has maintained its specialization and focused on becoming the definitive home ventilation brand in the appliance industry. Vent-A-Hood's unique "Magic Lung" vent motor is the quietest, most effective one on the market today!</p>
      <p><b>Quiet - </b>Turn on a Vent-A-Hood® range hood, and you'll hear only a whisper of air movement, because the Magic Lung® blower system provides the quietest ventilation available.</p>
      <p><b>Easy Cleaning -</b> The Magic Lung® blower housing snaps apart for easly cleaning in the dishwasher or with warm soapy water.</p>
      <p><b>Fire Safety -</b> Vent-A-Hood® has never received a report of an attic or wall fire when the Magic Lung® blower has been in use.</p>
      <p><b>Powerful -</b> Magic Lung® blowers can be configured to provide the power you need for even the most demanding cooking surface. </p>
      <p><b>Efficient -</b> The powerful Magic Lung® blower traps cooking contaminants, liquefies grease vapor and removes heat-polluted air. </p>
    </hgroup>
    <div id="slideshow_Prod" class="pics">
    	<img src="images/vah/ventahood-470x500.jpg" alt="<?php echo $nameX; ?> Products" class="mainImg brandImg "/>
    	<img src="images/vah/ventahood-CILH9-470x500.jpg" alt="<?php echo $nameX; ?> Products" class="mainImg brandImg "/> 
    	<img src="images/vah/ventahood-CWEH9-466SS-470x500.jpg" alt="<?php echo $nameX; ?> Products" class="mainImg brandImg "/>
    	<img src="images/vah/ISFH42-470x500.jpg" alt="<?php echo $nameX; ?> Products" class="mainImg brandImg "/>
    	
    </div>
    <a href="http://www.ventahood.com/" target="_blank" title="Visit <?php echo $nameX; ?>"><img src="images/brand_logos/vah_logo_154x17.png" alt="<?php echo $nameX; ?>" class="product_brand_logo"/></a>
  </article>
  <article id="mainContent">
    <div id="tabs">
      <div id="tab-left">
        <h3><?php echo $nameX; ?> Models</h3>
        <img src="images/rollover/product-btn.png" alt="" class="imageTabBox1 clearfix" /></a>
        <h4>Click a link below to learn more about our Vent-A-Hood product  model offerings.</h4>
        <ul>
          <?php 	 
			$dir = "./products/". $name_dir ."";
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
						include './products/vent-a-hood/'.$file;
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
