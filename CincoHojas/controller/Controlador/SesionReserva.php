<?php
 session_start();

 if(isset($_SESSION['datosSesion'])){
  header('Location: ../../view/plantillas/plantillaReserva.php');

  }else{

    header('Location: ../../view/plantillas/plantillaLogin.php');
  }