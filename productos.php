<?php $tittle = "Tienda Babuino - productos"?>
<!DOCTYPE html>
<html lang="es">
<?php require_once("php/mod/head.php")?>
  <body>
    <?php require_once("php/mod/header.php"); ?>
              <main>
                      <!-- FULLSLIDER -->
                      <div class="fullslider"  id="fsproductos" >>
                          <div class="divtitulo">
                              <h4> Babuino SHOP </h4>
                              <h1> LA </br> TIENDA </h1>
                          </div>
                      </div>
                <!-- FILTROS -->
                <div class="container-fluid" id="containerproductos">
                    <div class="row" id="columnafiltros">
                        <div class="col-12 col-md-4 col-lg-2">
                            <div class="">
                                <h4> Filtrar </h4>
                            </div>
                            <div class="accordion" id="categoriasdeproducto">
                                <div class="widget">
                                  <div class="" id="filtro_cat">

                                    <button class="botonfiltros" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="filtro_cat">
                                        Categorias
                                      </button>
                                  </div>

                                  <div id="collapseOne" class="collapse" aria-labelledby="headingOne">
                                    <div class="card-body">
                                        <div class="widget-body">
                                            <ul>
                                                <li> Icons </li>
                                                <li> Numbers </li>
                                                <li> Letters </li>
                                                </ul>
                                        </div>
                                      </div>
                                    </div>
                              </div>

                              <div class="widget">
                                <div class="" id="filtro_cat">
                                  <button class="botonfiltros" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="filtro_cat">
                                      Cantidad
                                    </button>
                                </div>

                                <div id="collapseTwo" class="collapse" aria-labelledby="headingOne">
                                  <div class="card-body">
                                      <div class="widget-body">
                                          <input type="range" class="custom-range" id="customRange1" step="5" min="5" max="15">
                                      </div>
                                    </div>
                                  </div>
                            </div>



                              <div class="widget">
                                <div class="" id="filtro_precio">
                                  <button class="botonfiltros" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="filtro_precio">
                                      Colores
                                    </button>
                                </div>

                                <div class="collapse" id="collapseThree" aria-labelledby="headingOne">
                                  <div class="widget-body" id="colores">
                                      <div class="custom-control custom-checkbox" id="check">
                                            <input type="checkbox" class="custom-control-input" id="defaultCheck1">
                                            <label class="custom-control-label" for="defaultCheck1">1</label>
                                          </div>

                                          <!-- Default inline 2-->
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultCheck2">
                                            <label class="custom-control-label" for="defaultCheck2">2</label>
                                          </div>

                                          <!-- Default inline 3-->
                                          <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="defaultCheck3">
                                            <label class="custom-control-label" for="defaultCheck3">3</label>
                                          </div>
                                    </div>
                                  </div>
                                </div>

                                <div class="widget">
                                  <div class="" id="filtro_precio">
                                    <button class="botonfiltros" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="filtro_precio">
                                        Precio
                                      </button>
                                  </div>

                                  <div class="collapse" id="collapseFive" aria-labelledby="headingOne">
                                      <div class="card-body">
                                          <div class="widget-body">
                                              <ul>
                                                  <li> Rango1 </li>
                                                  <li> Rango2 </li>
                                                  <li> Rango3 </li>
                                                  </ul>
                                          </div>
                                        </div>
                                    </div>
                            </div>
