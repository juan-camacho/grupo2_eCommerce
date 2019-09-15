<?php

  $pageTitle = 'IDEA COB | Editar Marco';

  require_once 'php/config/config.php';
  require_once 'php/funciones.php';
  require_once 'php/forms/editarMarcoForm.php';
  require_once 'php/models/marcoModel.php';

  if ($_POST) {
      validateForm();
      if (isValid()) {
        if (isset($_FILES['imagen'])) {
          $_POST['imagen'] = subirArchivo($_FILES['imagen'], MARCO_IMG_DIR);
        } else {
          $_POST['imagen'] = $_POST['imagen_existente'];
        }

        actualizarApertura($pdo, $_POST);
        header('location: marcoListar.php');
      }
  }

  if (isset($_GET['id'])) {
    $marco = traerMarcoPorId($pdo, $_GET['id']);
  } else {
    header('location: marcoListar.php');
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
         <input type="hidden" name="id" value="<?php echo $marco['id'] ?>">
         <input type="hidden" name="imagen_existente" value="<?php echo $marco['imagen'] ?>">

         <h2 id="letrablanca">/ EDITAR Marco</h2>
         <?php if ($marco['imagen']) : ?>
           <div class="form-row mb-3">
             <img src="<?php echo APERTURAS_IMG_PATH . $marco['imagen'] ?>" class="card-img-top" alt="<?php echo $marco['nombre'] ?>">
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
             <input type="text" placeholder="nombre" name="nombre" value="<?= old('nombre', $marco['nombre']) ?>">
           </div>
           <?php if (hasError('nombre')) : ?>
             <span class="error" style="color: white;"> <?= getError('nombre') ?></span> <br>
           <?php endif ?>
         </div>

         <div class="form-row mb-3">
           <div class="form-control threed">
             <i class="fas fa-hashtag icon"></i>
             <input type="number" placeholder="dimension" name="dimension" value="<?= old('angulo', $marco['dimension']) ?>">
           </div>
           <?php if (hasError('dimension')) : ?>
             <span class="error" style="color: white;"> <?= getError('dimension') ?></span> <br>
           <?php endif ?>
         </div>

         <div class="form-row mb-3">
           <div class="form-control threed">
             <i class="fas fa-image icon"></i>
             <input type="file" placeholder="imagen" name="imagen" value="<?= old('imagen', $marco['imagen']) ?>">
           </div>
           <?php if (hasError('imagen')) : ?>
             <span class="error" style="color: white;"> <?= getError('imagen') ?></span> <br>
           <?php endif ?>
         </div>

         <button class="btn btn-fnegro" type="submit">GUARDAR</button>
         <a href="marcoListar.php" class="btn btn-fnegro">VOLVER</a>
         <a href="marcoBorrar.php?id=<?php echo $marco['id'] ?>" class="btn btn-fnegro">BORRAR</a>
        
       </form>
     </div>



    </div>

  </div>
  </div>




<?php require_once 'partials/footer.php' ?>
