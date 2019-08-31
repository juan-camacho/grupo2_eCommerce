<?php $tittle = "IDEA COB - REGISTRO"?>

<?php
require_once("php/forms/projectRegisterForm.php");
require_once("php/models/projectModel.php");
require_once("php/funciones.php");

if ($_POST) {
    validateForm();
    if (isValid()) {
      saveProyect($pdo, $_POST);
      header('location: registro-exitoso.php');
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<?php require_once("php/mod/head.php")?>
<body>
<?php require_once("php/mod/header.php")?>
<main>
        <div class="containerregistro">
           <form class="contenedor_ap" accion="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
               <h2 id="letrablanca">/ REGISTRO</h2>
               <div class="form-control threedamarillo">
                <i class="fas fa-user icon" style="color: black"></i>
                <input type="text" placeholder="nombre" name="nombre" value="<?= old('nombre') ?>">
               </div>

               <?php if (hasError('nombre')) : ?>
                   <span class="error"><?= getError('nombre') ?></span><br>
               <?php endif ?>

               <div class="form-control threedamarillo">
                <i class="fas fa-user icon" style="color: black"></i>
                <input type="text" placeholder="apellido" name="apellido" value="<?= old('apellido') ?>">
               </div>
               <?php if (hasError('apellido')) : ?>
                   <span class="error"> <?= getError('apellido') ?></span> <br>
               <?php endif ?>
                <div class="form-control threedamarillo">
                        <i class="fas fa-envelope icon" style="color: black"></i>
                    <input type="text" placeholder="Email" name="email" value="<?= old('email') ?>">
                </div>
                 <?php if (hasError('email')) : ?>
                <span class="error"><?= getError('email') ?></span> <br>
                <?php endif ?>
                <div class="form-control threedamarillo">
                    <i class="fas fa-key icon"></i>
                    <input type="password" placeholder="Contraseña" name="password" value ="<?= old('paswword') ?>" required>
                </div>
                 <?php if (hasError('password')) : ?>
                <span class="error"><?= getError('password') ?></span> <br>
                <?php endif ?>
                <div class="form-control threedamarillo">
                    <i class="fas fa-key icon"></i>
                    <input type="password" placeholder="Repetir contraseña" name="password2" value ="<?= old('password2') ?>"  >
                </div>
                <?php if (hasError('password2')) : ?>
                <span class="error"><?= getError('password2') ?></span> <br>
                <?php endif ?>
                    <button class="btn btn-fnegro" type="submit" name="submit">Registrarme</button>
                    <div class="divformu">
                        <span>Ya estas registrado? </span> <a href="Ingreso.php" class="link"> Log in</a>
                    </div>
            </form>
</div>
</main>
<!-- Footer -->
<?php require_once("php/mod/footer.php") ?>
  </body>
</html>
