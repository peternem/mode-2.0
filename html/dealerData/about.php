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
<?php $nameX = mb_convert_case(str_replace('_', ' ',basename($file)), MB_CASE_UPPER, "UTF-8"); ?>
</head>
<body>
<div id="wrapper">
  <header><a href="index.php"><img src="images/modedist-logo.jpg" class="modeLogo" alt="Mode Distribution"/></a> </header>
  <nav class="mainNav">
    <?php include 'includes/sitewide-mainNavMenu.php'; ?>
  </nav>
  <article id="mainContentImage" class="contactPad">
    <hgroup class="indexTitle1 mainCopyBrand">
      <h1><?php echo $nameX; ?></h1>
      <p>Thank you for contacting Mode Distributing. Whether you have a question about our prodcts, inventory, or services, our team at Mode Distributing are here to help. Please feel free to email us with any and all inquiries and we will get back to you as soon as we can. We look forward to hearing from you!</p>
      <!--<h2>Email</h2>
      <p><b>For general queries:</b> <a href="mailto:sales&#64;modedistributing.com">sales&#64;modedistributing.com</a></p>
      <p><b>For Sales queries: </b> <a href="mailto:sales&#64;modedistributing.com">sales&#64;modedistributing.com</a></p>
      <p><b>For Careers: </b> <a href="mailto:sales&#64;modedistributing.com">sales&#64;modedistributing.com</a></p>-->
      <h2>Phone</h2>
      <p><b>For general and sales queries:</b></p>
      <p><b>Buena Park, CA:</b> 714-523-1511</p>
      <p><b>Union City, CA:</b> 510-477-9049</p>
    </hgroup>
    <img src="images/ventahood-470x500.jpg" alt="Mode Products" class="mainImg brandImg "/>
  </article>
</div>
<footer>
  <?php include 'includes/sitewide-footer.php'; ?>
</footer>
<?php include 'includes/sitewide-copyright.php'; ?>
</body>
</html>
