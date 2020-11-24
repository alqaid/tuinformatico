<?php

define('USER', 'root');
define('PASSWORD', '');
define('HOST', 'localhost');
define('DATABASE', 'tuinformatico');

try {
    $conexPDO = new PDO("mysql:host=" . HOST . ";dbname=" . DATABASE . ";charset=utf8", USER, PASSWORD);
	$conexPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);			      
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}
?>