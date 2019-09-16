<?php
if($_SESSION['rol'] = 1){
  ?>
<nav class="col-12 col-md-3 col-xl-2 bg-dark mt-3 vh-100 pt-5 navAdmin px-0">
  <h4 class="letrablanca p-3"> Hola Admin! </h4>
    <div id="accordion">
  <div class="card letrablanca">
    <div class="card-header" id="headingOne">
        <a class="d-flex row mb-0" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <div class="col-2">
              <i class="fas fa-edit letrablanca"></i>
          </div>
          <div class="col-10 pl-0 titleHeaderAdmin">
            Páginas
          </div>
        </a>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        <ul>
          <li class="py-1 pl-3"> <a href="editHome.php">Home </a> </li>
          <li  class="py-1 pl-3"> <a href="editNosotros.php"> Nosotros </a> </li>
          <li  class="py-1 pl-3"> <a href="editContacto.php"> Contacto </a> </li>
          <li  class="py-1 pl-3"> <a href="editFAQS.php"> FAQ'S </a> </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="card letrablanca">
    <div class="card-header" id="headingTwo">
        <a class="d-flex row mb-0" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <div class="col-2">
              <i class="fas fa-bars letrablanca"></i>
          </div>
          <div class="col-10 pl-0 titleHeaderAdmin">
            Productos
          </div>
        </a>
    </div>

    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div id="accordion2">
              <div class="card letrablanca">
                <div class="card-header subtitleheaderAdmin" id="heading3">
                    <a class="d-flex row mb-0" data-toggle="collapse" data-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                      <div class="col-2">
                      </div>
                      <div class="col-10 pl-0 letrablanca d-flex justify-content-between">
                          <div class="">
                              T de Color
                          </div>
                          <i class="fas fa-caret-down"> </i>

                      </div>
                    </a>
                </div>

                <div id="collapse3" class="collapse" aria-labelledby="heading3" data-parent="#accordion3">
                    <ul>
                      <li class="py-1 pl-4 f100"> <a href="tdecolorAgregar.php"> Agregar </a></li>
                      <li  class="py-1 pl-4 f100"> <a href="tdecolorBorrar.php"> Borrar </a> </li>
                      <li  class="py-1 pl-4 f100"> <a href="tdecolorEditar.php"> Editar </a> </li>
                      <li  class="py-1 pl-4 f100"> <a href="tdecolorListar.php"> Listar </a> </li>
                    </ul>
                </div>
              </div>


          </div>
          <div id="accordion3">
              <div class="card letrablanca">
                <div class="card-header subtitleheaderAdmin" id="heading4">
                    <a class="d-flex row mb-0" data-toggle="collapse" data-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                      <div class="col-2">
                      </div>
                      <div class="col-10 pl-0 letrablanca d-flex justify-content-between">
                          <div class="">
                              Aperturas
                          </div>
                          <i class="fas fa-caret-down"> </i>

                      </div>
                    </a>
                </div>

                <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion3">
                    <ul>
                      <li class="py-1 pl-4 f100"> <a href="aperturasAgregar.php"> Agregar </a></li>
                      <li  class="py-1 pl-4 f100"> <a href="aperturasBorrar.php"> Borrar </a> </li>
                      <li  class="py-1 pl-4 f100"> <a href="aperturasEditar.php"> Editar </a> </li>
                      <li  class="py-1 pl-4 f100"> <a href="aperturasListar.php"> Listar </a> </li>
                    </ul>
                </div>
              </div>


          </div>
          <div id="accordion5">
              <div class="card letrablanca">
                <div class="card-header subtitleheaderAdmin" id="heading6">
                    <a class="d-flex row mb-0" data-toggle="collapse" data-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
                      <div class="col-2">
                      </div>
                      <div class="col-10 pl-0 letrablanca d-flex justify-content-between">
                          <div class="">
                              Nucleos
                          </div>
                          <i class="fas fa-caret-down"> </i>

                      </div>
                    </a>
                </div>

                <div id="collapse6" class="collapse" aria-labelledby="heading6" data-parent="#accordion5">
                    <ul>
                      <li class="py-1 pl-4 f100"> <a href="nucleosAgregar.php"> Agregar </a></li>
                      <li  class="py-1 pl-4 f100"> <a href="nucleosBorrar.php"> Borrar </a> </li>
                      <li  class="py-1 pl-4 f100"> <a href="nucleosEditar.php"> Editar </a> </li>
                      <li  class="py-1 pl-4 f100"> <a href="nucleosListar.php"> Listar </a> </li>
                    </ul>
                </div>
              </div>
          </div>
          <div id="accordion6">
              <div class="card letrablanca">
                <div class="card-header subtitleheaderAdmin" id="heading7">
                    <a class="d-flex row mb-0" data-toggle="collapse" data-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
                      <div class="col-2">
                      </div>
                      <div class="col-10 pl-0 letrablanca d-flex justify-content-between">
                          <div class="">
                              Marcos
                          </div>
                          <i class="fas fa-caret-down"> </i>

                      </div>
                    </a>
                </div>
                <div id="collapse7" class="collapse" aria-labelledby="heading7" data-parent="#accordion6">
                    <ul>
                      <li class="py-1 pl-4 f100"> <a href="marcoAgregar.php"> Agregar </a></li>
                      <li  class="py-1 pl-4 f100"> <a href="marcoBorrar.php"> Borrar </a> </li>
                      <li  class="py-1 pl-4 f100"> <a href="marcoEditar.php"> Editar </a> </li>
                      <li  class="py-1 pl-4 f100"> <a href="marcoListar.php"> Listar </a> </li>
                    </ul>
                </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</nav>
<?php } ?>
