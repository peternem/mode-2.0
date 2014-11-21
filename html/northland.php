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
<link rel="stylesheet" href="themes/base/jquery.ui.all.css"/>
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="js/jquery-horizontalMenu.js" type="text/javascript"></script>
<script src="js/jquery-1.8.0.js"></script>
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
<!-- Slideshow UI -->
<script type="text/javascript" src="js/chili-1.7.pack.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/sitewide-scripts-slideshow.js"></script>
<script>
	$(function() {
		$("#tabs").tabs().removeClass('ui-widget-content').addClass('ui-tabs-vertical ui-helper-clearfix');
		$("#tabs li").removeClass('ui-corner-top').addClass('ui-corner-left');
		$('.ui-tabs-nav').removeClass('ui-corner-all ui-widget-header');
		$('.ui-tabs-nav li').removeClass('ui-state-default');
		$('.ui-tabs-nav li').removeClass('ui-corner-left');
		
		$('.specList a').button({
            icons: {
                primary: "ui-icon-newwin"
            }
        });
		
		$('.modal-dialog').hide();
		$('a.modal-link').click(function() {
			var uid = $(this).attr('id');
			$('#modal-dialog-' + uid).dialog({
				open: function(event, ui) { 
					$(this).dialog( "option", "title", $(this).attr('title') );
				},
				autoOpen: false,  
				modal: true,  
				//title: uid,  
				width: 450,  
				height: 350,
				draggable: false,
				esizable: false,
				zIndex: 3999
				}).dialog('open');
				return false; 
		}); 
	});
	</script>
<?php include_once("includes/analyticstracking.php") ?>
</head>
<body>
<div id="wrapper">
	<header>
	  	<a href="index.php"><img src="images/modedist-logo.jpg" class="modeLogo" alt="Mode Distribution"/></a>
	  	<nav class="mainNav">
	    	<?php include 'includes/sitewide-mainNavMenu.php'; ?>
	    </nav>
  	</header>
  	<article id="mainContentImage">
    <hgroup class="indexTitle1 mainCopyBrand">
      <h1><?php echo $nameX; ?></h1>
      <p> AGA is known the world over for the manufactuer of high performance, style and quality stovesovens and ranges. And their claim to fame is the AGA Cooker.</p>
      <p> The AGA cooker is a heat storage stove and cooker, which works on the principle that a heavy frame made from 
        cast iron components can absorb heat from a relatively low-intensity but continuously-burning source, and 
        the accumulated heat can then be used when needed for cooking. Originally heated by slow-burning coal, the 
        AGA cooker was invented in 1922 by a Nobel Prize-winning Swedish physicist.</p>
      <p>They also offer a line of <a href="marvel.php" title="Marvel">Marvel</a> undercounter refrigeration products.</p>
    </hgroup>
    <div id="slideshow_Prod" class="pics">
    	<img src="images/northland-1-470x500.jpg" alt="<?php echo $nameX; ?> Products" class="mainImg brandImg "/>
    	<img src="images/northland-2-470x500.jpg" alt="<?php echo $nameX; ?> Products" class="mainImg brandImg "/>
    </div>
  <a href="http://www.northlandnka.com/" target="_blank" title="Visit <?php echo $nameX; ?>"><img src="images/brand_logos/northland_logo_55x45.png" alt="<?php echo $nameX; ?>" class="product_brand_logo"></a>
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
			$count = 1;
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
		$count = 1;
            /* Opens folder "custserv-popups" directory, and proceed to read its contents and styles rollover button. */
            if (is_dir($dir)) {
                if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if ($file != "." && $file != ".." && $file != ".htaccess") {
                        $name = basename($file, '.php'); // Removes file extension  
						$name1 = str_replace('_', ' ',basename($name) );  
						echo "<div id=\"tabs-".$count++."\">";     
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
