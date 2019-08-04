<?php
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
<?php foreach ($data as $title) : ?>
<div>
<li><?= $title['title'] ?></li>
</div>
<?php endforeach ?>
     </body>
 </html>
