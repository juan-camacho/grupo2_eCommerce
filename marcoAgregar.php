<?php

  $pageTitle = 'IDEA COB | Agregar Marco';

  require_once 'php/config/config.php';
  require_once 'php/funciones.php';
  require_once 'php/forms/agregarMarcoForm.php';
  require_once 'php/models/marcoModel.php';


  if ($_POST) {
      validateForm();
      if (isValid()) {
        if (isset($_FILES['imagen'])) {
          $_POST['imagen'] = subirArchivo($_FILES['imagen'], MARCO_IMG_DIR);
        }

        agregarMarco($pdo, $_POST);
        header('location: marcoListar.php');
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
         <h3 class="pb-3"id="letrablanca">/ NUEVO MARCO</h3>

         <div class="form-row mb-3">
           <div class="form-control threed">

             <i class="fas fa-align-left icon"></i>
             <select class="" name="">
               <option value="">Sin familia</option>
             </select>
           </div>
           <?php if (hasError('familia_id')) : ?>
           <span class="error"><?= getError('familia_id') ?></span><br>
           <?php endif ?>
         </div>

         <div class="form-row mb-3">
           <div class="form-control threed">
             <i class="fas fa-align-left icon"></i>
             <input type="text" placeholder="nombre" name="nombre" value="<?= old('nombre') ?>">
           </div>
           <?php if (hasError('nombre')) : ?>
             <span class="error"> <?= getError('nombre') ?></span> <br>
           <?php endif ?>
         </div>

         <div class="form-row mb-3">
           <div class="form-control threed">
             <i class="fas fa-hashtag icon"></i>
             <input type="number" placeholder="dimension" name="dimension" value="<?= old('dimension') ?>">
           </div>
           <?php if (hasError('dimension')) : ?>
             <span class="error"> <?= getError('dimension') ?></span> <br>
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

         <div class="row justify-content-around">
           <button class="btn btn-famarilloblanco" type="submit">GUARDAR</button>
            <a href="marcoListar.php" class="btn btn-famarilloblanco">VOLVER</a>
         </div>

       </form>
     </div>



    </div>

  </div>

</div>



<?php require_once 'partials/footer.php' ?>
