<?php

  $pageTitle = 'IDEA COB | Agregar Apertura';

  require_once 'php/config/config.php';
  require_once 'php/funciones.php';
  require_once 'php/forms/agregarAperturaForm.php';
  require_once 'php/models/aperturaModel.php';


  if ($_POST) {
      validateForm();
      if (isValid()) {
        if (isset($_FILES['imagen'])) {
          $_POST['imagen'] = subirArchivo($_FILES['imagen'], APERTURAS_IMG_DIR);
        }

        agregarApertura($pdo, $_POST);
        header('location: aperturasListar.php');
      }
  }

?>
<?php require_once 'partials/head.php' ?>
<?php require_once 'partials/header.php' ?>
<main class="purporange">
  <div class="containerbackend">
    <form class="contenedor_ap" method="post" enctype="multipart/form-data">
      <h2 id="letrablanca">/ NUEVA APERTURA</h2>

      <div class="form-row mb-3">
        <div class="form-control threed">

          <i class="fas fa-align-left icon"></i>
          <select class="" name="">
            <option value="">Sin familia</option>
          </select>
        </div>
        <?php if (hasError('familia_id')) : ?>
        <span class="error" style="color: white;"><?= getError('familia_id') ?></span><br>
        <?php endif ?>
      </div>

      <div class="form-row mb-3">
        <div class="form-control threed">
          <i class="fas fa-align-left icon"></i>
          <input type="text" placeholder="nombre" name="nombre" value="<?= old('nombre') ?>">
        </div>
        <?php if (hasError('nombre')) : ?>
          <span class="error" style="color: white;"> <?= getError('nombre') ?></span> <br>
        <?php endif ?>
      </div>

      <div class="form-row mb-3">
        <div class="form-control threed">
          <i class="fas fa-hashtag icon"></i>
          <input type="number" placeholder="angulo" name="angulo" value="<?= old('angulo') ?>">
        </div>
        <?php if (hasError('angulo')) : ?>
          <span class="error" style="color: white;"> <?= getError('angulo') ?></span> <br>
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
</main>
<?php require_once 'partials/footer.php' ?>
