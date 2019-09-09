<?php

  $pageTitle = 'IDEA COB | Editar TEMPERATURA';

  require_once 'php/config/config.php';
  require_once 'php/funciones.php';
  require_once 'php/forms/editarTdecolorForm.php';
  require_once 'php/models/tdecolorModel.php';

  if ($_POST) {
      validateForm();
      if (isValid()) {
        if (isset($_FILES['imagen'])) {
          $_POST['imagen'] = subirArchivo($_FILES['imagen'], TDECOLOR_IMG_DIR);
        } else {
          $_POST['imagen'] = $_POST['imagen_existente'];
        }

        actualizarTdecolor($pdo, $_POST);
        header('location: tdecolorListar.php');
      }
  }

  if (isset($_GET['id'])) {
    $tdecolor = traerTdecolorPorId($pdo, $_GET['id']);
  } else {
    header('location: tdecolorListar.php');
  }

?>
<?php require_once 'partials/head.php' ?>
<?php require_once 'partials/header.php' ?>
<main class="purporange">
  <div class="containerbackend">
    <form class="contenedor_ap" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $tdecolor['id'] ?>">
      <input type="hidden" name="imagen_existente" value="<?php echo $tdecolor['imagen'] ?>">

      <h2 id="letrablanca">/ EDITAR temperatura</h2>
      <?php if ($tdecolor['imagen']) : ?>
        <div class="form-row mb-3">
          <img src="<?php echo TDECOLOR_IMG_PATH . $tdecolor['imagen'] ?>" class="card-img-top" alt="<?php echo $tdecolor['temperatura'] ?>">
        </div>
      <?php endif; ?>

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
          <input type="text" placeholder="unidad" name="unidad" value="<?= old('unidad', $tdecolor['unidad']) ?>">
        </div>
        <?php if (hasError('unidad')) : ?>
          <span class="error" style="color: white;"> <?= getError('unidad') ?></span> <br>
        <?php endif ?>
      </div>

      <div class="form-row mb-3">
        <div class="form-control threed">
          <i class="fas fa-hashtag icon"></i>
          <input type="number" placeholder="temperatura" name="temperatura" value="<?= old('temperatura', $tdecolor['temperatura']) ?>">
        </div>
        <?php if (hasError('temperatura')) : ?>
          <span class="error" style="color: white;"> <?= getError('temperatura') ?></span> <br>
        <?php endif ?>
      </div>

      <div class="form-row mb-3">
        <div class="form-control threed">
          <i class="fas fa-image icon"></i>
          <input type="file" placeholder="imagen" name="imagen" value="<?= old('imagen', $tdecolor['imagen']) ?>">
        </div>
        <?php if (hasError('imagen')) : ?>
          <span class="error" style="color: white;"> <?= getError('imagen') ?></span> <br>
        <?php endif ?>
      </div>

      <button class="btn btn-fnegro" type="submit">GUARDAR</button>
      <a href="tdecolorListar.php" class="btn btn-fnegro">VOLVER</a>
      <a href="tdecolorBorrar.php?id=<?php echo $tdecolor['id'] ?>" class="btn btn-fnegro">BORRAR</a>
    </form>
  </div>
</main>
<?php require_once 'partials/footer.php' ?>
