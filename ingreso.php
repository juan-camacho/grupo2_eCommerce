<?php $tittle = "IDEA COB - Home"?>
<!DOCTYPE html>
<html lang="es">
<?php require_once("php/mod/head.php")?>
<body>
<?php require_once("php/mod/header.php")?>
<main>
        <div class="containeringreso">
            <form class="contenedor_ap" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <h2>/ LOG IN</h2>
                <div class="input_contenedor_ap threed">
                   <?php if(!empty($_POST['emailingreso'])) : ?>
                     <i class="fas fa-envelope icon" style="color: black"></i>
                     <input type="email" placeholder="Email" name="emailingreso" value="<?php echo htmlspecialchars($emailingreso);?>">
                   <?php else : ?>
                    <i class="fas fa-envelope icon"></i>
                    <input type="email" placeholder="Email" name="emailingreso" >
                  <?php endif; ?>
                </div>
                <span class="error"> <?php if (!empty($erroremailingreso)) {echo $erroremailingreso;} ?></span> <br>
                <div class="input_contenedor_ap threed">
                    <i class="fas fa-key icon"></i>
                    <input type="password" placeholder="Contraseña" name="passwordingreso">
                </div>
                <span class="error"> <?php if (!empty($errorpasswordingreso)) {echo $errorpasswordingreso;} ?></span> <br>
                <div class="divformu" id="olvidastecontra">
                    <span>Olvidaste tu contrasena?</span>
                </div>
                    <button class="btn btn-famarilloblanco" type="submit" name="submit2">Ingresa</button>
                <div class="divformu" id="recuerdame">
                    <label>
                        <input type="checkbox" checked="checked" name="recuerdame"> Recuerdame!
                    </label>
                </div>
        </form>

</div>

</main>
<!-- Footer -->
<?php require_once("php/mod/footer.php") ?>
</body>
</html>
