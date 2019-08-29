<?php
  require_once 'model.php';

  function table() {
    return 'users';
  }

  function allProyects($pdo) {
    $stmt = $pdo->prepare("SELECT * FROM " . table());
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  function saveProyect($pdo, $data) {
    $stmt = $pdo->prepare(
      "INSERT INTO " . table() . " VALUES (NULL, :name, :lastname, :image, :email, :password,);"
    );
    $stmt->bindParam(':name', $data['name']);
    $stmt->bindParam(':lastname', $data['lastname']);
    $stmt->bindParam(':image', $data['image']);
    $stmt->bindParam(':email', $data['email']);
    $contraseña = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $stmt->bindParam(':password', $contraseña);
    $stmt->execute();
    return $pdo->lastInsertId();
  }
?>
