<?php 
// Start PHP Session
session_start();

//session_id('hey123');
//$_SESSION['favcolor'] = 'green';


//phpinfo()
?>
<?php include 'includes/sitewide-globals.php'; ?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>
Mode Distributing - Dealer Tools - Pricing
</title>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php include 'includes/sitewide-styleSheets1.php'; ?>
<?php include 'includes/sitewide-scripts.php'; ?>
<?php include_once("includes/analyticstracking.php") ?>
</head>
<body>
<div id="wrapper">
	 <?php include 'includes/sitewide-header.php'; ?>
    <?php 
  if ((!$_SERVER['PHP_AUTH_USER']== $username) && (!$_SERVER['PHP_AUTH_PW']== $password)) { ?>
  	<div id="quickLinks"><?php include 'includes/dealerTools-quickLinkNav.php'; ?></div>
  <?php } else { ?>
  <div id="quickLinks">&nbsp;</div>
  <?php } ?>
	<article id="mainImage">
		<hgroup id="dlr_tools_panel" class="indexTitle_dlr">
			<h1>Dealer Tools - Pricing</h1>
			<p>This section of the website has been developed to help support you in selling our products. All of the files on this page are downloadable.</p>
		</hgroup>
        <img src="images/Shot02a-Aga_OA-Ivory-copy.jpg" alt="" width="940" height="250"/>
	</article>
	<article id="mainContent">
	<?php
if (($_SERVER['PHP_AUTH_USER']== $username) && ($_SERVER['PHP_AUTH_PW']== $password)){ ?>
	<section class="aboutbox1">
      <h3>Dealer Tools Login Error!</h3>
      <h4>You have reached this page without submitting the correct login and password to access the Mode Dealer Tools! Click the login button below to try again.</h4>
      <p>
               <a href="dealer_tools_login.php" target="_self" class="button" style="margin:10px 0px 0px 0px;">Login</a>
      </p>
    </section>
	<section class="aboutbox2">
		<?php include 'modules/contact_info_mode.php'; ?>
	</section>
	<?php } else {?>
	<section class="dynamicHtbox1">
		<h3>Marvel</h3>
		<!--<h4>The Electronic Versions</h4>-->
		<ul class="installDocs">
			<?php 	 
        $dir = "./dealerData/marvel";
            /* Opens folder "custserv-popups" directory, and proceed to read its contents and styles rollover button. */
            if (is_dir($dir)) {
                if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if ($file != "." && $file != ".." && $file != ".htaccess") {
                        $name = basename($file, '.php'); // Removes file extension  
						$name1 = str_replace('_', ' ',basename($name) );     
                        echo "<li><a href=\"$dir/$name\" target=\"blank\"><img style=\"margin-right:5px;\" alt=\"pdf\" src=\"images/icons/file.png\"/><span class=\"instalDocsTxt\">$name1</span></a></li>\n";
                        //echo"<option value=\"$dir/$file\">$name</option>\n";
                    }
                }
                closedir($dh);
                }
            }
        ?>
		</ul>
	</section>
	<section class="dynamicHtbox2">
		<h3>AGA</h3>
<!--		<h4>Dealer Specific documents</h4>
		<p>The documents below are technical documents specific to dealer needs. Click a link to download or view.</p>
-->		<ul class="installDocs">
			<?php 	 
        $dir = "./dealerData/aga";
            /* Opens folder "custserv-popups" directory, and proceed to read its contents and styles rollover button. */
            if (is_dir($dir)) {
                if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if ($file != "." && $file != ".." && $file != ".htaccess") {
                        $name = basename($file, '.php'); // Removes file extension  
						$name1 = str_replace('_', ' ',basename($name) );       
						echo "<li><a href=\"$dir/$name\" target=\"blank\"><img style=\"margin-right:5px;\" alt=\"pdf\" src=\"images/icons/file.png\"/><span class=\"instalDocsTxt\">$name1</span></a></li>\n";
                        //echo"<option value=\"$dir/$file\">$name</option>\n";
                    }
                }
                closedir($dh);
                }
            }
        		?>
		</ul>
	</section>
	<section class="dynamicHtbox3 clearfix">
		<h3>Heartland</h3>
		<!--<h4>Mode Order Forms</h4>-->
		<ul class="installDocs">
			<?php 	 
			$dir = "./dealerData/heartland";
				/* Opens folder "custserv-popups" directory, and proceed to read its contents and styles rollover button. */
				if (is_dir($dir)) {
					if ($dh = opendir($dir)) {
					while (($file = readdir($dh)) !== false) {
						if ($file != "." && $file != ".." && $file != ".htaccess") {
							$name = basename($file, '.php'); // Removes file extension  
							$name1 = str_replace('_', ' ',basename($name) );        
							echo "<li><a href=\"$dir/$name\" target=\"blank\"><img style=\"margin-right:5px;\" alt=\"pdf\" src=\"images/icons/file.png\"/><span class=\"instalDocsTxt\">$name1</span></a></li>\n";
							//echo"<option value=\"$dir/$file\">$name</option>\n";
						}
					}
					closedir($dh);
					}
				}
			?>
		</ul>
	</section>


	<section class="dynamicHtbox1 clearfix">
		<h3>Vent-a-hood</h3>
<!--		<h4>Dealer Specific documents</h4>
		<p>The documents below are technical documents specific to dealer needs. Click a link to download or view.</p>
-->		<ul class="installDocs">
			<?php 	 
        $dir = "./dealerData/vent-a-hood";
            /* Opens folder "custserv-popups" directory, and proceed to read its contents and styles rollover button. */
            if (is_dir($dir)) {
                if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if ($file != "." && $file != ".." && $file != ".htaccess") {
                        $name = basename($file, '.php'); // Removes file extension  
						$name1 = str_replace('_', ' ',basename($name) );       
                        echo "<li><a href=\"$dir/$name\" target=\"blank\"><img style=\"margin-right:5px;\" alt=\"pdf\" src=\"images/icons/file.png\"/><span class=\"instalDocsTxt\">$name1</span></a></li>\n";
                        //echo"<option value=\"$dir/$file\">$name</option>\n";
                    }
                }
                closedir($dh);
                }
            }
        		?>
		</ul>
	</section>
	<section class="dynamicHtbox2 clearfix">
		<h3>American Range</h3>
<!--		<h4>Dealer Specific documents</h4>
		<p>The documents below are technical documents specific to dealer needs. Click a link to download or view.</p>
-->		<ul class="installDocs">
			<?php 	 
        $dir = "./dealerData/american_range";
            /* Opens folder "custserv-popups" directory, and proceed to read its contents and styles rollover button. */
            if (is_dir($dir)) {
                if ($dh = opendir($dir)) {
                while (($file = readdir($dh)) !== false) {
                    if ($file != "." && $file != ".." && $file != ".htaccess") {
                        $name = basename($file, '.php'); // Removes file extension  
						$name1 = str_replace('_', ' ',basename($name) );       
                        echo "<li><a href=\"$dir/$name\" target=\"blank\"><img style=\"margin-right:5px;\" alt=\"pdf\" src=\"images/icons/file.png\"/><span class=\"instalDocsTxt\">$name1</span></a></li>\n";
                        //echo"<option value=\"$dir/$file\">$name</option>\n";
                    }
                }
                closedir($dh);
                }
            }
        		?>
		</ul>
	</section>

		<?php }	?>
	</article>
</div>
<footer>
  <?php include 'includes/sitewide-footer.php'; ?>
</footer>
</body>
</html>
