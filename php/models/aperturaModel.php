<?php
  require_once 'model.php';

  function traerAperturas($pdo) {
    $stmt = $pdo->prepare("SELECT * FROM aperturas");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  function traerAperturaPorId($pdo, $id) {
    $stmt = $pdo->prepare("SELECT * FROM aperturas WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  function agregarApertura($pdo, $data) {
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

  function actualizarApertura($pdo, $data) {
    $stmt = $pdo->prepare(
      "UPDATE aperturas SET
        familia_id = NULL,
        nombre = :nombre,
        angulo = :angulo,
        imagen = :imagen
      WHERE id = :id;"
    );

    $stmt->bindParam(':id', $data['id']);
    $stmt->bindParam(':nombre', $data['nombre']);
    $stmt->bindParam(':angulo', $data['angulo']);
    $stmt->bindParam(':imagen', $data['imagen']);

    $stmt->execute();
    return $data['id'];
  }

  function borrarApertura($pdo, $id) {
    $stmt = $pdo->prepare(
      "DELETE FROM aperturas WHERE id = :id;"
    );

    $stmt->bindParam(':id', $id);

    $stmt->execute();
    return true;
  }
?>
