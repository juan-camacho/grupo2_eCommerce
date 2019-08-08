<?php $tittle = "Registro";
require_once("php/funciones/funciones.php");
?>
<!DOCTYPE html>
<html lang="es">
<?php require_once("php/mod/head.php") ?>
<body>
    <?php require_once("php/mod/header.php") ?>
    <section class="formularios" style="padding-top: 7rem;">
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="formulario_ap" method="POST">
            <h2> Registrate</h2>
            <div class="contenedor_ap">
                <div class="input_contenedor_ap threed">
                    <i class="fas fa-user icon"></i>
                    <input type="text" placeholder="nombre" name="nombre" required>
                </div>
                <?php if(empty($_POST['submit'])) : ?>
                    <div class="modal dialog" tabindex="-1" role="dialog" id="loginModalok">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <h4> Nombre <?php echo "tu Nombre es: $nombre <br />";?> ok! </h4>
                                <h4> Email <?php echo "Tu Email es: $email";?> </h4>
                                <h4>Password <?php echo $contraseña; ?></h4>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="modal dialog" tabindex="-1" role="dialog" id="loginModalok">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <h4> Verificar <?php echo $error; ?> </h4>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="input_contenedor_ap threed">
                    <i class="fas fa-envelope icon"></i>
                    <input type="email" placeholder="Email" name="email" required>
                </div>

                <div class="input_contenedor_ap threed">
                    <i class="fas fa-key icon"></i>
                    <input type="password" placeholder=" Contraseña" name="password" required>
                </div>
                <input type="submit" value="Registrate" name="submit" class="btn_form">
                <p> Al registrarte, aceptas nuestras condiciones de uso y politicas de privacidad</p>
                <p> Ya tienes cuenta?
                    <br><a href="Ingreso.php" class="link"> Iniciar Sesion </a></p>

                </div>
            </form>
        </section>
        <!-- Footer -->
        <?php require_once("php/mod/footer.php") ?>
    </body>
    </html>
