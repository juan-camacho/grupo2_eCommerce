<header>
    <nav class="navbar fixed-top navbar-expand-lg nav-dark">
        <a class="navbar-brand" href="index.php"><img src="images/logo_led_cob.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""><i class="fas fa-bars letrablanca"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php" >HOME</a>
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
              <?php if (!empty($_SESSION['active'])){ ?>
              <li class="nav-item">
                <a class="nav-link" href="perfil.php" title="usuario"><i class="far fa-user-circle" aria-hidden="true"></i><strong> <?= $_SESSION['user']['name'] . ' ' . $_SESSION['user']['lastname'] ?> </strong> </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="carrito.php"><i class="fa fa-shopping-cart" aria-hidden="true" title="Carrito"></i></a>
              </li>
                <li class="nav-item">
              <a class="nav-link" href="salirusuario.php"><i class="fas fa-power-off" aria-hidden="true" title="Salir"></i> </a>
                </li>
              <?php } else { ?>
                <li class="nav-item">
                  <a class="nav-link" href="ingreso.php">INGRESA</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="register.php">REGISTRATE</a>
                </li>
            <?php }; ?>
            </ul>
        </div>
    </nav>
</header>
