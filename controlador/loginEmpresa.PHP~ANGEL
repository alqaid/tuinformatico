<?php

// --------------------------------------------------------------------------
// --------captcha------------------------------------------------------------------
// ---AUTENTICACION EN GOOGLE-----------------------------------------------------------------------

// referencia: https://webdesign.tutsplus.com/es/tutorials/how-to-integrate-no-captcha-recaptcha-in-your-website--cms-23024


 
require_once('../controlador/librerias/recaptchalib.php');

// your secret key DEL SERVIDOR
$secret = "6LexGuUZAAAAALlFYL-RJ3KunfvJR3vojpECe6yw";
 
// empty response
$response = null;
 
// check secret key
$reCaptcha = new ReCaptcha($secret);

// if submitted check response
if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}


  if ($response != null && $response->success) {
	 //"RESPUESTA DEL SERVIDOR DE GOOGLE OK " 
	 // continuamos ejecución
  
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
// --------------------------------------------------------------------------
?>
<?php

include('../modelo/config.php');
if (!isset($_SESSION)) {
    session_start();
}

if (!isset($_SESSION['eClave']) && isset($_COOKIE['eClave'])) {
    $_SESSION['eClave'] = $_COOKIE['eClave'];
    $_SESSION['eNombre'] = $_COOKIE['eNombre'];
} else if (!isset($_SESSION['iClave']) && isset($_COOKIE['iClave'])) {
    $_SESSION['iClave'] = $_COOKIE['iClave'];
    $_SESSION['iNombre'] = $_COOKIE['iNombre'];
}

if (isset($_SESSION['eClave']) || isset($_SESSION['iClave'])) {
    header('Location: ../vista/Error.php');
    exit;
}

if (isset($_POST['registro'])) {

    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $yolo = password_hash($contraseña, PASSWORD_DEFAULT);

    $query = $conexPDO->prepare("SELECT * FROM empresas WHERE eEmail='" . $email . "'");
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
        echo "<script> window.location='../vista/registrarEmpresa.php'; </script>";
    } else {
        if (password_verify($contraseña, $result['ePass'])) {
            $_SESSION['eClave'] = $result['eClave'];
            $_SESSION['eNombre'] = $result['eNombre'];
            setcookie('eClave', $_SESSION['eClave'], time() + 3600 * 24,'/');
            setcookie('eNombre', $_SESSION['eNombre'], time() + 3600 * 24,'/');
            echo "<script> window.location='../vista/index.php'; </script>";
        } else {
            echo "<script> window.location='../vista/registrarEmpresa.php'; </script>";
        }
    }
}
?>
<?php
}else{
	  echo "<script> window.location='../vista/registroInformatico.php'; </script>";
  }

?>