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

    } else {
        if (password_verify($contraseña, $result['iPass'])) {
            $_SESSION['iClave'] = $result['iClave'];

        } else {

        }
    }
		$myObj->name = "John";
	$myObj->age = 30;
	$myObj->city = "New York";

	$myJSON = json_encode($myObj);

	echo $myJSON;
}
?>