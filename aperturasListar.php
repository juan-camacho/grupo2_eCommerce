<?php

  $pageTitle = 'IDEA COB | Listar Aperturas';

  require_once 'php/config/config.php';
  require_once 'php/models/aperturaModel.php';

  $aperturas = traerAperturas($pdo);
?>
<?php require_once 'partials/head.php' ?>
<?php require_once 'partials/header.php' ?>
    <div class="container-fluid px-0">
      <div class="row d-flex no-gutters">
        <?php require_once 'partials/headerAdmin.php' ?>
    <div class="col">
     <div class="container vh-100" id="containerbackend">
       <div class="contenedor_ap">
     <h3 class="pb-3"id="letrablanca">/ LISTADO DE APERTURAS</h3>
     <p>
       <a href="aperturasAgregar.php" class="btn btn-famarilloblanco">Agregar nueva apertura</a>
     </p>
       <?php foreach ($aperturas as $apertura) : ?>
       <div class="col col-xs-12 col-sm-6 col-md-3">
         <div class="card bg-primary">
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
    </div>
  </div>
</div>


<?php require_once 'partials/footer.php' ?>
