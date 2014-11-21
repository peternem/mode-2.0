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
<link rel="stylesheet" href="themes/base/jquery.ui.all.css">

<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script src="js/jquery-1.8.0.js"></script>
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

<?php include_once("includes/analyticstracking.php") ?>
</head>
<body>
<div id="wrapper">  
  	<?php include 'includes/sitewide-header.php'; ?>
  	<div id="quickLinks"><?php include 'includes/sitewide-quickLinkNav.php'; ?></div>
  	<article id="mainContentImage" class="contactPad">
    <hgroup class="indexTitle1 specCopy">
      <h2><?php echo $nameX; ?></h2>
      <p>Our spec documentation are grouped together by brand and model. To download or print an installation instruction document. First, select a document to open. Second, save the PDF document to a location on your computer. </p>
    </hgroup>
    <img src="images/Kitchen8_Closed-copy.jpg" alt="Mode Products" class="mainImg specImg"/>
  </article>
  <article id="mainContent">
    <div id="tabs">
		<div id="tab-left">
			<h3>Mode Docs</h3>
			<img src="images/AGA-PRO+_Range-Oven_Pizza-Detail-300x150.jpg" alt="" class="imageTabBox1 clearfix" /></a>
			<h4>Select a Brand. Then select a document to view or download.</h4>
			<ul class="ui-tabs-nav">
	          <?php 
	        $dir = "./specData/";	 
			if ($handle = opendir('./specData/')) {
			            /* loop through directory. */
			            while (false !== ($dir = readdir($handle))) {
			                if($dir != ".." && $dir != "."){
			                    //echo '<option value='.$dir.'>'.$dir.'</option>';
			                    $name1 =  ucwords(str_replace('_', ' ',basename($dir))); 
			                    echo "<li><a href=\"specData/$dir/index.php\" target=\"blank\">$name1</a></li>\n";
			                }
			            }
			            closedir($handle);
			}  
	        ?>
	        </ul>
      	</div>
  			<div id="ui-tabs-1"></div>
  				<!-- <div id="ui-tabs-2"></div>
  					<div id="ui-tabs-3"></div> -->
  </article>
</div>
<footer>
  <?php include 'includes/sitewide-footer.php'; ?>
</footer>
<?php include 'includes/sitewide-copyright.php'; ?>
</body>
</html>
