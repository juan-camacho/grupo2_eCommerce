<?php
$email= $_POST['Email'];
$nombre = $_POST['nombre'];
$password = $_POST['password'];
$error = null;
if (strlen($nombre) <> 0)
{
    if (strlen($password) <> 0)
    {
        if (is_string($nombre) && is_string($password))
        {
            if ($nombre == 'juan' &&  $password == '123')
            {
                echo "Bienvenido" .  " " . $nombre;
            }
            else
            {
                $error = "Verifica tu usuario y contraseña";
                echo $error;
            }
        }
        else
        {
            $error = "revisar los valores deben ser solo letras";
            echo $error;
        }
    }
    else
    {
        $error = "introduzca alguna contraseña";
        echo $error;
    }
}
else {
    $error = "introduzca algun Usuario";
    echo $error;
}
?>