</div>
</div>


                        <!--PRODUCTOS-->
                        <div class="col-12 col-md-8 col-lg-10">

                            <div class="card-columns">
                                <div class="card text-center">
                                    <div class="img_producto">
                                        <img src="images/isabela.jpeg" class="card-img-top" alt="...">
                                    </div>
                                     <div class="txt-producto">
                                        <span class="categoria"> Icons </span>
                                        <span class="cantycolores"> 5 CUBOS - 3 COLORES </span>
                                        <div class="cardproductotexto">
                                            <p> Set de 5 cubos de maderas con 3 caras pintadas al agua. 100% hipoalergenico.</p>
                                    </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="precioybotones">
                                            <span class="float-left" id="precio">$200</span>
                                            <span class="float-right">
                                              <a data-toggle="tooltip" data-placement="top" title="Share"><i class="fas fa-share-alt mr-3"></i></a>
                                              <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist"><i class="fas fa-heart"></i></a>
                                            </span>
                                        </div>
                                        <span class="float-center">
                                            <div class="btn btn-dark btn-primary" id="botonproductos">
                                            <a href="producto.php">Personalizar</a>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card text-center">
                                    <div class="img_producto">
                                        <img src="images/isabela.jpeg" class="card-img-top" alt="...">
                                    </div>
                                     <div class="txt-producto">
                                        <span class="categoria"> Icons </span>
                                        <span class="cantycolores"> 5 CUBOS - 3 COLORES </span>
                                        <div class="cardproductotexto">
                                            <p> Set de 5 cubos de maderas con 3 caras pintadas al agua. 100% hipoalergenico.</p>
                                    </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="precioybotones">
                                            <span class="float-left" id="precio">$200</span>
                                            <span class="float-right">
                                              <a data-toggle="tooltip" data-placement="top" title="Share"><i class="fas fa-share-alt mr-3"></i></a>
                                              <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist"><i class="fas fa-heart"></i></a>
                                            </span>
                                        </div>
                                        <span class="float-center">
                                            <div class="btn btn-dark btn-primary" id="botonproductos">
                                            <a href="producto.php">Personalizar</a>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card text-center">
                                    <div class="images/isabela.jpeg">
                                        <img src="images/isabela.jpeg" class="card-img-top" alt="...">
                                    </div>
                                     <div class="txt-producto">
                                        <span class="categoria"> Icons </span>
                                        <span class="cantycolores"> 5 CUBOS - 3 COLORES </span>
                                        <div class="cardproductotexto">
                                            <p> Set de 5 cubos de maderas con 3 caras pintadas al agua. 100% hipoalergenico.</p>
                                    </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="precioybotones">
                                            <span class="float-left" id="precio">$200</span>
                                            <span class="float-right">
                                              <a data-toggle="tooltip" data-placement="top" title="Share"><i class="fas fa-share-alt mr-3"></i></a>
                                              <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist"><i class="fas fa-heart"></i></a>
                                            </span>
                                        </div>
                                        <span class="float-center">
                                            <div class="btn btn-dark btn-primary" id="botonproductos">
                                            <a href="producto.php">Personalizar</a>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card text-center">
                                    <div class="img_producto">
                                        <img src="images/isabela.jpeg" class="card-img-top" alt="...">
                                    </div>
                                     <div class="txt-producto">
                                        <span class="categoria"> Icons </span>
                                        <span class="cantycolores"> 5 CUBOS - 3 COLORES </span>
                                        <div class="cardproductotexto">
                                            <p> Set de 5 cubos de maderas con 3 caras pintadas al agua. 100% hipoalergenico.</p>
                                    </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="precioybotones">
                                            <span class="float-left" id="precio">$200</span>
                                            <span class="float-right">
                                              <a data-toggle="tooltip" data-placement="top" title="Share"><i class="fas fa-share-alt mr-3"></i></a>
                                              <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist"><i class="fas fa-heart"></i></a>
                                            </span>
                                        </div>
                                        <span class="float-center">
                                            <div class="btn btn-dark btn-primary" id="botonproductos">
                                            <a href="producto.php">Personalizar</a>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card text-center">
                                    <div class="img_producto">
                                        <img src="images/isabela.jpeg" class="card-img-top" alt="...">
                                    </div>
                                     <div class="txt-producto">
                                        <span class="categoria"> Icons </span>
                                        <span class="cantycolores"> 5 CUBOS - 3 COLORES </span>
                                        <div class="cardproductotexto">
                                            <p> Set de 5 cubos de maderas con 3 caras pintadas al agua. 100% hipoalergenico.</p>
                                    </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="precioybotones">
                                            <span class="float-left" id="precio">$200</span>
                                            <span class="float-right">
                                              <a data-toggle="tooltip" data-placement="top" title="Share"><i class="fas fa-share-alt mr-3"></i></a>
                                              <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist"><i class="fas fa-heart"></i></a>
                                            </span>
                                        </div>
                                        <span class="float-center">
                                            <div class="btn btn-dark btn-primary" id="botonproductos">
                                            <a href="producto.php">Personalizar</a>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card text-center">
                                    <div class="img_producto">
                                        <img src="images/isabela.jpeg" class="card-img-top" alt="...">
                                    </div>
                                     <div class="txt-producto">
                                        <span class="categoria"> Icons </span>
                                        <span class="cantycolores"> 5 CUBOS - 3 COLORES </span>
                                        <div class="cardproductotexto">
                                            <p> Set de 5 cubos de maderas con 3 caras pintadas al agua. 100% hipoalergenico.</p>
                                    </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="precioybotones">
                                            <span class="float-left" id="precio">$200</span>
                                            <span class="float-right">
                                              <a data-toggle="tooltip" data-placement="top" title="Share"><i class="fas fa-share-alt mr-3"></i></a>
                                              <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist"><i class="fas fa-heart"></i></a>
                                            </span>
                                        </div>
                                        <span class="float-center">
                                            <div class="btn btn-dark btn-primary" id="botonproductos">
                                            <a href="producto.php">Personalizar</a>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card text-center">
                                    <div class="img_producto">
                                        <img src="images/isabela.jpeg" class="card-img-top" alt="...">
                                    </div>
                                     <div class="txt-producto">
                                        <span class="categoria"> Icons </span>
                                        <span class="cantycolores"> 5 CUBOS - 3 COLORES </span>
                                        <div class="cardproductotexto">
                                            <p> Set de 5 cubos de maderas con 3 caras pintadas al agua. 100% hipoalergenico.</p>
                                    </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="precioybotones">
                                            <span class="float-left" id="precio">$200</span>
                                            <span class="float-right">
                                              <a data-toggle="tooltip" data-placement="top" title="Share"><i class="fas fa-share-alt mr-3"></i></a>
                                              <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist"><i class="fas fa-heart"></i></a>
                                            </span>
                                        </div>
                                        <span class="float-center">
                                            <div class="btn btn-dark btn-primary" id="botonproductos">
                                            <a href="producto.php">Personalizar</a>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card text-center">
                                    <div class="img_producto">
                                        <img src="images/isabela.jpeg" class="card-img-top" alt="...">
                                    </div>
                                     <div class="txt-producto">
                                        <span class="categoria"> Icons </span>
                                        <span class="cantycolores"> 5 CUBOS - 3 COLORES </span>
                                        <div class="cardproductotexto">
                                            <p> Set de 5 cubos de maderas con 3 caras pintadas al agua. 100% hipoalergenico.</p>
                                    </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="precioybotones">
                                            <span class="float-left" id="precio">$200</span>
                                            <span class="float-right">
                                              <a data-toggle="tooltip" data-placement="top" title="Share"><i class="fas fa-share-alt mr-3"></i></a>
                                              <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist"><i class="fas fa-heart"></i></a>
                                            </span>
                                        </div>
                                        <span class="float-center">
                                            <div class="btn btn-dark btn-primary" id="botonproductos">
                                            <a href="producto.php">Personalizar</a>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card text-center">
                                    <div class="img_producto">
                                        <img src="images/isabela.jpeg" class="card-img-top" alt="...">
                                    </div>
                                     <div class="txt-producto">
                                        <span class="categoria"> Icons </span>
                                        <span class="cantycolores"> 5 CUBOS - 3 COLORES </span>
                                        <div class="cardproductotexto">
                                            <p> Set de 5 cubos de maderas con 3 caras pintadas al agua. 100% hipoalergenico.</p>
                                    </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="precioybotones">
                                            <span class="float-left" id="precio">$200</span>
                                            <span class="float-right">
                                              <a data-toggle="tooltip" data-placement="top" title="Share"><i class="fas fa-share-alt mr-3"></i></a>
                                              <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist"><i class="fas fa-heart"></i></a>
                                            </span>
                                        </div>
                                        <span class="float-center">
                                            <div class="btn btn-dark btn-primary" id="botonproductos">
                                            <a href="producto.php">Personalizar</a>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card text-center">
                                    <div class="img_producto">
                                        <img src="images/isabela.jpeg" class="card-img-top" alt="...">
                                    </div>
                                     <div class="txt-producto">
                                        <span class="categoria"> Icons </span>
                                        <span class="cantycolores"> 5 CUBOS - 3 COLORES </span>
                                        <div class="cardproductotexto">
                                            <p> Set de 5 cubos de maderas con 3 caras pintadas al agua. 100% hipoalergenico.</p>
                                    </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="precioybotones">
                                            <span class="float-left" id="precio">$200</span>
                                            <span class="float-right">
                                              <a data-toggle="tooltip" data-placement="top" title="Share"><i class="fas fa-share-alt mr-3"></i></a>
                                              <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist"><i class="fas fa-heart"></i></a>
                                            </span>
                                        </div>
                                        <span class="float-center">
                                            <div class="btn btn-dark btn-primary" id="botonproductos">
                                            <a href="producto.php">Personalizar</a>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card text-center">
                                    <div class="img_producto">
                                        <img src="images/isabela.jpeg" class="card-img-top" alt="...">
                                    </div>
                                     <div class="txt-producto">
                                        <span class="categoria"> Icons </span>
                                        <span class="cantycolores"> 5 CUBOS - 3 COLORES </span>
                                        <div class="cardproductotexto">
                                            <p> Set de 5 cubos de maderas con 3 caras pintadas al agua. 100% hipoalergenico.</p>
                                    </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="precioybotones">
                                            <span class="float-left" id="precio">$200</span>
                                            <span class="float-right">
                                              <a data-toggle="tooltip" data-placement="top" title="Share"><i class="fas fa-share-alt mr-3"></i></a>
                                              <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist"><i class="fas fa-heart"></i></a>
                                            </span>
                                        </div>
                                        <span class="float-center">
                                            <div class="btn btn-dark btn-primary" id="botonproductos">
                                            <a href="producto.php">Personalizar</a>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="card text-center">
                                    <div class="img_producto">
                                        <img src="images/isabela.jpeg" class="card-img-top" alt="...">
                                    </div>
                                     <div class="txt-producto">
                                        <span class="categoria"> Icons </span>
                                        <span class="cantycolores"> 5 CUBOS - 3 COLORES </span>
                                        <div class="cardproductotexto">
                                            <p> Set de 5 cubos de maderas con 3 caras pintadas al agua. 100% hipoalergenico.</p>
                                    </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="precioybotones">
                                            <span class="float-left" id="precio">$200</span>
                                            <span class="float-right">
                                              <a data-toggle="tooltip" data-placement="top" title="Share"><i class="fas fa-share-alt mr-3"></i></a>
                                              <a class="active" data-toggle="tooltip" data-placement="top" title="Added to Wishlist"><i class="fas fa-heart"></i></a>
                                            </span>
                                        </div>
                                        <span class="float-center">
                                            <div class="btn btn-dark btn-primary" id="botonproductos">
                                            <a href="producto.php">Personalizar</a>
                                        </span>
                                        </div>
                                    </div>
                                </div>

                </div>

               <script type="text/javascript">
               $(document).ready(function() {
    $('.range-field').each(function() {
    $(this).find('.value').html('50');
    });
});

               </script>


              </main>
<?php require_once("php/mod/footer.php") ?>
      </div>
  </body>
</html>
