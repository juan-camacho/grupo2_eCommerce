<?php
$errornombre = '';
$errorapellido = '';
$erroremail = '';
$errorcontraseña = '';
$errorcontraseña2 = '';
$verificacion = '';
$verificacion2 = '';
$contraseña = '';
$contraseña2 = '';
$usuario = false;
if ($_POST) {
  if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
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
      $verificacion = $email;
      $email = filter_var($email, FILTER_SANITIZE_EMAIL);
      if (!filter_var($email, FILTER_SANITIZE_EMAIL)) {
        $erroremail .= 'Por favor ingresa un correo valido <br />';
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
        $usuario = False;
      }
    }
    if (!empty($password2)) {
      if ($password == $password2) {
        $contraseña2 = $password2;
      }
      else {
        $errorcontraseña2 .= "Verificar la contraseña deben ser iguales";
        $usuario = False;
      }
    }
  }
  if (isset($_POST['submit2'])) {
    $emailingreso = $_POST['emailingreso'];
    $passwordingreso = $_POST['passwordingreso'];
    $erroremailingreso = '';
    $errorpasswordingreso = '';
    if (!empty($emailingreso)) {
      if ($verificacion == $emailingreso) {
        $verificacion2 = $verificacion;
      }
      else {
        $erroremailingreso .= 'Por favor ingresa un correo valido <br />';
      }
    }
    if (!empty($passwordingreso)) {
      if ($contraseña2 == $passwordingreso) {
        $usuario = true;
      }
      else {
        $errorpasswordingreso .= "introduzca alguna contraseña valida";
      }
    }
  }
}
?>
