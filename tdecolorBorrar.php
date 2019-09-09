<?php

  $pageTitle = 'IDEA COB | Borrar temperatura';

  require_once 'php/config/config.php';
  require_once 'php/funciones.php';
  require_once 'php/models/tdecolorModel.php';

  if (isset($_GET['id'])) {
    $apertura = borrarTdecolor($pdo, $_GET['id']);

    //@TODO Borrar la imagen del disco rígido si existe
  }

  header('location: tdecolorListar.php');
?>
