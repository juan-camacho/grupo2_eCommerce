<?php $tittle = "IDEA COB - Home"?>
<?php
session_start();
require_once("php/funciones.php");
if ($_POST) {
    //$pdo = new PDO('mysql:host=localhost;dbname=ecommerce', 'root', '',);
    $pdo = get_connection();
    $sql = 'select * from users where email = :email limit 1';
    $stmt = $pdo->prepare($sql);
    $stmt->bindvalue('email', $_POST['email']);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    //var_dump($_REQUEST);
    //var_dump($_POST);
    //var_dump($_SESSION); die;
    if ($user) {
        if (PASSWORD_VERIFY($_POST['password'], $user['password'])) {
            $_SESSION['user'] = $user;
            header('location: perfil.php');
            //die ('Existe!');
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<?php require_once("php/mod/head.php")?>
<body>
    <?php require_once("php/mod/header.php")?>
    <main>
        <div class="containeringreso d-flex align-items-center limaazul">

            <form class="container formssmall" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <h2>/ LOG IN</h2>
                <div class="form-row mb-3">
                    <div class="form-control threed">
                        <i class="fas fa-envelope icon"></i>
                        <input type="text" placeholder="Correo" name="email" >
                    </div>
                </div>
                <?php if ($_POST): ?>
                    <span class="error">Usuario no encontrado</span>
                <?php endif ?>
                <div class="form-row mb-3">
                    <div class="form-control threed">
                        <i class="fas fa-key icon"></i>
                        <input type="password" placeholder="Contraseña" name="password">
                    </div>
                </div>
                <span class="error"></span>
                <div class="form-row d-flex justify-content-end mb-1">
                    <span>Olvidaste tu contraseña?</span>
                </div>
                <div class="form-row d-flex justify-content-center mb-1">
                    <button class="btn btn-famarilloblanco flex-grow-1" type="submit" name="submit">Ingresa</button>
                </div>
                <div class="form-row d-flex justify-content-center mb-1 f700">
                    <label>
                        <input type="checkbox" checked="checked" name="recuerdame"> Recuerdame!
                    </label>
                </div>
            </form>
        </div>
    </main>
    <!-- Footer -->
    <?php require_once("php/mod/footer.php") ?>
</body>
</html>
