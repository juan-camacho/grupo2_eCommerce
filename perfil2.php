<?php $tittle = " Perfil Del Usuario" ?>
<?php
session_start();

?>
<!DOCTYPE html>
<html lang="es">
<?php require_once("partials/head.php") ?>
<body>
  <?php require_once("partials/header.php") ?>
  <!-- Perfil  -->
  <main>

    <div class="hero purpink d-flex align-items-center">
      <div class="container">
        <div class="col">
          <div class="row">
              <h3>  <?= $_SESSION['user']['name'] . ' ' . $_SESSION['user']['lastname'] ?> </h3>
          </div>
          <div class="row">
               <h4> Buenos Aires, Argentina </h4>
          </div>
        </div>
      </div>
    </div>
    <div class="container perfil">
      <nav>
        <div class="nav nav-tabs d-flex justify-content-between" id="nav-tab" role="tablist">
          <a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"> Datos personales </a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> Ordenes </a>
          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"> Wishlist </a>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <form>
            <div class="col">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Password</label>
                  <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                </div>
              </div>
              <div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
              </div>
              <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Password</label>
                  <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                </div>
              </div>

              <button type="submit" class="btn btn-famarilloblanco">Sign in</button>
            </div>

          </form>

          </form>
         </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <div class="row titulocarrito">
                <div class="col text-left">
                    <h5> Tus seleccionados </h5>
                </div>
            </div>
            <div class="cart-item row">
                <div class="col d-flex justify-content-between">
                    <div class="col-12 col-lg-6">
                        <div class="row">
                            <div class="col-12 col-md-4 text-center fotocarrito d-flex align-items-center">
                                <img src="images/marcoc.jpg" alt="">
                            </div>
                            <div class="col-12 col-md-8">
                                <h5> 06.71.1222.03 </h5>
                                <h6> Fedro C recedido lorem ipsum lorem ipsum</h6>
                                <a href="" class="descargaft"> Descargar ficha técnica</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 text-center d-flex align-items-center  justify-content-between">
                            <div class="col-4 text-center">
                                <h5> Precio </h5>
                                <h6> $200</h6>
                            </div>
                            <div class="col-4 text-center">
                                <h5> Cantidad </h5>
                                <h6> $200</h6>
                            </div>
                            <div class="col-4 text-center">
                                <h5> Total </h5>
                                <h6> $200</h6>
                            </div>

                    </div>
                </div>
            </div>
            <div class="cart-item row">
                <div class="col d-flex justify-content-between">
                    <div class="col-12 col-lg-6">
                        <div class="row">
                            <div class="col-12 col-md-4 text-center fotocarrito d-flex align-items-center">
                                <img src="images/marcoc.jpg" alt="">
                            </div>
                            <div class="col-12 col-md-8">
                                <h5> 06.71.1222.03 </h5>
                                <h6> Fedro C recedido lorem ipsum lorem ipsum</h6>
                                <a href="" class="descargaft"> Descargar ficha técnica</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 text-center d-flex align-items-center  justify-content-between">
                            <div class="col-4 text-center">
                                <h5> Precio </h5>
                                <h6> $200</h6>
                            </div>
                            <div class="col-4 text-center">
                                <h5> Cantidad </h5>
                                <h6> $200</h6>
                            </div>
                            <div class="col-4 text-center">
                                <h5> Total </h5>
                                <h6> $200</h6>
                            </div>

                    </div>
                </div>
            </div>
                <div class="cart-item row">
                    <div class="col d-flex justify-content-between">
                        <div class="col-12 col-lg-6">
                            <div class="row">
                                <div class="col-12 col-md-4 text-center fotocarrito d-flex align-items-center">
                                    <img src="images/marcoc.jpg" alt="">
                                </div>
                                <div class="col-12 col-md-8">
                                    <h5> 06.71.1222.03 </h5>
                                    <h6> Fedro C recedido lorem ipsum lorem ipsum</h6>
                                    <a href="" class="descargaft"> Descargar ficha técnica</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 text-center d-flex align-items-center  justify-content-between">
                                <div class="col-4 text-center">
                                    <h5> Precio </h5>
                                    <h6> $200</h6>
                                </div>
                                <div class="col-4 text-center">
                                    <h5> Cantidad </h5>
                                    <h6> $200</h6>
                                </div>
                                <div class="col-4 text-center">
                                    <h5> Total </h5>
                                    <h6> $200</h6>
                                </div>

                        </div>
                    </div>
                </div>
    </div>

        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
      </div>

    </div>


  </main>

  <!-- Footer -->
  <?php require_once("partials/footer.php") ?>
</body>
</html>
