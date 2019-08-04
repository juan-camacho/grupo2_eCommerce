<header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.php"><img src="images/babuinologo.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""><i class="fas fa-cubes"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="home.php" >HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="productos.php">PRODUCTOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nosotros.php">NOSOTROS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faqs.php">FAQS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contacto.php">CONTACTO</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <button type="button" class= "btn btn-success" data-toggle="modal" data-target="#loginModal" href="ingreso.php">INGRESA</button>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">REGISTRATE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
            </li>
            </ul>
        </div>

    </nav>
    <div class="modal fade" tabindex="-1" role="dialog" id="loginModal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <form action="" class="formulario_ap">
               <h4>Ingresa</h4>
               <form class="" action="index.php" method="post">
                 <div class="contenedor_ap">
                    <div class="input_contenedor_ap threed">
                    <i class="fas fa-envelope icon"></i>
                    <input type="text" placeholder="Mail" required>
                    </div>
                    <div class="input_contenedor_ap threed">
                    <i class="fas fa-key icon"></i>
                    <input type="password" placeholder=" Contraseña" required>
                    </div>
                        <a href="perfil.php">
                            <button class="btn btn-dark" type="submit" name="button" value="s">Ingresa</button></a>
                        <label>
                            <input type="checkbox" checked="checked" name="recuerdo"> Recuerdame!
                        </label>
                        <span class="contraseña">Forgot <a href="proximo.php">password?</a></span>
                 </div>

             </form>
</div>
</div>
</header>
