<?php 
/*****  GLOBAL FUNCTIONS *****/
$username = "";
$password = "";

$host = $_SERVER['HTTP_HOST'];
$self = $_SERVER['PHP_SELF'];
$query = !empty($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : null;

/// Reads current webpages file name and turns it into a variable.
$url = !empty($query) ? "http://$host$self?$query" : "http://$host$self";

//// Basename function strips full web page address.  Only leaves file name
$filename = basename($url);
$file = substr($filename, 0 , -4); 

$nameX = mb_convert_case(str_replace('_', ' ',basename($file)), MB_CASE_TITLE, "UTF-8"); 
//$name_dir = mb_convert_case(str_replace(' ', '_',basename($file)), MB_CASE_LOWER, "UTF-8");
$name_dir = $file;

//echo "Mode Distributing - ".ucwords(str_replace('_', ' ',basename($file)))."";

?>
