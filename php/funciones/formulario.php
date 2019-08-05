<?php
if ($_POST){
    $email= $_POST['email'];
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];

}
else{
header('location:http://127.0.0.1/ProyectoIntegrador/index.php');
}
 ?>
