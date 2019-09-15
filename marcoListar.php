<?php

  $pageTitle = 'IDEA COB | Listar MARCOS';

  require_once 'php/config/config.php';
  require_once 'php/models/marcoModel.php';

  $marcos = traerMarco($pdo);
?>

<?php require_once 'partials/head.php' ?>
<?php require_once 'partials/header.php' ?>

    <div class="container-fluid px-0">
      <div class="row d-flex no-gutters">
        <?php require_once 'partials/headerAdmin.php' ?>


    <div class="col">
     <div class="container vh-100" id="containerbackend">
       <div class="contenedor_ap">
     <h3 class="pb-3"id="letrablanca">/ LISTADO DE MARCO</h3>
     <p>
       <a href="marcoAgregar.php" class="btn btn-famarilloblanco">Agregar Nuevo Marco</a>
     </p>
       <?php foreach ($marcos as $marco) : ?>
       <div class="col col-xs-12 col-sm-6 col-md-3">
         <div class="card bg-primary">
           <img src="<?php echo APERTURAS_IMG_PATH . $marco['imagen'] ?>" class="card-img-top" alt="<?php echo $marco['nombre'] ?>">
           <div class="card-body">
             <h4 class="card-title"><?php echo $marco['nombre'] ?></h4>
             <p class="card-text">
               <strong>DIMENSION:</strong> <?php echo $marco['dimension'] ?><br>
               <strong>Familia:</strong> <?php echo $marco['familia_id'] ?>
             </p>
             <a href="marcoEditar.php?id=<?php echo $marco['id'] ?>" class="btn btn-famarilloblanco">Editar</a>
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
