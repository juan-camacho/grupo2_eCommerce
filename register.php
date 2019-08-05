<?php $tittle = "Tienda Babuino - Registro"


?>

<!DOCTYPE html>
<html lang="es">
    <?php require_once("php/mod/head.php") ?>
    <body>
        <?php require_once("php/mod/header.php") ?>
       <section class="formularios" style="padding-top: 7rem;">
          <form action="php/funciones/usuarios/pdo.php" class="formulario_ap" method="POST">
             <h2> Registrate</h2>
               <div class="contenedor_ap">
                  <div class="input_contenedor_ap threed">
                    <i class="fas fa-user icon"></i>
                    <input type="text" placeholder="nombre" name="nombre" required>
                  </div>

                  <div class="input_contenedor_ap threed">
                  <i class="fas fa-envelope icon"></i>
                  <input type="email" placeholder="Email" name="email" required>
                  </div>

                  <div class="input_contenedor_ap threed">
                  <i class="fas fa-key icon"></i>
                  <input type="password" placeholder=" Contraseña" name="password" required>
                  </div>
                  <input type="submit" value="Registrate" class="btn_form">
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
