<div class="modal dialog" tabindex="-1" role="dialog" id="registerModal">
<?php require_once("php/funciones/funciones.php"); ?>
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <h2>REGISTRO</h2>
           <form class="contenedor_ap" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
               <div class="input_contenedor_ap threed">
                   <input type="text" placeholder="Nombre" name="nombre" value="<?php echo htmlspecialchars($nombre);?>">
               </div>
                      <span class="error"> <?php echo $errornombre;?></span> <br>
               <div class="input_contenedor_ap threed">
                   <input type="text" placeholder="Apellido" name="apellido" value="<?php echo htmlspecialchars($apellido);?>">
               </div>
               <span class="error"> <?php echo $errorapellido;?></span> <br>
                <div class="input_contenedor_ap threed">
                    <i class="fas fa-envelope icon"></i>
                    <input type="email" placeholder="Email" name="email" value="<?php echo htmlspecialchars($email);?>">
                </div>
                <span class="error"> <?php echo $erroremail;?></span> <br>
                <div class="input_contenedor_ap threed">
                    <i class="fas fa-key icon"></i>
                    <input type="password" placeholder="Contraseña" name="password" >
                </div>
                <span class="error"> <?php echo $errorcontraseña;?></span> <br>
                <div class="input_contenedor_ap threed">
                    <i class="fas fa-key icon"></i>
                    <input type="password" placeholder="Repetir contraseña" name="password2" >
                </div>
                <span class="error"> <?php echo $errorcontraseña2;?></span><br>
                    <button class="btn btn-dark" type="submit" name="submit">Registrarme</button>
                    <div class="divformu">
                        <span>Ya estas registrado? </span> <a href="Ingreso.php" class="link"> Log in</a>
                    </div>
            </form>
        </div>
    </div>
</div>
