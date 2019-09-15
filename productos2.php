<?php
$pageTitle = "Idea COB - Armá tu producto";

require_once 'php/config/config.php';
require_once 'php/models/aperturaModel.php';
require_once 'php/models/tdecolorModel.php';
require_once 'php/models/marcoModel.php';

$aperturas = traerAperturas($pdo);
$tdecolor = traerTdecolor($pdo);
$marco = traerMarco($pdo);
?>
<?php require_once("partials/head.php")?>
<?php require_once("partials/header.php"); ?>
<main>
  <!-- FULLSLIDER -->
  <!-- FILTROS -->
  <div class="container-fluid containerproducto">
    <div class="row" id="headercarro" >
      <h4> / ARMÁ TU LUMINARIA </h4
        >
      </div>
      <form>
        <div class="form-group row d-flex justify-content-center">
          <label for="inputEmail3" class="row subtituloproducto">
            <h5 class="subtituloppal"> Potencia </h5>
            <h6> Lorem ipsum lorem ipsum </h6>
          </label>
          <div class="col-12">
            <div class="form-check row justify-content-center">
              <div class="btn">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                <label class="form-check-label" for="gridRadios1">
                  <div class="card card-producto">
                    <img src="images/fedromini32.jpg" class="card-img-top" alt="...">
                    <table class="table ">

                      <tbody>
                        <tr>
                          <div class="subtitulocards">
                            <h5>FEDRO 3.2W </h5>
                          </div>
                          <tr>
                            <th scope="row">Potencia</th>
                            <td>Mark</td>
                          </tr>
                          <tr>
                            <th scope="row">Dimensión</th>
                            <td>Jacob</td>

                          </tr>
                          <tr>
                            <th scope="row">Flujo </th>
                            <td>Larry</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                  </label>
                </div>
                <div class="btn">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                  <label class="form-check-label" for="gridRadios1">
                    <div class="card card-producto">
                      <img src="images/fedromini7.jpg" class="card-img-top" alt="...">
                      <table class="table ">

                        <tbody>
                          <tr>
                            <div class="subtitulocards">
                              <h5>FEDRO 3.2W </h5>
                            </div>
                            <tr>
                              <th scope="row">Potencia</th>
                              <td>Mark</td>
                            </tr>
                            <tr>
                              <th scope="row">Dimensión</th>
                              <td>Jacob</td>

                            </tr>
                            <tr>
                              <th scope="row">Flujo </th>
                              <td>Larry</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>

                    </label>
                  </div>

                  <div class="btn">
                    <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                    <label class="form-check-label" for="gridRadios1">
                      <div class="card card-producto">
                        <img src="images/fedrosmall7.jpg" class="card-img-top" alt="...">
                        <table class="table ">

                          <tbody>
                            <tr>
                              <div class="subtitulocards">
                                <h5>FEDRO 3.2W </h5>
                              </div>
                              <tr>
                                <th scope="row">Potencia</th>
                                <td>Mark</td>
                              </tr>
                              <tr>
                                <th scope="row">Dimensión</th>
                                <td>Jacob</td>

                              </tr>
                              <tr>
                                <th scope="row">Flujo </th>
                                <td>Larry</td>
                              </tr>
                            </tbody>
                          </table>
                        </div>

                      </label>
                    </div>
                    <div class="btn">
                      <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                      <label class="form-check-label" for="gridRadios1">
                        <div class="card card-producto">
                          <img src="images/fedrosmall13.jpg" class="card-img-top" alt="...">
                          <table class="table ">

                            <tbody>
                              <tr>
                                <div class="subtitulocards">
                                  <h5>FEDRO 3.2W </h5>
                                </div>
                                <tr>
                                  <th scope="row">Potencia</th>
                                  <td>Mark</td>
                                </tr>
                                <tr>
                                  <th scope="row">Dimensión</th>
                                  <td>Jacob</td>

                                </tr>
                                <tr>
                                  <th scope="row">Flujo </th>
                                  <td>Larry</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>

                        </label>
                      </div>

                      <div class="btn">
                        <input class="form-check-input" type="radio"  value="option1">
                        <label class="form-check-label" for="gridRadios1">
                          <div class="card card-producto">
                            <img src="images/fedro18.jpg" class="card-img-top" alt="...">
                            <table class="table ">

                              <tbody>
                                <tr>
                                  <div class="subtitulocards">
                                    <h5>FEDRO 3.2W </h5>
                                  </div>
                                  <tr>
                                    <th scope="row">Potencia</th>
                                    <td>Mark</td>
                                  </tr>
                                  <tr>
                                    <th scope="row">Dimensión</th>
                                    <td>Jacob</td>

                                  </tr>
                                  <tr>
                                    <th scope="row">Flujo </th>
                                    <td>Larry</td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>

                          </label>
                        </div>
                        <div class="btn">
                          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                          <label class="form-check-label" for="gridRadios1">
                            <div class="card card-producto">
                              <img src="images/fedro334.jpg" class="card-img-top" alt="...">
                              <table class="table">

                                <tbody>
                                  <tr>
                                    <div class="subtitulocards">
                                      <h5>FEDRO 3.2W </h5>
                                    </div>
                                    <tr>
                                      <th scope="row">Potencia</th>
                                      <td>Mark</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">Dimensión</th>
                                      <td>Jacob</td>

                                    </tr>
                                    <tr>
                                      <th scope="row">Flujo </th>
                                      <td>Larry</td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>

                            </label>
                          </div>


                        </div>
                      </div>
                    </div>
                  </form>

                  <form>
                    <div class="form-group row d-flex justify-content-center">
                      <label for="inputEmail3" class="row subtituloproducto">
                        <h5 class="subtituloppal"> Angulo de apertura </h5>
                        <h6> Seleccionar el angulo de apertura  </h6>
                      </label>
                      <div class="col-12">
                        <div class="form-check row d-flex justify-content-center">

                          <?php foreach ($aperturas as $apertura) : ?>
                            <div class="btn">
                              <input class="form-check-input" type="radio" name="apertura" id="apertura_id_<?php echo $apertura['id'] ?>" value="<?php echo $apertura['id'] ?>">
                              <label class="form-check-label" for="apertura_id_<?php echo $apertura['id'] ?>">
                                <div class="card card-producto">
                                  <img src="<?php echo APERTURAS_IMG_PATH . $apertura['imagen'] ?>" class="card-img-top" alt="...">
                                  <table class="table">
                                    <tr>
                                      <div class="subtitulocards">
                                        <h5><?php echo $apertura['nombre'] ?> </h5>
                                      </div>
                                      <tr>
                                        <th scope="row">Ángulo</th>
                                        <td> <?php echo $apertura['angulo'] ?>º </td>
                                      </tr>
                                      <tr>
                                        <th scope="row"> Flujo aprox </th>
                                        <td> 2700 </td>
                                      </tr>
                                    </table>
                                  </div>
                                </label>
                              </div>
                            <?php endforeach; ?>
                          </div>
                        </div>
                      </div>
                    </form>

                    <form>
                      <div class="form-group row d-flex justify-content-center">
                        <label for="inputEmail3" class="row subtituloproducto">
                          <h5 class="subtituloppal"> Temperatura de color </h5>
                          <h6> Seleccionar la temperatura de color  </h6>
                        </label>
                        <div class="col-12">
                          <div class="form-check row d-flex justify-content-center">
                              <?php foreach ($tdecolor as $tcolor) : ?>
                            <div class="btn">
                              <input class="form-check-input" type="radio" name="tdecolor" id="gridRadios1<?php echo $tdecolor['id'] ?>" value="<?php echo $tdecolor['id'] ?>">
                              <label class="form-check-label" for="gridRadios1<?php echo $tdecolor['id'] ?>">
                                <div class="card card-producto">
                                  <img src="<?php echo TDECOLOR_IMG_PATH . $tcolor['imagen'] ?>" class="card-img-top" alt="...">
                                  <table class="table ">
                                    <tbody>
                                      <tr>
                                        <div class="subtitulocards">
                                          <h5><?php echo $tcolor['unidad'] ?>  </h5>
                                        </div>
                                        <tr>
                                          <th scope="row"> Temperatura aprox </th>
                                          <td> <?php echo $tcolor['temperatura'] ?> </td>
                                        </tr>


                                      </tbody>
                                    </table>
                                  </div>

                                </label>
                              </div>
                                <?php endforeach; ?>
                                </div>


                              </div>
                            </div>
                          </form>


                          <form>
                            <div class="form-group row d-flex justify-content-center">
                              <label for="inputEmail3" class="row subtituloproducto">
                                <h5 class="subtituloppal"> MARCOS </h5>
                                <h6> Seleccionar el Marco </h6>
                              </label>
                              <div class="col-12">
                                <div class="form-check row d-flex justify-content-center">
                                    <?php foreach ($marco as $mar) : ?>
                                  <div class="btn">
                                    <input class="form-check-input" type="radio" name="marco" id="gridRadios1<?php echo $mar['id'] ?>" value="<?php echo $mar['id'] ?>">
                                    <label class="form-check-label" for="gridRadios1<?php echo $mar['id'] ?>">
                                      <div class="card card-producto">
                                        <img src="<?php echo MARCO_IMG_PATH . $mar['imagen'] ?>" class="card-img-top" alt="...">
                                        <table class="table ">
                                          <tbody>
                                            <tr>
                                              <div class="subtitulocards">
                                                <h5><?php echo $mar['nombre'] ?>  </h5>
                                              </div>
                                              <tr>
                                                <th scope="row"> Dimensión </th>
                                                <td> <?php echo $mar['dimension'] ?> </td>
                                              </tr>


                                            </tbody>
                                          </table>
                                        </div>

                                      </label>
                                    </div>
                                      <?php endforeach; ?>
                                      </div>
                                      <button onclick="carrito.php" type="button" class="btn btn-famarilloblanco"> Agregar al carrito</button>
                                    </div>
                                  </div>
                                </form>
                                            </div>
                                          </main>
                                          <?php require_once 'partials/footer.php' ?>
