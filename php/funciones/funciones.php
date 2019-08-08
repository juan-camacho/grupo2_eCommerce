<?php
$errornombre = '';
$errorapellido = '';
$erroremail = '';
$errorcontraseña = '';
$errorcontraseña2 = '';
$verificacion = '';
$contraseña = '';
if ($_POST) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    if (isset($_POST['submit'])) {
        if (!empty($nombre)) {
            $nombre = trim($nombre);
            $nombre = htmlspecialchars($nombre);
            $nombre = stripslashes($nombre);
            $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
        }
        else {
            $errornombre .= 'por favor agrega un nombre <br />';
        }
        if (!empty($apellido)) {
            $apellido = trim($apellido);
            $apellido = htmlspecialchars($apellido);
            $apellido = stripslashes($apellido);
            $apellido = filter_var($apellido, FILTER_SANITIZE_STRING);
        }
        else {
            $errorapellido .= 'por favor agrega un apellido <br />';
        }
        if (!empty($email)) {
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
            if (!filter_var($email, FILTER_SANITIZE_EMAIL)) {
                $erroremail .= 'Por favor ingresa un correo valido <br />';
            }
            else {
                $verificacion = $email;
            }
        }
        else {
            $erroremail .= "Por favor ingresa  un email";
        }
        if (!empty($password)) {
            if (strlen($password) > 3) {
                $contraseña = "contraseña cumple los requisitos";
            }
            else {
                $errorcontraseña .= "introduzca alguna contraseña valida";
            }
        }
        if (!empty($password2)) {
            if ($password == $password2) {
                $contraseña2 = "coinciden las contraseñas";
            }
            else {
                $errorcontraseña2 .= "Verificar la contraseña deben ser iguales";
            }
        }
    }
}
?>
