
<?php ob_start() ?>


<form action="" method="post">
        <h2>Registrate en Viberia!</h2>
        <label>Nombre: <input type="text" name="nombre"  require></label><br>
        <label>Apellidos: <input type="text" name="apellidos"  require></label><br>
        <label>DNI: <input type="text" name="dni"  require></label><br>
        <label>Fecha de nacimiento: <input type="date" name="fechaNac"  require></label><br>
        <label>Correo: <input type="text" name="correo"  require></label><br>
        <label>Contraseña: <input type="password" name="pass"  require></label><br>
        <label>Repetir contraseña: <input type="password" name="pass2"  require></label><br>
        <input type="submit" value="Registrarse" class="btnSubmit" name="registroOk">
    
        <input type="submit" value="Ir al Login" class="btnSubmit2" name="irLogin"><br>

        <?php if(isset($_SESSION['error'])){
                echo "<span class='error'>Error al registrar el usuario</span>";
        } ?>

</form>



<?php $formRegistro = ob_get_clean() ?>






<?php include 'plantillaRegistro.php' ?>