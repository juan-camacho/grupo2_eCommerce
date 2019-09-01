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
        <div class="row">
          <div class="col">
            <h3>  <?= $_SESSION['user']['name'] . ' ' . $_SESSION['user']['lastname'] ?> </h3>
            <h4> Buenos Aires, Argentina </h4>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"> Datos personales </a>
          <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false"> Ordenes </a>
          <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false"> Wishlist </a>
        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
          <ul>
            <li>
              <h5> Nombre </h5>
              <h6> Florencia Agustina Sanchez </h6>
            </li>
            <li>
              <h5> Edad </h5>
              <h6> 27 </h6>
            </li>
            <li>
              <h5> Mail </h5>
              <h6> fagustinasanchez@gmail.com </h6>
            </li>
            <li>
              <h5> Algo </h5>
              <h6> fagustinasanchez@gmail.com </h6>
            </li>
          </ul>
         </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
      </div>

    </div>


  </main>

  <!-- Footer -->
  <?php require_once("partials/footer.php") ?>
</body>
</html>
