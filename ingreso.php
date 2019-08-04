<?php $tittle = "Tienda Babuino - Ingresar" ?>
<!DOCTYPE html>
<html lang="es">
<?php require_once("php/mod/head.php") ?>
<body>
    <?php require_once("php/mod/header.php") ?>
    <section class="formularios" style="padding-top: 7rem;">
        <form action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" class="formulario_ap" method="post">
            <h2>Ingresa</h2>
                <div class="contenedor_ap">
                    <div class="input_contenedor_ap threed">
                        <i class="fas fa-envelope icon"></i>
                        <input type="text" placeholder="Email" name="email" required>
                    </div>
                    <div class="input_contenedor_ap threed">
                        <i class="fas fa-key icon"></i>
                        <input type="password" placeholder=" Contraseña" name="password" required>
                    </div>
                    <button class="btn_form" type="submit" name="submit" value="s">Ingresa</button>
                    <label>
                        <input type="checkbox" checked="checked" name="recuerdo"> Recuerdame!
                    </label>
                    <button type="button" id="btn_can"class="btn_form">Cancelar</button>
                    <span class="contraseña">Forgot <a href="proximo.php">password?</a></span>
                </div>
        </form>
    </section>
    <?php require_once("php/mod/footer.php") ?>
</body>
</html>
