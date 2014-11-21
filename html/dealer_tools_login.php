<?php
// Start PHP Session
session_start();

session_id('hey123');
$_SESSION['favcolor'] = 'green';
$_SESSION['animal']   = 'cat';
$_SESSION['time']     = time();

// Your private infomation
$username = "modedistributing";
$password = "luxury!@";
$redirect_file_name = "dealer_tools.php";

//// Bad Login
if (!isset ($_SERVER['PHP_AUTH_USER'])){
	header("WWW-Authenticate: Basic realm=\"Mode Dealer Tools\"");
	header("HTTP/1.0 401 Unauthorized");
	include 'dealer_tools_bad_login.php'; 
	exit;
}
//// Good Login
else {
	// split the user/pass parts
	list($_SERVER['PHP_AUTH_USER'], $_SERVER['PHP_AUTH_PW']) = explode(':' , base64_decode(substr($_SERVER['HTTP_AUTHORIZATION'], 6)));

	if (($_SERVER['PHP_AUTH_USER']== $username) && ($_SERVER['PHP_AUTH_PW']== $password)){
		header("Location: $redirect_file_name");
		// set cookie the expiration date to one hour ago
		setcookie ("ronjermie", "", time() - 3600);
	}
	//// Bad Login if password entered incorrectly.
	else {
		header("WWW-Authenticate: Basic realm=\"Mode Dealer Tools\"");
		header("HTTP/1.0 401 Unauthorized");
		include 'dealer_tools_bad_login.php'; 
		header("Location: dealer_tools_bad_login.php");
		//exit;
		}
}


?>
