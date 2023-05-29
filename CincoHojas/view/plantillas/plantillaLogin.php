<?php  
error_reporting(E_ALL);
use app\controller\LoginController;
require "../../controller/Controlador/LoginController.php";
(new LoginController)->login();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="shortcut icon" href="../images/LogoDef.JPG" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4344516574.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos/index.css">
</head>

<body class="bodyLoginReg">

    <div class="container mt-5 col-6">

        <form action="" method="post" class="form formV">
            <h2>¡Inicia sesión para reservar en Cinco Hojas!</h2>

            <label class="form-label">Correo: <input type="email" class="form-text" name="correoLog"
                    require></label><br>
            <label class="form-label">Contraseña: <input type="password" class="form-text" name="passLog"
                    require></label><br>

            <input type="submit" value="Login" class="btn btn-primary" name="loginOk">
            <a href="./plantillaRegistro.php" class="btn btn-secondary">!Regístrate!</a><br>

            

        </form>
        <?php if(isset($_SESSION['errorLog'])){
                echo "<span class='alert alert-danger'>".$_SESSION['errorLog']."</span>";
        } ?>
    </div>


</body>

</html>
