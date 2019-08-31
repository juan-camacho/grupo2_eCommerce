<?php $tittle = "IDEA COB - REGISTRO"?>
<?php
session_start();
require_once 'php/forms/projectRegisterForm.php';
require_once 'php/models/projectModel.php';
$message = '';
  if ($_REQUEST) {
    validateForm();
    if (isValid()) {
        session_start();
          if (!empty($_REQUEST)) {
            $pdo = get_connection();
            $sql = "INSERT INTO users (name, lastname, email, password) VALUES (:name, :lastname, :email, :password)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $_REQUEST['name']);
            $stmt->bindParam(':lastname', $_REQUEST['lastname']);
            $stmt->bindParam(':email', $_REQUEST['email']);
            $password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
            $stmt->bindParam(':password', $password);
            if ($stmt->execute()) {
              $message = 'usuario creado';
              header('location: registro-exitoso.php');
            } else {
              $message = 'El email es ya se encuentra registrado';
            }
        }
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
               <?php if(!empty($message)): ?>
                   <p class="error"> <?= $message ?></p>
               <?php endif; ?>
               <div class="input_contenedor_ap threedamarillo">
                <i class="fas fa-user icon" style="color: black"></i>
                <input type="text" placeholder="nombre" name="name" value"<?= old('name'); ?>">
               </div>
               <?php if (hasError('name')) : ?>
                   <span class="error"><?= getError('name') ?></span><br>
               <?php endif ?>

               <div class="input_contenedor_ap threedamarillo">
                <i class="fas fa-user icon" style="color: black"></i>
                <input type="text" placeholder="apellido" name="lastname" value"<?= old('lastaname'); ?>">
               </div>
               <?php if (hasError('lastname')) : ?>
                 <span class="error"><?= getError('lastname') ?></span><br>
                <?php endif ?>

                <div class="input_contenedor_ap threedamarillo">
                        <i class="fas fa-envelope icon" style="color: black"></i>
                    <input type="text" placeholder="Email" name="email" value"<?= old('email'); ?>">
                </div>
                <?php if (hasError('email')) : ?>
                <span class="error"><?= getError('email') ?></span> <br>
                <?php endif ?>

                <div class="input_contenedor_ap threedamarillo">
                    <i class="fas fa-key icon"></i>
                    <input type="password" placeholder="Contraseña" name="password">
                </div>
                <?php if (hasError('password')) : ?>
                <span class="error"><?= getError('password') ?></span> <br>
                <?php endif ?>
                <div class="input_contenedor_ap threedamarillo">
                    <i class="fas fa-key icon"></i>
                    <input type="password" placeholder="Repetir contraseña" name="password2">
                </div>
                    <button class="btn btn-fnegro" type="submit" value="submit">Registrarme</button>
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
