<?php $tittle = "Tienda Babuino - Home"?>
<!DOCTYPE html>
<html lang="es">
<?php require_once("php/head.php")?>
  <body>
    <?php require_once("php/header.php"); ?>

    <main>
        <!-- FULLSLIDER -->
        <div class="fullslider">
            <div class="">
                <h3> Cubos de madera </h3>
                <h1> Juguetes </br> didaticos </h1>
            </div>
        </div>

        <!-- NFILO  -->
        <section class="nfilonhistorias">
            <div class="flex_cen_cen_full" id="fondogrisclaro">
                  <div class="">
                      <div class="textonfilonhistorias">
                          <h3> NUESTRA FILOSOFIA </h3>
                          <h4> APRENDER JUGANDO</h4>
                          <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                          <button type="button" name="VER MAS" class="btn_form"> ver mas </button>
                      </div>
                  </div>

                <div class="">
                    <img src="images/babuinogif.gif" alt="">
                </div>
            </div>
        </section>

        <!-- NPRODUC -->

        <section class="nproducts">
            <div class="titular">
                <h3> NUESTRAS LINEAS </h3>
                <button type="button" name="button" class="btn_form"> todos los productos </button>
            </div>
              <div class="containergrid">
              <div id="imgnumbers">
                  <div class="subtitulo">
                      NUMBERS
                  </div>
                  <div class="vermas">
                      <span>VER NUMBERS!</span>
                  </div>
              </div>
              <div id="txtnumbers">
                  <p>Elegi un rango de numeros o numeros aleatorios y juga con operaciones matematicas. Elegi un rango de numeros o numeros aleatorios y juga con operaciones matematicas.</p>
              </div>
              <div id="txticons">
                  <p>Elegi la tematica que mas te guste y personaliza tu kit con iconos y figuras. Elegi la tematica que mas te guste y personaliza tu kit con iconos y figuras.</p>
              </div>
              <div id="imgicons">
                  <div class="subtitulo">
                      ICONS
                  </div>
                  <div class="vermas">
                      <span>VER ICONS!</span>
                  </div>
              </div>
              <div id="imgabc">
                  <div class="subtitulo">
                      LETTERS
                  </div>
                  <div class="vermas">
                      <span>VER LETTERS!</span>
                  </div>
              </div>
              <div id="txtabc">
                  <p>Aprendiendo a leer? Elegi las letras de su nombre y juga a aparender el abecedario. Aprendiendo a leer? Elegi las letras de su nombre y juga a aparender el abecedario.</p>
              </div>
          </div>
        </section>

        <!-- NHISTORIAS  -->
        <section class="nfilonhistorias" id="fondogrisoscuro">
            <div class="flex_cen_cen_full">
                <div class="">
                    <img src="images/mateo.jpeg" alt="">
                </div>
                <div class="">
                    <div class="textonfilonhistorias" id="textohistorias">
                        <h3 class="white"> MATEO </h3>
                        <h4 class="turquesa"> 2 AÑOS </h4>
                        <p class="white"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                    </div>
                </div>
            </div>
        </section>

    </main>
<!-- Footer -->
<?php require_once("php/footer.php") ?>
  </body>
</html>