<?php $tittle = "Tienda Babuino - Ingresar" ?>
<!DOCTYPE html>
<html lang="es">
    <?php require_once("php/head.php") ?>
    <body>
        <?php require_once("php/header.php") ?>
       <section class="formularios" style="padding-top: 7rem;">

          <form action="" class="formulario_ap">

             <h2>Ingresá</h2>
             <form class="" action="index.php" method="post">
               <div class="contenedor_ap">
                  <div class="input_contenedor_ap threed">
                  <i class="fas fa-envelope icon"></i>
                  <input type="text" placeholder="Mail" required>
                  </div>
                  <div class="input_contenedor_ap threed">
                  <i class="fas fa-key icon"></i>
                  <input type="password" placeholder=" Contraseña" required>
                  </div>

                      <a href="perfil.php"><button class="btn_form" type="submit" name="button" value="s">Ingresa</button></a>
                      <label>
                          <input type="checkbox" checked="checked" name="recuerdo"> Recuerdame!
                      </label>
                      <button type="button" id="btn_can"class="btn_form">Cancelar</button>
                      <span class="contraseña">Forgot <a href="proximo.php">password?</a></span>

                 
               </div>

           </form>
        </section>



              <!-- Footer -->
    <?php require_once("php/footer.php") ?>
    </body>
</html>
