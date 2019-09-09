<?php
  require_once 'model.php';

  function traerTdecolor($pdo) {
    $stmt = $pdo->prepare("SELECT * FROM tdecolor");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  function traerTdecolorPorId($pdo, $id) {
    $stmt = $pdo->prepare("SELECT * FROM tdecolor WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  function agregarTdecolor($pdo, $data) {
    $stmt = $pdo->prepare(
      "INSERT INTO tdecolor (temperatura, unidad, imagen) VALUES (:temperatura, :unidad, :imagen);"
    );

    //$stmt->bindParam(':familia_id', $data['familia_id']);
    $stmt->bindParam(':temperatura', $data['temperatura']);
    $stmt->bindParam(':unidad', $data['unidad']);
    $stmt->bindParam(':imagen', $data['imagen']);
    $stmt->execute();
    return $pdo->lastInsertId();
  }

  function actualizarTdecolor($pdo, $data) {
    $stmt = $pdo->prepare(
      "UPDATE tdecolor SET
        temperatura = :temperatura,
        unidad = :unidad,
        imagen = :imagen
      WHERE id = :id;"
    );

    $stmt->bindParam(':id', $data['id']);
    $stmt->bindParam(':temperatura', $data['temperatura']);
    $stmt->bindParam(':unidad', $data['unidad']);
    $stmt->bindParam(':imagen', $data['imagen']);

    $stmt->execute();
    return $data['id'];
  }

  function borrarTdecolor($pdo, $id) {
    $stmt = $pdo->prepare(
      "DELETE FROM tdecolor WHERE id = :id;"
    );

    $stmt->bindParam(':id', $id);

    $stmt->execute();
    return true;
  }
?>
