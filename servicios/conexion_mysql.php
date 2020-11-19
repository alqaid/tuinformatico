<?php
define('USER', 'root');
define('PASSWORD', '');
define('HOST', 'localhost');
define('DATABASE', 'tuinformatico');
 
try {
	$mysqli = @new mysqli(HOST, USER, PASSWORD, DATABASE);
	$mysqli->set_charset("utf8");
	if ($mysqli->connect_errno) {
		die('Connect Error: ' . $mysqli->connect_errno);
	}else{
		 
	}
	
   
} catch (Exception $e) {
  die('Connect Error: ' . $e->errorMessage());
}
?>