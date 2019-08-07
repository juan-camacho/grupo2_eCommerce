
<div class="modal dialog" tabindex="-1" role="dialog" id="loginModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
           <h2>LOG IN</h2>
           <form class="contenedor_ap" action="php/funciones/funciones.php" method="post">
                <div class="input_contenedor_ap threed">
                    <i class="fas fa-envelope icon"></i>
                    <input type="text" placeholder="Email" name="email" required>
                </div>
                <div class="input_contenedor_ap threed">
                    <i class="fas fa-key icon"></i>
                    <input type="password" placeholder="Contraseña" name="password" required>
                </div>
                <div class="divformu" id="olvidastecontra">
                    <span>Olvidaste tu contrasena?</span>
                </div>
                    <button class="btn btn-dark" type="submit" name="submit"  data-toggle="modal" data-target="#loginModalok">Ingresa</button>
                <div class="divformu" id="recuerdame">
                    <label>
                        <input type="checkbox" checked="checked" name="recuerdame"> Recuerdame!
                    </label>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once("usuariook.php")?>
