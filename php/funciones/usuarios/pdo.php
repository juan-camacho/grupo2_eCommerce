<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=movies_db', 'root', '');

    /*$stmt = $pdo->prepare('select *from actors');*/
    $stmt = $pdo->prepare('select * from actors where rating > :rating');

    $stmt->bindValue('rating', 7);

    $stmt -> execute();

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    var_dump($data);

} catch (Exception $e) {
    file_put_contents('log.txt', $e->getMessage() . "\n", FILE_APPEND);
    die('Se produjo un error. vuelva a intentar luego.');
}
?>


<<!-- ?php
include("../funciones.php");
$pdo = get_connection();
$stmt = $pdo->prepare('SELECT * FROM series');
$stmt->execute();
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);
 ?>
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
     <head>
         <meta charset="utf-8">
         <title>series</title>
     </head>
     <body>
?php foreach ($data as $title) : ?>
<div>
<li>?= $title['title'] ?></li>
</div>
?php endforeach ?>
     </body>
 </html>-->>
