<?php
include('config.php');
session_start();
 
if (isset($_POST['registro'])) {
 
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
	$yolo = password_hash($contraseña, PASSWORD_DEFAULT);
 
    $query = $connection->prepare("SELECT * FROM informaticos WHERE iEmail='".$email."'");
    $query->execute();
	
    $result = $query->fetch(PDO::FETCH_ASSOC);
	
    if (!$result) {
		$myObj = "f";
    } else {
        if (password_verify($contraseña, $result['iPass'])) {
            $_SESSION['iClave'] = $result['iClave'];
			$myObj = "t";
        } else {
			$myObj = "f";
        }
    }
	$myObj = "f";
	$myJSON = json_encode($myObj);
	echo $myJSON;
}
?>