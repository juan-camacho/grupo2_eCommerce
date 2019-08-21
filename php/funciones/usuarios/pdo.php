<?php


try {
    $pdo = new PDO('mysql:host=localhost;dbname=ideadb', 'root', '');
    /*$stmt = $pdo->prepare('select *from users');
    */
    include("../funciones.php");
    $stmt = $pdo->prepare("INSERT INTO users value(null, '$email', '$password', '$nombre', null, null, null, null, null, null, null, null, null, null, null, null, null)");
    $stmt -> execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($data);
} catch (Exception $e) {
    file_put_contents('log.txt', $e->getMessage() . "\n", FILE_APPEND);
    die('Se produjo un error. vuelva a intentar luego.');
}




?>
