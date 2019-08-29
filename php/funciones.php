<?php
function get_connection(){
    $dbHost = 'localhost';
    $dbName = 'ecommerce';
    $dbUser = 'root';
    $dbPass = '';

    try {
        return new PDO("mysql:host={$dbHost};dbname={$dbName}", $dbUser, $dbPass);
    } catch (PDOException $e) {
        echo "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}
 ?>
