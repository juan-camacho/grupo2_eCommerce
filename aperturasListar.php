<?php

  $pageTitle = 'IDEA COB | Listar Aperturas';

  require_once 'php/config/config.php';
  require_once 'php/funciones.php';
  require_once 'php/models/aperturaModel.php';

  $aperturas = traerAperturas($pdo);

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
      <?php foreach ($aperturas as $apertura) : ?>
      <div class="col col-xs-12 col-sm-6 col-md-3">
        <div class="card">
          <img src="<?php echo APERTURAS_IMG_PATH . $apertura['imagen'] ?>" class="card-img-top" alt="<?php echo $apertura['nombre'] ?>">
          <div class="card-body">
            <h4 class="card-title"><?php echo $apertura['nombre'] ?></h4>
            <p class="card-text">
              <strong>Ángulo:</strong> <?php echo $apertura['angulo'] ?><br>
              <strong>Familia:</strong> <?php echo $apertura['familia_id'] ?>
            </p>
            <a href="aperturasEditar.php?id=<?php echo $apertura['id'] ?>" class="btn btn-famarilloblanco">Editar</a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</main>
<?php require_once 'partials/footer.php' ?>
