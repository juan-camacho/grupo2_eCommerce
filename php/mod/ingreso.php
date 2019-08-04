<?php $tittle = "Tienda Babuino - Ingresar" ?>
<div class="formulario_ap">
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
