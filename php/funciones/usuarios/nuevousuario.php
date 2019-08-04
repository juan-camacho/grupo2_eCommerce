<?php
include("pdo.php");
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$consulta = $babuino->prepare("INSERT into usuarios values (default, '$nombre', '$apellido', '$email', null, null)");
$consulta->execute();
 ?>
