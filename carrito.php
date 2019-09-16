<?php $tittle = "Carrito";
session_start();?>
<?php require_once("partials/head.php")?>
<body>
    <?php require_once("partials/header.php"); ?>
    <main>
        <!-- FULLSLIDER -->
        <!-- FILTROS -->
        <div class="container containerproducto">
            <div class="row" id="headercarro" >
                <h4> / CARRITO </h4
                    >
                </div>
                <div class="row align-items-start">
                    <div class="col-lg-8">
                        <div class="row titulocarrito">
                            <div class="col text-left">
                                <h5> Tus seleccionados </h5>
                            </div>
                        </div>
                        <div class="cart-item row justify-content-center">
                            <div class="row align-items-center">
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
                                <div class="col-12 col-lg-6">
                                    <div class="row align-items-center detalle">
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
                            <a class="cart-item close">
                                <i class="fas fa-times"></i>
                            </a>
                        </div>
                        <div class="cart-item row justify-content-center">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6">
                                    <div class="row">
                                        <div class="col-12 col-lg-4 text-center fotocarrito d-flex align-items-center">
                                            <img src="images/marcoc.jpg" alt="">
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <h5> 06.71.1222.03 </h5>
                                            <h6> Fedro C recedido lorem ipsum lorem ipsum</h6>
                                            <a href="" class="descargaft"> Descargar ficha técnica</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="row align-items-center  detalle">
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
                            <a class="cart-item close">
                                <i class="fas fa-times"></i>
                            </a>
                        </div>
                        <div class="cart-item row justify-content-center">
                            <div class="row align-items-center">
                                <div class="col-12 col-md-6">
                                    <div class="row">
                                        <div class="col-12 col-lg-4 text-center fotocarrito d-flex align-items-center">
                                            <img src="images/marcoc.jpg" alt="">
                                        </div>
                                        <div class="col-12 col-md-8">
                                            <h5> 06.71.1222.03 </h5>
                                            <h6> Fedro C recedido lorem ipsum lorem ipsum</h6>
                                            <a href="" class="descargaft"> Descargar ficha técnica</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="row align-items-center  detalle">
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
                            <a class="cart-item close">
                                <i class="fas fa-times"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="row titulocarrito">
                            <div class="col text-left">
                                <h5> Carrito </h5>
                            </div>
                        </div>
                        <div class="card d-flex justify-content-center cart-resume">
                            <div class="card-body">
                                <ul>
                                    <li  class="d-flex justify-content-between">
                                        <div>
                                            Subtotal
                                        </div>
                                        <div class="">
                                            $180
                                        </div>
                                    </li>
                                    <li class="d-flex justify-content-between">
                                        <div class="">
                                            Envio
                                        </div>
                                        <div class="">
                                            Gratis
                                        </div>
                                    </li>
                                    <li class="total d-flex justify-content-between">
                                        <div class="">
                                            Total
                                        </div>
                                        <div class="">
                                            Gratis
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <button class="btn btn-famarilloblanco" type="submit" name="compracarrito"> COMPRAR </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once("partials/footer.php") ?>
    </main>
</body>
</html>
