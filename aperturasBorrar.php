<?php

  $pageTitle = 'IDEA COB | Borrar Apertura';

  require_once 'php/config/config.php';
  require_once 'php/funciones.php';
  require_once 'php/models/aperturaModel.php';

  if (isset($_GET['id'])) {
    $apertura = borrarApertura($pdo, $_GET['id']);

    //@TODO Borrar la imagen del disco rígido si existe
  }

  header('location: aperturasListar.php');
?>
