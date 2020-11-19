<?php

include('config.php');
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
    header('Location: ../Error.php');
    exit;
}

if (isset($_POST['registro'])) {

    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    $yolo = password_hash($contraseña, PASSWORD_DEFAULT);

    $query = $connection->prepare("SELECT * FROM empresas WHERE eEmail='" . $email . "'");
    $query->execute();

    $result = $query->fetch(PDO::FETCH_ASSOC);

    if (!$result) {
        echo "<script> window.location='../registrarEmpresa.php'; </script>";
    } else {
        if (password_verify($contraseña, $result['ePass'])) {
            $_SESSION['eClave'] = $result['eClave'];
            $_SESSION['eNombre'] = $result['eNombre'];
            setcookie('eClave', $_SESSION['eClave'], time() + 3600 * 24,'/');
            setcookie('eNombre', $_SESSION['eNombre'], time() + 3600 * 24,'/');
            echo "<script> window.location='../index.php'; </script>";
        } else {
            echo "<script> window.location='../registrarEmpresa.php'; </script>";
        }
    }
}
?>