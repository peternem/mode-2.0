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
<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="js/jquery-horizontalMenu1.js" type="text/javascript"></script>
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
<!--<link rel="stylesheet" href="demos.css">-->
<!-- Slideshow UI -->
<script type="text/javascript" src="js/chili-1.7.pack.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/sitewide-scripts-slideshow.js"></script>
<style type="text/css"></style>
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
<?php $nameX = mb_convert_case(str_replace('_', ' ',basename($file)), MB_CASE_UPPER, "UTF-8"); ?>
</head>
<body>
<div id="wrapper">
  <header><a href="index.php"><img src="images/modedist-logo.jpg" class="modeLogo" alt="Mode Distribution"/></a> </header>
  <nav class="mainNav">
    <?php include 'includes/sitewide-mainNavMenu.php'; ?>
  </nav>
  <article id="mainContentImage">
    <hgroup class="indexTitle1 mainCopyBrand">
      <h1><?php echo $nameX; ?></h1>&raquo;
      <a class="ui-state-default ui-corner-all" id="dialog_link" href="#"><span class="ui-icon ui-icon-newwin"></span>Open Dialog</a>
      <p>For over 70 years, Vent-A-Hood® has maintained its specialization and focused on becoming the definitive home ventilation brand in the appliance industry. Vent-A-Hood's unique "Magic Lung" vent motor is the quietest, most effective one on the market today!</p>
      <p><b>Quiet - </b>Turn on a Vent-A-Hood® range hood, and you'll hear only a whisper of air movement, because the Magic Lung® blower system provides the quietest ventilation available.</p>
      <p><b>Easy Cleaning -</b> The Magic Lung® blower housing snaps apart for easly cleaning in the dishwasher or with warm soapy water.</p>
      <p><b>Fire Safety -</b> Vent-A-Hood® has never received a report of an attic or wall fire when the Magic Lung® blower has been in use.</p>
      <p><b>Powerful -</b> Magic Lung® blowers can be configured to provide the power you need for even the most demanding cooking surface. </p>
      <p><b>Efficient -</b> The powerful Magic Lung® blower traps cooking contaminants, liquefies grease vapor and removes heat-polluted air. </p>
    </hgroup>
    <div id="slideshow_Prod" class="pics"> <img src="images/Classic_36_Refrigerator_Black_470x500.jpg" alt="<?php echo $nameX; ?> Products" class="mainImg brandImg "/> <img src="images/Artisan-Kitchen-470x500.jpg" alt="<?php echo $nameX; ?> Products" class="mainImg brandImg "/> </div>
  </article>
  <article id="mainContent">
    <div id="tabs">
      <div id="tab-left">
         <h3><?php echo $nameX; ?> Models</h3>
        <img src="images/AGA-PRO+_Range-Oven_Pizza-Detail-300x150.jpg" alt="" class="imageTabBox1 clearfix" /></a>
        <h4>Click a link below to learn more about our Vent-A-Hood product  model offerings.</h4>
        <ul class="ui-tabs-nav">
          <?php 	 
			$dir = "./products/vent-a-hood";
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
        $dir = "./products/vent-a-hood";
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
