<?php $tittle = "Tienda Babuino - productos"?>
<!DOCTYPE html>
<html lang="es">
<?php require_once("partials/head.php")?>
<body>
    <?php require_once("partials/header.php"); ?>

            <!-- FULLSLIDER -->
                      <div class="container-fluid" id="containerproducto">
                        <div class="row">
                          <div class="col-12 col-xl-6">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                              <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                              </ol>
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img class="d-block w-100" src="images/carousel.jpeg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="images/carousel1.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block w-100" src="images/carousel2.jpeg" alt="Third slide">
                                </div>
                              </div>
                              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only"></span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only"></span>
                              </a>
                            </div>

                          </div>
                          <div class="col-12 col-xl-6">
                            <div class="textoproducto">
                                <div class="precioytitulo">
                                    <div class="titulo">
                                        <h3> Icons </h3>
                                        <h4> 5 cubos | 3 colores </h4>
                                    </div>
                                    <div class="" id="precioproducto">
                                        <h3> $200 </h3>
                                        <span class="float-right">
                                          <a data-toggle="tooltip" data-placement="top" title="Share"><i class="fas fa-share-alt mr-3"></i></a>
                                          <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist"><i class="fas fa-heart"></i></a>
                                        </span>
                                    </div>


                                </div>
                                <div class="descripcionprod">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                                </div>
                                <div class="row">
                                    <div class="col">
                                                <!-- Default unchecked -->
                                        <form class="form" action="php/funciones/funciones.php" method="post">
                                            <div class="titulo">
                                                <h4> Elegí los colores </h4>
                                            </div>
                                          <div class="inline" action="index.html" method="post" id="checkcolores">
                                              <label class="btn active hidden"id="btngris" aria-pressed="true">
                                                <input type="checkbox" name="options" id="rosa">
                                              </label>
                                                <label class="btn active hidden"id="btnrosa" aria-pressed="true">
                                                  <input type="checkbox" name="options" id="rosa">
                                                </label>
                                                <label class="btn active hidden"id="btnrojo" aria-pressed="true">
                                                  <input type="checkbox" name="options" id="rosa">
                                                </label>
                                                <label class="btn black hidden" id="btnama" aria-pressed="true">
                                                  <input type="checkbox" name="options" id="violeta">
                                                </label>
                                                <label class="btn active hidden" id="btnver" aria-pressed="true" id="azul">
                                                  <input type="checkbox" name="options">
                                                </label>
                                                <label class="btn active hidden"id="btnazul" aria-pressed="true">
                                                  <input type="checkbox" name="options" id="negro">
                                                </label>
                                            </div>
                                          <div class="titulo">
                                            <h4> Elegí la tematica </h4>
                                          </div>
                                        <!-- Default unchecked -->

                                          <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                            <option selected> Elegí la temática</option>
                                            <option value="1"> Planetas </option>
                                            <option value="2"> Figuras  </option>
                                            <option value="3"> Animales </option>
                                            <option value="4"> Emoticones </option>
                                          </select>
                                          <button type="submit" class="btn btn-dark" id="botoncarrito"> IR AL CARRITO! </button>

                                        </form>
                                    </div>
                                      </div>


                          </div>

        </div>
        </div>
        </div>
<!-- Footer -->
<?php require_once("partials/footer.php") ?>
</body>

<script src="jsgallery.js">  </script>
</html>
