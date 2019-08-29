<?php $tittle = "IDEA COB - Registro exitoso"?>
<!DOCTYPE html>
<html lang="es">
<?php require_once("php/mod/head.php")?>
<body>
<?php require_once("php/mod/header.php")?>
<main>
    <div class="containerregistro">
      <h3>¡Gracias por registrarte! </h3>
    <h3>  <?= $_SESSION['user']['name'] . ' ' . $_SESSION['user']['lastname'] ?> </h3>

<h5><a href="index.php" > Continuar navegando</a></h5>

        </div>
    </div>
</main>
    <?php require_once("php/mod/footer.php") ?>
  </body>
</html>
