<div class="modal dialog" tabindex="-1" role="dialog" id="registerModal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <h2>REGISTRO</h2>
           <form class="contenedor_ap" action="php/funciones/funciones.php" method="post">
               <div class="input_contenedor_ap threed">
                   <input type="text" placeholder="Nombre" name="name" required>
               </div>
               <div class="input_contenedor_ap threed">
                   <input type="text" placeholder="Apellido" name="name" required>
               </div>
                <div class="input_contenedor_ap threed">
                    <i class="fas fa-envelope icon"></i>
                    <input type="text" placeholder="Email" name="email" required>
                </div>
                <div class="input_contenedor_ap threed">
                    <i class="fas fa-key icon"></i>
                    <input type="password" placeholder="Contraseña" name="password" required>
                </div>
                <div class="input_contenedor_ap threed">
                    <i class="fas fa-key icon"></i>
                    <input type="password" placeholder="Repetir contraseña" name="passwordrepetida" required>
                </div>
                    <button class="btn btn-dark" type="submit" name="submit"  data-toggle="modal" data-target="#loginModalok">Registrarme</button>
                    <div class="divformu">
                        <span>Ya estas registrado? </span> <span>Log in</span>
                    </div>
            </form>
        </div>
    </div>
</div>
