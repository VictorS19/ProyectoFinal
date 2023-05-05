<?php ob_start() ?>


<form action="" method="post">
        <h2>Inicia sesión en Viberia!</h2>
       
        <label>Correo: <input type="text" name="correoLog"  require></label><br>
        <label>Contraseña: <input type="password" name="passLog"  require></label><br>
        <input type="submit" value="Login" class="btnSubmit" name="loginOk">
    
        <input type="submit" value="Registrate!" class="btnSubmit2" name="irRegistro"><br>

        <?php if(isset($_SESSION['errorLog'])){
                echo "<span class='error'>Error al iniciar sesión</span>";
        } ?>

</form>



<?php $formLogin = ob_get_clean() ?>






<?php include 'plantillaLogin.php' ?>