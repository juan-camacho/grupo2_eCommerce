<?php
$error = '';
$verificacion = '';
$contraseña = '';
if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $email= $_POST['email'];
    $password = $_POST['password'];
    if (!empty($nombre)) {
        $nombre = trim($nombre);
        $nombre = htmlspecialchars($nombre);
        $nombre = stripslashes($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    }
    else {
        $error .= 'por favor agrega un nombre <br />';
    }
    if (!empty($email)) {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_SANITIZE_EMAIL)) {
            $error .= 'Por favor ingresa un correo valido <br />';
        }
        else {
            $verificacion = $email;
        }
    }
    else {
        $error .= 'Por favor ingresa  un email';
    }
    if (!empty($password)) {
        if (strlen($password) > 3) {
            $contraseña = "contraseña cumple los requisitos";
        }
        else {
        $error .= "introduzca alguna contraseña valida";
        }
    }
}
?>
