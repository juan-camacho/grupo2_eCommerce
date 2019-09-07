<?php

  $pageTitle = 'IDEA COB | Listar Aperturas';

  require_once 'php/config/config.php';
  require_once 'php/models/tdecolorModel.php';

  $aperturas = traerTdecolor($pdo);

?>
<?php require_once 'partials/head.php' ?>
<?php require_once 'partials/header.php' ?>
<main class="purporange">
  <div class="containerbackend">
    <h2 id="letrablanca">/ LISTADO DE APERTURAS</h2>
    <p>
      <a href="aperturasAgregar.php" class="btn btn-famarilloblanco">Agregar nueva apertura</a>
    </p>

    <div class="row" style="width: 100%">
      <?php foreach ($tdecolor as $tcolor) : ?>
      <div class="col col-xs-12 col-sm-6 col-md-3">
        <div class="card">
          <img src="<?php echo TDECOLOR_IMG_PATH . $tcolor['imagen'] ?>" class="card-img-top" alt="<?php echo $tcolor['temperatura'] ?>">
          <div class="card-body">
            <h4 class="card-title"><?php echo $tcolor['temperatura'] ?></h4>
            <p class="card-text">
              <strong>Ángulo:</strong> <?php echo $tcolor['unidad'] ?><br>

            </p>
            <a href="tdecolorEditar.php?id=<?php echo $tcolor['id'] ?>" class="btn btn-famarilloblanco">Editar</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</main>
<?php require_once 'partials/footer.php' ?>
