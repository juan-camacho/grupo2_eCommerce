<?php
  require_once 'pdo.php';
  $table = '';

  function fetchAll($pdo) {
    $stmt = $pdo->prepare("SELECT * FROM {$table};");

    return $stmt->execute()->fetchAll();
  }
?>
