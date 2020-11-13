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
	
	echo $result['iPass'];
	
	echo $yolo;
	
    if (!$result) {
        echo '<p class="error">Email no esta bien</p>';
    } else {
        if (password_verify($contraseña, $result['iPass'])) {
            $_SESSION['user_id'] = $result['iClave'];
            echo '<p class="success">Congratulations, you are logged in!</p>';
        } else {
            echo '<p class="error">Contraseña esta mal</p>';
        }
    }
}
?>