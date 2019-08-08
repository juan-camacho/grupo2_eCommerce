<?php $tittle = "Tienda Babuino - productos"?>
<!DOCTYPE html>
<html lang="es">
<?php require_once("php/mod/head.php")?>
<body>
    <?php require_once("php/mod/header.php"); ?>

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
                                <span class="sr-only">Previous</span>
                              </a>
                              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
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
                                <div class="tablaelecciones">
                                    <div class="tituloyaleatorio">
                                        <div class="elegiizq">
                                            <h4> Elegí los colores </h4>
                                        </div>

                                        <!-- Default unchecked -->
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="defaultUnchecked" name="defaultExampleRadios">
                                            <label class="custom-control-label" for="defaultUnchecked"> Aleatorio! </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="colores">
                                    <div class="color" id="color1">
                                        <div class="select">
                                            <select>
                                                <option value="0">Cara 1:</option>
                                                <option value="1">Blanco</option>
                                                <option value="2">Rosa</option>
                                                <option value="3">Turquesa</option>
                                                <option value="4">Verde agua</option>
                                                <option value="5">Gris</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="color" id="color1">
                                        <div class="select">
                                            <select>
                                                <option value="0" style:"blanco">Cara 2</option>
                                                <option value="1">Blanco</option>
                                                <option value="2">Rosa</option>
                                                <option value="3">Turquesa</option>
                                                <option value="4">Verde agua</option>
                                                <option value="5">Gris</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="color" id="color1">
                                        <div class="select">
                                            <select>
                                                <option value="0">Cara 3</option>
                                                <option value="1">Blanco</option>
                                                <option value="2">Rosa</option>
                                                <option value="3">Turquesa</option>
                                                <option value="4">Verde agua</option>
                                                <option value="5">Gris</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="tablaelecciones">
                                    <div class="tituloyaleatorio">
                                        <div class="elegiizq">
                                            <h4> Elegí la tematica </h4>
                                        </div>

                                        <!-- Default unchecked -->
                                        <div class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" id="defaultUnchecked2" name="defaultExampleRadios">
                                            <label class="custom-control-label" for="defaultUnchecked2"> Elegir por mi! </label>
                                        </div>
                                    </div>
                                    <div class="color" id="color1">
                                        <div class="select">
                                            <select>
                                                <option value="0">Cosmos</option>
                                                <option value="1">Autos</option>
                                                <option value="2">Naturaleza</option>
                                                <option value="3">Matematicas</option>
                                                <option value="4">Verde agua</option>
                                                <option value="5">Gris</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="comprar">
                                        <button class="btn btn-dark" type="button" name="button">Ir al carrito!</button>
                                    </div>
                                </div>
                            </div>
                          </div>




            </div>
        </div>
<!-- Footer -->
<?php require_once("php/mod/footer.php") ?>
</body>

<script src="jsgallery.js">  </script>
</html>
