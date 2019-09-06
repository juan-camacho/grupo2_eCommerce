<?php $tittle = "IDEA COB - REGISTRO"?>
<?php
require_once 'php/forms/projectRegisterForm.php';
require_once 'php/models/projectModel.php';
$message = '';
if ($_REQUEST) {
    validateForm();
    if (isValid()) {
        if (!empty($_REQUEST)) {
            $sql = "INSERT INTO users (name, lastname, email, password) VALUES ( :name, :lastname, :email, :password)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':name', $_REQUEST['name']);
            $stmt->bindParam(':lastname', $_REQUEST['lastname']);
            $stmt->bindParam(':email', $_REQUEST['email']);
            $password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
            $stmt->bindParam(':password', $password);
            if ($stmt->execute()) {
              session_start();
              $sql = 'select * from users where email = :email limit 1';
              $stmt = $pdo->prepare($sql);
              $stmt->bindvalue('email', $_POST['email']);
              $stmt->execute();
              $user = $stmt->fetch(PDO::FETCH_ASSOC);
              $_SESSION['user'] = $user;
                header('location: registro-exitoso.php');
            } else {
                $message = 'El email es ya se encuentra registrado';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<?php require_once("partials/head.php")?>
<body>
    <?php require_once("partials/header.php")?>
    <main>
        <div class="containeringreso d-flex align-items-center bg-black">
            <form class="container formssmall" method="post">

                <h2 class="letrablanca">/ REGISTRO</h2>
                <?php if(!empty($message)): ?>
                    <p class="error"> <?= $message ?></p>
                <?php endif; ?>
                <div class="form-row">
                    <div class="form-control form-control-light threed threed-blanco  my-2">
                        <i class="fas fa-user icon" style="color: white"></i>
                        <input class="letrablanca" type="text" placeholder="Nombre" name="name" value"<?= old('name'); ?>">
                    </div>
                </div>
                <?php if (hasError('name')) : ?>
                    <span class="error"><?= getError('name') ?></span><br>
                <?php endif ?>

                <div class="form-row">
                    <div class="form-control form-control-light threed threed-blanco my-2">
                        <i class="fas fa-user icon"  style="color: white"></i>
                        <input class="letrablanca" type="text" placeholder="Apellido" name="lastname" value"<?= old('lastaname'); ?>">
                    </div>
                </div>
                <?php if (hasError('lastname')) : ?>
                    <span class="error"><?= getError('lastname') ?></span><br>
                <?php endif ?>

                <div class="form-row">
                    <div class="form-control form-control-light threed threed-blanco  my-2">
                        <i class="fas fa-envelope icon"  style="color: white"></i>
                        <input class="letrablanca" type="text" placeholder="Email" name="email" value"<?= old('email'); ?>">
                    </div>
                </div>
                <?php if (hasError('email')) : ?>
                    <span class="error"><?= getError('email') ?></span> <br>
                <?php endif ?>

                <div class="form-row">
                    <div class="form-control  form-control-light threed threed-blanco my-2">
                        <i class="fas fa-key icon"  style="color: white"></i>
                        <input class="letrablanca" type="password" placeholder="Contraseña" name="password">
                    </div>
                </div>
                <?php if (hasError('password')) : ?>
                    <span class="error"><?= getError('password') ?></span> <br>
                <?php endif ?>
                <div class="form-row">
                    <div class="form-control form-control-light threed threed-blanco  my-2">
                        <i class="fas fa-key icon"  style="color: white"></i>
                        <input class="letrablanca" type="password" placeholder="Repetir contraseña" name="password2">
                    </div>
                </div>
                <div class="form-row d-flex justify-content-center my-2">
                    <button class="btn btn-fnegro flex-grow-1" type="submit" value="submit">Registrarme</button>
                </div>
                <div class="form-row d-flex justify-content-center mb-1">
                    <label class="form-row d-flex justify-content-center my-2 letrablanca ">
                        <span>Ya estas registrado? </span> <a href="Ingreso.php" style="text-decoration: underline">  Log in</a>
                    </label>
                </div>
            </form>
        </div>
    </main>
    <!-- Footer -->
    <?php require_once("partials/footer.php") ?>
</body>
</html>
