<?php
include('config.php');
session_start();
 
if (isset($_POST['registro'])) {
 
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
	$yolo = password_hash($contraseña, PASSWORD_DEFAULT);
 
    $query = $connection->prepare("SELECT * FROM empresas WHERE eEmail='".$email."'");
    $query->execute();
	
    $result = $query->fetch(PDO::FETCH_ASSOC);
	
    if (!$result) {
		$myObj->text = "f";
    } else {
        if (password_verify($contraseña, $result['ePass'])) {
            $_SESSION['eClave'] = $result['eClave'];
			$myObj->text = "t";
        } else {
			$myObj->text = "f";
        }
    }
	
	$myJSON = json_encode($myObj);
	echo $myJSON;
}
?>