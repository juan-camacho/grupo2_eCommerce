<?php $tittle = "Tienda Babuino - Perfil Del Usuario" ?>
<!DOCTYPE html>
<html lang="es">
<?php require_once("php/mod/head.php") ?>
  <body>
      <?php require_once("php/mod/header.php") ?>
       <!-- Perfil  -->
       <div class="formularios" style="padding-top: 7rem;">
            <div class="formulario_ap">
                <div class="avatar threed ">

                </div>
                <h3> <?php echo $nombre ?> </h3>


            <a href="register.php"><button type="button" name="button" class="btn_form"> Editar Perfil </button></a>
            <br>
            <div class="bloque">
              <h5> Mis compras </h5>

            </div>
            <div class="interlineado">
              <h4> </h4>

            </div>
            <div class="interlineado">
              <h4> </h4>

            </div>
            <div class="interlineado">
              <h4> </h4>

            </div>
            <div class="bloque">
              <h5> Mis medios de pago </h5>

            </div>
            <div class="mediosdepago">

              <div class="tarjeta">
                TARJETA 1

              </div>
              <div class="tarjeta">
                TARJETA2

              </div>
              <div class="tarjeta">
                TARJETA 3
              </div>
            </div>
            <a href="proximo.php"><button type="button" name="button" class="btn_form"> Agregar medio de pago </button></a>
          </div>
        </div>

    <!-- Footer -->
    <?php require_once("php/mod/footer.php") ?>
  </body>
</html>
