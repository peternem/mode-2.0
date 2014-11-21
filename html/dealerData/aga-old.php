<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>
<?php include 'includes/sitewide-PageTitle.php'; ?>
</title>
<?php include 'includes/sitewide-metaTags.php'; ?>
<link href="css/mode-style1.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php include 'includes/sitewide-scripts.php'; ?>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/ui.tabs.js"></script>
<script type="text/javascript" src="js/chili-1.7.pack.js"></script>
<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/sitewide-scripts-tabs.js"></script>
<script type="text/javascript" src="js/sitewide-scripts-slideshow.js"></script>
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
      <h1><?php echo $nameX; ?></h1>
      <p> AGA is known the world over for the manufactuer of high performance, style and quality stovesovens and ranges. And their claim to fame is the AGA Cooker.</p>
      <p>
        The AGA cooker is a heat storage stove and cooker, which works on the principle that a heavy frame made from 
        cast iron components can absorb heat from a relatively low-intensity but continuously-burning source, and 
        the accumulated heat can then be used when needed for cooking. Originally heated by slow-burning coal, the 
        AGA cooker was invented in 1922 by a Nobel Prize-winning Swedish physicist.</p>
      <p>They also offer a line of <a href="marvel.php" title="Marvel">Marvel</a> undercounter refrigeration products.</p>
    </hgroup>
    <div id="slideshow_Prod" class="pics"> 
    	<img src="images/aga-470x500.jpg" alt="<?php echo $nameX; ?> Products" class="mainImg brandImg "/>
    	<img src="images/Aga_OA1-Black-470x500.jpg" alt="<?php echo $nameX; ?> Products" class="mainImg brandImg "/>
    </div>
    </article>
  <article id="mainContent">
    <div class="ui-tabs">
      <section class="tabbox1">
        <h3><?php echo $nameX; ?> Models</h3>
        <img src="images/AGA-PRO+_Range-Oven_Pizza-Detail-300x150.jpg" alt="" class="imageTabBox1 clearfix" /></a>
        <h4>Click a link below to learn more about our Vent-A-Hood product  model offerings.</h4>
        <ul class="ui-tabs-nav">
          <?php 	 
			$dir = "./products/aga";
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
      </section>
      <?php 	 
        $dir = "./products/aga";
		$count= 1;
            /* Opens folder "custserv-popups" directory, and proceed to read its contents and styles rollover button. */
            if (is_dir($dir)) {
                if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if ($file != "." && $file != ".." && $file != ".htaccess") {
                        $name = basename($file, '.php'); // Removes file extension  
						$name1 = str_replace('_', ' ',basename($name) );  
						echo "<section id=\"tabs-".$count++."\" class=\"ui-tabs-panel\">";     
                        //echo "<h3 class=\"h3TabContent\">$name1</h3>\n";
						include './'.$dir.'/'.$file;
						echo "</section>";
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
