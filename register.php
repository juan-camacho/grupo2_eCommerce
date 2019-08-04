<?php $tittle = "Tienda Babuino - Registro" ?>
<?php require_once("php/funciones/ingresousuario.php") ?>
<!DOCTYPE html>
<html lang="es">
<?php require_once("php/mod/head.php") ?>
<body>
    <?php require_once("php/mod/header.php") ?>
    <section class="formularios" style="padding-top: 7rem;">
        <form action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF'])?> " class="formulario_ap" method="post">
            <h2> Registrate</h2>
            <div class="contenedor_ap">
                <div class="input_contenedor_ap threed">
                    <i class="fas fa-user icon"></i>
                    <input type="text" placeholder="Nombre completo" name="nombre" required>
                </div>
                <div class="input_contenedor_ap threed">
                    <i class="fas fa-envelope icon"></i>
                    <input type="text" placeholder="email" name="email" required>
                </div>
                <div class="input_contenedor_ap threed">
                    <i class="fas fa-key icon"></i>
                    <input type="password" placeholder="Contraseña" name="password" required>
                </div>
                <input  type="submit" name="submit" value="registro" class="btn_form">
                <p> Al registrarte, aceptas nuestras condiciones de uso y politicas de privacidad</p>
                <p> Ya tienes cuenta?
                <br><a href="Ingreso.php" class="link"> Iniciar Sesion </a></p>
            </div>
        </form>
    </section>
    <?php require_once("php/mod/footer.php") ?>
</body>
</html>
