<?php
function get_connection(){
 $pdo = new PDO('mysql:host=localhost;dbname=movies_db', 'root', '');
 return $pdo;
}
?>
