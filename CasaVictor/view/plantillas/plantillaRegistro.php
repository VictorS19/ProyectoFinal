<!DOCTYPE html>
<html>

<head>
    <title>Casa Victor</title>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../estilos/index.css">
    <script src="https://kit.fontawesome.com/4344516574.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="bodyLoginReg">

    <div class="container mt-5 col-6">

        <form action="" method="post" class="form formV">
            <h2>!Registrate en Casa Victor!</h2>

            <label class="form-label">Nombre: <input type="text" class="form-text" name="nombre" require></label><br>
            <label class="form-label">Apellidos: <input type="text" class="form-text" name="apellidos" require></label><br>
            <label class="form-label">DNI: <input type="text" class="form-text" name="dni"  require></label><br>
            <label class="form-label">Fecha de nacimiento: <input type="date" name="fechaNac"  require></label><br>
            <label class="form-label">Correo: <input type="email" class="form-text" name="correo" require></label><br>
            <label class="form-label">Contraseña: <input type="password" class="form-text" name="pass" require></label><br>
            <label class="form-label">Repetir contraseña: <input type="password" class="form-text" name="pass2"  require></label><br>

            <input type="submit" value="Registrarse" class="btn btn-primary" name="registroOk">
            <a href="./plantillaLogin.php" class="btn btn-secondary">Ir al Login</a><br>

            

        </form>
        <?php if(isset($_SESSION['errorLog'])){
                echo "<span class='alert alert-danger'>Error al registrar el usuario</span>";
        } ?>
    </div>


</body>

</html>