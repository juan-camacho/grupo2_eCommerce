<?php
  require_once 'model.php';

  function traerAperturas($pdo) {
    $stmt = $pdo->prepare("SELECT * FROM aperturas");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  function agregarApertura($pdo, $data, $files) {
    $stmt = $pdo->prepare(
      "INSERT INTO aperturas (id, familia_id, nombre, angulo, imagen) VALUES (NULL, NULL, :nombre, :angulo, :imagen);"
    );

    //$stmt->bindParam(':familia_id', $data['familia_id']);
    $stmt->bindParam(':nombre', $data['nombre']);
    $stmt->bindParam(':angulo', $data['angulo']);
    $stmt->bindParam(':imagen', $data['imagen']);

    $stmt->execute();
    return $pdo->lastInsertId();
  }
?>
