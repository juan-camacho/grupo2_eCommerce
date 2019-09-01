<?php

  $pageTitle = 'IDEA COB | Editar Apertura';

  require_once 'php/config/config.php';
  require_once 'php/funciones.php';
  require_once 'php/forms/editarAperturaForm.php';
  require_once 'php/models/aperturaModel.php';

  if ($_POST) {
      validateForm();
      if (isValid()) {
        if (isset($_FILES['imagen'])) {
          $_POST['imagen'] = subirArchivo($_FILES['imagen'], APERTURAS_IMG_DIR);
        } else {
          $_POST['imagen'] = $_POST['imagen_existente'];
        }

        actualizarApertura($pdo, $_POST);
        header('location: aperturasListar.php');
      }
  }

  if (isset($_GET['id'])) {
    $apertura = traerAperturaPorId($pdo, $_GET['id']);
  } else {
    header('location: aperturasListar.php');
  }

?>
<?php require_once 'partials/head.php' ?>
<?php require_once 'partials/header.php' ?>
<main class="purporange">
  <div class="containerbackend">
    <form class="contenedor_ap" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $apertura['id'] ?>">
      <input type="hidden" name="imagen_existente" value="<?php echo $apertura['imagen'] ?>">

      <h2 id="letrablanca">/ EDITAR APERTURA</h2>
      <?php if ($apertura['imagen']) : ?>
        <div class="form-row mb-3">
          <img src="<?php echo APERTURAS_IMG_PATH . $apertura['imagen'] ?>" class="card-img-top" alt="<?php echo $apertura['nombre'] ?>">
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
          <input type="text" placeholder="nombre" name="nombre" value="<?= old('nombre', $apertura['nombre']) ?>">
        </div>
        <?php if (hasError('nombre')) : ?>
          <span class="error" style="color: white;"> <?= getError('nombre') ?></span> <br>
        <?php endif ?>
      </div>

      <div class="form-row mb-3">
        <div class="form-control threed">
          <i class="fas fa-hashtag icon"></i>
          <input type="number" placeholder="angulo" name="angulo" value="<?= old('angulo', $apertura['angulo']) ?>">
        </div>
        <?php if (hasError('angulo')) : ?>
          <span class="error" style="color: white;"> <?= getError('angulo') ?></span> <br>
        <?php endif ?>
      </div>

      <div class="form-row mb-3">
        <div class="form-control threed">
          <i class="fas fa-image icon"></i>
          <input type="file" placeholder="imagen" name="imagen" value="<?= old('imagen', $apertura['imagen']) ?>">
        </div>
        <?php if (hasError('imagen')) : ?>
          <span class="error" style="color: white;"> <?= getError('imagen') ?></span> <br>
        <?php endif ?>
      </div>

      <button class="btn btn-fnegro" type="submit">GUARDAR</button>
      <a href="aperturasListar.php" class="btn btn-fnegro">VOLVER</a>
      <a href="aperturasBorrar.php?id=<?php echo $apertura['id'] ?>" class="btn btn-fnegro">BORRAR</a>
    </form>
  </div>
</main>
<?php require_once 'partials/footer.php' ?>
