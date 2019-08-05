
<div class="modal dialog" tabindex="-1" role="dialog" id="loginModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
           <h2>LOG IN</h2>
           <form class="contenedor_ap" action="index.php" method="post">
                <div class="input_contenedor_ap threed">
                    <i class="fas fa-envelope icon"></i>
                    <input type="text" placeholder="Mail" required>
                </div>
                <div class="input_contenedor_ap threed">
                    <i class="fas fa-key icon"></i>
                    <input type="password" placeholder="Contraseña" required>
                </div>
                <div class="divformu" id="olvidastecontra">
                    <span>Olvidaste tu contrasena?</span>
                </div>
                <div class="divformu" id="recuerdame">
                    <label>
                        <input type="checkbox" checked="checked" name="recuerdo"> Recuerdame!
                    </label>
                </div>
                    <button class="btn btn-dark" type="submit" name="button" value="s" data-toggle="modal" data-target="#loginModalok">Ingresa</button>

            </form>
        </div>
    </div>
</div>

<?php require_once("usuariook.php")?>
