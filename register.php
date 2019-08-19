<?php $tittle = "IDEA COB - Home"?>
<!DOCTYPE html>
<html lang="es">
<?php require_once("php/mod/head.php")?>
<body>
<?php require_once("php/mod/header.php")?>
<main>

        <div class="containerregistro">

           <form class="contenedor_ap" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
               <h2 id="letrablanca">/ REGISTRO</h2>
               <div class="input_contenedor_ap threedamarillo">
                   <?php if(!empty($_POST['nombre'])) : ?>
                       <i class="fas fa-user icon" style="color: black"></i>
                   <input type="text" placeholder="nombre" name="nombre" value="<?php echo htmlspecialchars($nombre);?>">
                   <?php else : ?>
                       <i class="fas fa-user icon"></i>
                    <input type="text" placeholder="Nombre" name="nombre" required>
                <?php endif; ?>
               </div>
                      <span class="error"> <?php if (!empty($errornombre)) {echo $errornombre; }?></span> <br>
               <div class="input_contenedor_ap threedamarillo">
                   <?php if(!empty($_POST['apellido'])) : ?>
                       <i class="fas fa-user icon" style="color: black"></i>
                   <input type="text" placeholder="Apellido" name="apellido" value="<?php echo htmlspecialchars($apellido);?>">
               <?php else : ?>
                   <i class="fas fa-user icon"></i>
                   <input type="text" placeholder="Apellido" name="apellido" required>
               <?php endif; ?>
               </div>
               <span class="error"> <?php if (!empty($errorapellido)) {echo $errorapellido; } ?></span> <br>
                <div class="input_contenedor_ap threedamarillo">
                    <?php if(!empty($_POST['email'])) : ?>
                        <i class="fas fa-envelope icon" style="color: black"></i>
                    <input type="email" placeholder="Email" name="email" value="<?php echo htmlspecialchars($email);?>">
                <?php else: ?>
                    <i class="fas fa-envelope icon"></i>
                    <input type="email" placeholder="Email" name="email" required>
                <?php endif; ?>
                </div>
                <span class="error"> <?php if (!empty($erroremail)) {echo $erroremail;} ?></span> <br>
                <div class="input_contenedor_ap threedamarillo">
                    <i class="fas fa-key icon"></i>
                    <input type="password" placeholder="Contraseña" name="password" required>
                </div>
                <span class="error"> <?php if (!empty($errorcontraseña)) {echo $errorcontraseña;} ?></span> <br>
                <div class="input_contenedor_ap threedamarillo">
                    <i class="fas fa-key icon"></i>
                    <input type="password" placeholder="Repetir contraseña" name="password2" >
                </div>
                <span class="error"> <?php if (!empty($errorcontraseña2)) {echo $errorcontraseña2;} ?></span><br>
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
