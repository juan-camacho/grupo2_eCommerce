<?php

  $pageTitle = 'IDEA COB | Listar Temperatura';

  require_once 'php/config/config.php';
  require_once 'php/models/tdecolorModel.php';

  $tdecolor = traerTdecolor($pdo);
?>
<?php require_once 'partials/head.php' ?>
<?php require_once 'partials/header.php' ?>
<div class="container-fluid px-0">
  <div class="row d-flex no-gutters">
    <?php require_once 'partials/headerAdmin.php' ?>
<div class="col">
 <div class="container vh-100" id="containerbackend">
   <div class="contenedor_ap">
    <h2 id="letrablanca">/ LISTADO DE tempratura</h2>
    <p>
      <a href="tdecolorAgregar.php" class="btn btn-famarilloblanco">Agregar nueva Temperatura</a>
    </p>
      <?php foreach ($tdecolor as $tcolor) : ?>
      <div class="col col-xs-12 col-sm-6 col-md-3">
        <div class="card">
          <img src="<?php echo TDECOLOR_IMG_PATH . $tcolor['imagen'] ?>" class="card-img-top" alt="<?php echo $tcolor['temperatura'] ?>">
          <div class="card-body">
            <h4 class="card-title"><?php echo $tcolor['temperatura'] ?></h4>
            <p class="card-text">
              <strong>unidad:</strong> <?php echo $tcolor['unidad'] ?><br>
            </p>
            <a href="tdecolorEditar.php?id=<?php echo $tcolor['id'] ?>" class="btn btn-famarilloblanco">Editar</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
      </div>
     </div>
   </div>
   </div>
<?php require_once 'partials/footer.php' ?>
