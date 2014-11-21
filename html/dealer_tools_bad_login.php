<?php 
// Start PHP Session
//session_destroy();

//session_id('hey123');
//$_SESSION['favcolor'] = 'green';
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
<?php include 'includes/sitewide-styleSheets1.php'; ?>
<?php include 'includes/sitewide-scripts.php'; ?>
<?php include_once("includes/analyticstracking.php") ?>
</head>
<body>
<div id="wrapper">
  <?php include 'includes/sitewide-header.php'; ?>
  <div id="quickLinks">&nbsp;</div>
  <article id="mainImage">
    <hgroup id="dlr_tools_panel" class="indexTitle_dlr">
      <h1>Dealer Tools</h1>
      <p>This section of the website has been developed to help support you in selling our products. All of the files on this page are downloadable.</p>
    </hgroup>
        <img src="images/Shot02a-Aga_OA-Ivory-copy.jpg" alt="" width="940" height="250"/>
	</article>
  <article id="mainContent">
    <section class="aboutbox1">
      <h3>Dealer Tools Login Error!</h3>
      <h4>You have reached this page without submitting the correct login and password to access the Mode Distributing Dealer Tools! Click the login button below to try again.</h4>
      <p>
               <a href="dealer_tools_login.php" class="button" style="margin:10px 0px 0px 0px;">Login</a>
      </p>
    </section>
    <section class="aboutbox2">
      <?php include 'modules/contact_info_mode.php'; ?>
    </section>
    <br class="clearfloat">
  </article>
  <br class="clearfloat">
</div>
<footer>
  <?php include 'includes/sitewide-footer.php'; ?>
</footer>
</body>
</html>
