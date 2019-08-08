
<div class="modal dialog" tabindex="-1" role="dialog" id="loginModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
           <h2>LOG IN</h2>
           <form class="contenedor_ap" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <div class="input_contenedor_ap threed">
                   <?php if(!empty($_POST['emailingreso'])) : ?>
                     <i class="fas fa-envelope icon" style="color: #33CC99"></i>
                     <input type="email" placeholder="Email" name="emailingreso" value="<?php echo htmlspecialchars($emailingreso);?>">
                   <?php else : ?>
                    <i class="fas fa-envelope icon"></i>
                    <input type="email" placeholder="Email" name="emailingreso" >
                  <?php endif; ?>
                </div>
                <span class="error"> <?php if (!empty($erroremailingreso)) {echo $erroremailingreso;} ?></span> <br>
                <div class="input_contenedor_ap threed">
                    <i class="fas fa-key icon"></i>
                    <input type="password" placeholder="Contraseña" name="passwordingreso">
                </div>
                <span class="error"> <?php if (!empty($errorpasswordingreso)) {echo $errorpasswordingreso;} ?></span> <br>
                <div class="divformu" id="olvidastecontra">
                    <span>Olvidaste tu contrasena?</span>
                </div>
                    <button class="btn btn-dark" type="submit" name="submit2">Ingresa</button>
                <div class="divformu" id="recuerdame">
                    <label>
                        <input type="checkbox" checked="checked" name="recuerdame"> Recuerdame!
                    </label>
                </div>
            </form>
        </div>
    </div>
</div>
