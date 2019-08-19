<?php $tittle = "IDEA COB - Home"?>
<!DOCTYPE html>
<html lang="es">
<?php require_once("php/mod/head.php")?>
<body>
<?php require_once("php/mod/header.php")?>
<main>
                  <!-- FULLSLIDER -->
                  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                     <ol class="carousel-indicators">
                       <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                       <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                       <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner" role="listbox">
                       <!-- Slide One - Set the background image for this slide in the line below -->
                       <div class="carousel-item active" style="background-image: url('images/crollcarousel.jpg')">
                         <div class="carousel-caption">
                           <h2>CROLL</h2>
                           <p>Apliques | IP20 | Orientables | CRI90 </p>
                         </div>
                       </div>
                       <!-- Slide Two - Set the background image for this slide in the line below -->
                       <div class="carousel-item" style="background-image: url('images/fedrocarousel.jpg')">
                         <div class="carousel-caption">
                           <h2>FEDRO</h2>
                           <p>Empotrables | IP20--IP44 | COB</p>
                         </div>
                       </div>
                       <!-- Slide Three - Set the background image for this slide in the line below -->
                       <div class="carousel-item" style="background-image: url('images/urocarousel.jpg')">
                         <div class="carousel-caption">
                           <h2>URO</h2>
                           <p> Proyectores | Exterior | IP68</p>
                         </div>
                       </div>
                     </div>

                   </div>
                   <!-- NPRODUC -->

                   <section class="nproducts">
                       <div class="titular">
                           <h3> NUESTRAS LINEAS </h3>

                       </div>
                         <div class="containergrid">
                         <div id="imgempotrables">
                             <div class="subtitulo">
                                 FEDRO
                             </div>
                             <div class="vermas">
                                 <span> <a href="productos.php">VER FEDRO! </a></span>
                             </div>
                         </div>

                         <div id="imgapliques">
                             <div class="subtitulo">
                                 CROLL
                             </div>
                             <div class="vermas">
                                 <span><a href="productos.php">VER CROLL! </a></span>
                             </div>
                         </div>
                         <div id="imgproyectores">
                             <div class="subtitulo">
                                 URO
                             </div>
                             <div class="vermas">
                                 <span><a href="productos.php">VER URO! </a></span>
                             </div>
                         </div>
                     </div>
                   </section>

                  <!-- NFILO  -->
                  <section class="container-fluid">
                      <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="textoindex padding15izq5der">
                                    <h3> POR QUE ELEGIR ILUMINACION LED COB? </h3>
                                    <h4> Iluminacion superadora </h4>
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                    <button type="button" name="VER MAS" class="btn btn-famarilloblanco"> ver mas </button>
                                </div>
                            </div>

                          <div class="col-12 col-md-6 imagendefondoindexcob">
                          </div>
                      </div>
                  </section>


                  <!-- NHISTORIAS  -->
                  <section class="container-fluid">
                      <div class="row">

                          <div class="col-12 col-md-6 imagendefondoindexlacoste"">
                         </div>
                          <div class="col-12 col-md-6">
                              <div class="textonindex padding15der5izq">
                                  <h3> LACOSTE </h3>
                                  <h4> Galerias pacifico </h4>
                                  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                                  <button type="button" name="VER MAS" class="btn btn-famarilloblanco"> ver mas </button>
                              </div>
                          </div>
                      </div>
                  </section>
</main>
<!-- Footer -->
<?php require_once("php/mod/footer.php") ?>
  </body>
</html>
