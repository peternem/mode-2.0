<?php
include 'includes/sitewide-globals.php';
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Mode Distributing - Dealer Tools</title>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<?php
include 'includes/sitewide-styleSheets1.php';
 ?>
<?php include_once("includes/analyticstracking.php") ?>
</head>
<body>
<div id="wrapper">
  <?php
include 'includes/sitewide-header.php';
 ?>
  <?php 
  if ((!$_SERVER['PHP_AUTH_USER']== $username) && (!$_SERVER['PHP_AUTH_PW']== $password)) { ?>
  	<div id="quickLinks"><?php
	include 'includes/dealerTools-quickLinkNav.php';
 ?></div>
  <?php } else { ?>
  <div id="quickLinks">&nbsp;</div>
  <?php } ?>
  <article id="mainImage">
    <hgroup id="dlr_tools_panel" class="indexTitle_dlr">
      <h1>Webmaster Tools</h1>
      <p>This section of the website has been developed to help support you in selling our products. All of the files on this page are downloadable.</p>
    </hgroup>
    <img src="images/Shot02a-Aga_OA-Ivory-copy.jpg" alt="" width="940" height="250"/> </article>
  <article id="mainContent">
    <?php
if (($_SERVER['PHP_AUTH_USER']== $username) && ($_SERVER['PHP_AUTH_PW']== $password)){ ?>
    <section class="aboutbox1">
      <h3>Webmaster Tools Login Error!</h3>
      <h4>You have reached this page without submitting the correct login and password to access Mode Dealer Tools! Click the login button below to try again.</h4>
      <p> <a href="web_master_tools_login.php" class="button" style="margin:10px 0px 0px 0px;">Login</a> </p>
    </section>
    <section class="aboutbox2">
      <?php
	include 'modules/contact_info_mode.php';
 ?>
    </section>
    <?php } else { ?>
    <section class="aboutbox1">
      <h3>Specifications Page - PDF Uploader and Jpeg Thumbnail Creater </h3>
      <h4>Select a PDF Doc and Upload.  A Jpeg thumbnail image will be auto created. The image and pdf will be located on the Promotions or Specification pages.</h4>
      		<form method="post" action="" enctype="multipart/form-data">
		   <p>Step 1: Select a Category to upload to.</p>
		    <p><select name="categoryDirList">
			  <option value="0">Select</option>
			  <option value="specData">Specifications</option>
			</select> </p>
		   
		   <p>Step 2: Select a Document type</p>
		   <p><select name="docTypeList">
			  <option value="0">Select</option>
			  <option value="brochures">Brochures</option>
			  <option value="literature">Literature</option>
			  <option value="install_documents">Install Documents</option>
			  <option value="spec_sheets">Spec Sheets</option>
			</select> </p>
			<p>Step 3: Select a Brand Directory to upload to.</p>
		   <p><select name="brandDirList">
			  <option value="0">Select</option>
			  <option value="aga">AGA</option>
			  <option value="american_range">American Range</option>
			  <option value="heartland">Heartland</option>
			  <option value="marvel">Marvel</option>
			  <option value="vent-a-hood">Vent-a-Hood</option>
			</select> </p>
			<p>Step 4: Select a PDF document to upload.</p>
		   <p><input type="file" name="pdf"/></p>
		   <p>Step 5: Submit.</p>
		  
		    <p> <input type="hidden" name="process" value="1" />
		    	<input type="submit" name="submit" value="Upload" /></p>
		</form>
        <?php

		if ($_POST['process'] == 1) {

			$categoryDirList = $_POST["categoryDirList"];
			$docTypeList = $_POST["docTypeList"];
			$brandDirList = $_POST["brandDirList"];

			$pdfDirectory = $categoryDirList."/".$docTypeList."/".$brandDirList."/";
			//$pdfDirectory = $categoryDirList."/".$docTypeList."/".$brandDirList."/".$uploadDir;
			$thumbDirectory = $categoryDirList . "/".$docTypeList."/" . $brandDirList . "/pdfimage/";

			// $pdfDirectory = "pdf/";
			// $thumbDirectory = "pdfimage/";

			if ($_POST['categoryDirList'] == '0' && $_POST['docTypeList'] == '0' && $_POST['brandDirList'] == '0') {
				echo "<p class='error'>Please complete Step 1, 2, 3 and 4.</p>";
			
			} else if ($_POST['categoryDirList'] == '0') {
				echo "<p class='error'>Please complete Step 1, 2, 3 and 4.</p>";
			
			
			} else if ($_POST['docTypeList'] == '0') {
				echo "<p class='error'>Please complete Step 1, 2, 3 and 4.</p>";
			
			
			} else if ($_POST['brandDirList'] == '0') {
				echo "<p class='error'>Please complete Step 1, 2, 3 and 4.</p>";
			
			} else {
				//echo "<p class='error'>PDF Doc Location: ".$pdfDirectory."</p>";
				//echo "<p class='error'>PDF Thumb Img Location: ".$thumbDirectory."</p>";
				// //get the name of the file
				$filename = basename($_FILES['pdf']['name'], ".pdf");

				//remove all characters from the file name other than letters, numbers, hyphens and underscores
				$filename = preg_replace("/[^A-Za-z0-9_-]/", "", $filename) . ".pdf";

				//name the thumbnail image the same as the pdf file
				$thumb = basename($filename, ".pdf");

				if (move_uploaded_file($_FILES['pdf']['tmp_name'], $pdfDirectory . $filename)) {

					//the path to the PDF file
					$pdfWithPath = $pdfDirectory . $filename;

					//add the desired extension to the thumbnail
					$thumb = $thumb . ".jpg";

					//execute imageMagick's 'convert', setting the color space to RGB and size to 200px wide
					exec("convert \"{$pdfWithPath}[0]\" -colorspace RGB -geometry 200 $thumbDirectory$thumb");

					//show the image

					echo "<p><a href=\"$pdfWithPath\"><img src=\"" . $thumbDirectory . "/$thumb\" class=\"pdfImgUpload\"/></a></p>";
					echo "<p>Category Directory: " . $categoryDirList . "</p>";
					echo "<p>Parent Directory Upload Directory: " . $pdfDirectory . "</p>";
					echo "<p>PDF Upload Directory: " . $pdfDirectory . "</p>";
					echo "<p>File Name: " . $filename . "</p>";
					echo "<p>PDF uploaded successfully!</p>";
				}
			}
		}
	?>
	<h3 style="margin:50px 0px 0px 0px;">Webmaster Navigation Menu</h3>
	<ul style="margin:15px 0px 20px 20px;">
          <li><a href="web_master_tools.php">Webmaster Tools Homepage</a></li>
          <li><a href="web_master_tools_promo_data.php">Upload Promo PDF Documents</a></li>
        </ul>
    </section>
    <section class="aboutbox2 clearfix">
      <?php
	include 'modules/contact_info_mode.php';
 ?>
    </section>
    <?php } ?>
  </article>
</div>
<footer>
  <?php
include 'includes/sitewide-footer.php';
 ?>
</footer>
</body>
</html>
