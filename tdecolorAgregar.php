<?php

  $pageTitle = 'IDEA COB | Agregar Apertura';

  require_once 'php/config/config.php';
  require_once 'php/funciones.php';
  require_once 'php/forms/agregarTdecolorForm.php';
  require_once 'php/models/tdecolorModel.php';


  if ($_POST) {
      validateForm();
      if (isValid()) {
        if (isset($_FILES['imagen'])) {
          $_POST['imagen'] = subirArchivo($_FILES['imagen'], TDECOLOR_IMG_DIR);
        }

        agregarTdecolor($pdo, $_POST);
        header('location: tdecolorListar.php');
      }
  }

?>
<?php require_once 'partials/head.php' ?>
<?php require_once 'partials/header.php' ?>

<div class="container-fluid px-0">
  <div class="row d-flex no-gutters">
    <?php require_once 'partials/headerAdmin.php' ?>

<div class="col">
  <div class="container vh-100" id="containerbackend">
    <form class="contenedor_ap" method="post" enctype="multipart/form-data">
      <h2 id="letrablanca">/ NUEVO COLOR DE TEMPERATPURA</h2>

      <div class="form-row mb-3">
        <div class="form-control threed">
          <i class="fas fa-align-left icon"></i>
          <input type="text" placeholder="unidad" name="unidad" value="<?= old('unidad') ?>">
        </div>
        <?php if (hasError('unidad')) : ?>
          <span class="error" style="color: white;"> <?= getError('unidad') ?></span> <br>
        <?php endif ?>
      </div>

      <div class="form-row mb-3">
        <div class="form-control threed">
          <i class="fas fa-hashtag icon"></i>
          <input type="number" placeholder="Temperatura, Ejemplo 2700" name="temperatura" value="<?= old('temperatura') ?>">
        </div>
        <?php if (hasError('temperatura')) : ?>
          <span class="error" style="color: white;"> <?= getError('temperatura') ?></span> <br>
        <?php endif ?>
      </div>

      <div class="form-row mb-3">
        <div class="form-control threed">
          <i class="fas fa-image icon"></i>
          <input type="file" placeholder="imagen" name="imagen" value="<?= old('imagen') ?>">
        </div>
        <?php if (hasError('imagen')) : ?>
          <span class="error" style="color: white;"> <?= getError('imagen') ?></span> <br>
        <?php endif ?>
      </div>

      <button class="btn btn-fnegro" type="submit">GUARDAR</button>
      <a href="aperturasListar.php" class="btn btn-fnegro">VOLVER</a>
    </form>
    </div>
  </div>

    </div>
</div>

<?php require_once 'partials/footer.php' ?>
