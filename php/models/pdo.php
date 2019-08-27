<?php
  $dbHost = 'localhost';
  $dbName = 'ecommerce';
  $dbUser = 'root';
  $dbPass = '';

  try {
      $pdo = new PDO("mysql:host={$dbHost};dbname={$dbName}", $dbUser, $dbPass);
  } catch (PDOException $e) {
      echo "¡Error!: " . $e->getMessage() . "<br/>";
      die();
  }
?>
