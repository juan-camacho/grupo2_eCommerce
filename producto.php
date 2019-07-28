<?php $tittle = "Tienda Babuino - productos"?>
<!DOCTYPE html>
<html lang="es">
<?php require_once("php/mod/head.php")?>
<body>
    <?php require_once("php/mod/header.php"); ?>
        <div class="containerppal">

            <!-- FULLSLIDER -->

            <div class="containerproducto">
                <div class="galeriaproducto">
                    <div class="feature">
                        <figure class="featured-item image-holder r-3-2 transition"></figure>
                    </div>

                    <div class="gallery-wrapper">
                        <div class="gallery">
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2 active transition"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2"></figure>
                            </div>
                            <div class="item-wrapper">
                                <figure class="gallery-item image-holder r-3-2"></figure>
                            </div>

                        </div>
                    </div>

                    <div class="controls">
                        <button class="move-btn left">&larr;</button>
                        <button class="move-btn right">&rarr;</button>
                    </div>

                </div>
                <div class="textoproducto">
                    <div class="precioytitulo">
                        <div class="titulo">
                            <h3> Icons </h3>
                            <h4> 5 cubos | 3 colores </h4>
                        </div>
                        <div class="precio">
                            <h3> $200 </h3>
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
                            <button class="btn_form" type="button" name="button">Ir al carrito!</button>
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
