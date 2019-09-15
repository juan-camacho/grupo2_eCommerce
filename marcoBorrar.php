<?php

  $pageTitle = 'IDEA COB | Borrar Marco';

  require_once 'php/config/config.php';
  require_once 'php/funciones.php';
  require_once 'php/models/marcoModel.php';

  if (isset($_GET['id'])) {
    $apertura = borrarMarco($pdo, $_GET['id']);

    //@TODO Borrar la imagen del disco rígido si existe
  }

  header('location: aperturasListar.php');
?>
