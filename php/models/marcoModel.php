<?php
  require_once 'model.php';

  function traerMarco($pdo) {
    $stmt = $pdo->prepare("SELECT * FROM marco");
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  function traerMarcoPorId($pdo, $id) {
    $stmt = $pdo->prepare("SELECT * FROM marco WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  function agregarMarco($pdo, $data) {
    $stmt = $pdo->prepare(
      "INSERT INTO marco (id, nombre, imagen, dimension, familia_id) VALUES (NULL, :nombre, :imagen, :dimension, NULL);"
    );

    //$stmt->bindParam(':familia_id', $data['familia_id']);
    $stmt->bindParam(':nombre', $data['nombre']);
    $stmt->bindParam(':dimension', $data['dimension']);
    $stmt->bindParam(':imagen', $data['imagen']);

    $stmt->execute();
    return $pdo->lastInsertId();
  }

  function actualizarMarco($pdo, $data) {
    $stmt = $pdo->prepare(
      "UPDATE marco SET
        familia_id = NULL,
        nombre = :nombre,
        dimension = :dimension,
        imagen = :imagen,
      WHERE id = :id;"
    );

    $stmt->bindParam(':id', $data['id']);
    $stmt->bindParam(':nombre', $data['nombre']);
    $stmt->bindParam(':dimension', $data['dimension']);
    $stmt->bindParam(':imagen', $data['imagen']);

    $stmt->execute();
    return $data['id'];
  }

  function borrarMarco($pdo, $id) {
    $stmt = $pdo->prepare(
      "DELETE FROM marco WHERE id = :id;"
    );

    $stmt->bindParam(':id', $id);

    $stmt->execute();
    return true;
  }
?>
