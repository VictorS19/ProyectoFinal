<?php
 namespace app\controller;
 session_start();
 use app\consultasBd\RegistroUsuarioBd;

 class RegistroController{



  public function registrar()
  {

    if(isset($_SESSION['datosSesion'])){
      unset($_SESSION['datosSesion']);
    }

      //coge la carpeta de comercio
    if (isset($_POST['registroOk'])) {
      $errorInput = false;

      $nombre = $_POST['nombre'];
      if(strlen($nombre) < 2){ $errorInput = true ;}
      $apellidos = $_POST['apellidos'];
      if(strlen($apellidos) < 2){ $errorInput = true ;}
      $dni = $_POST['dni'];
      if(strlen($dni) < 8 ){ $errorInput = true ;}
      $fechaNac = $_POST['fechaNac'];
      if(strlen($fechaNac) < 9){ $errorInput = true ;}
      $correo = $_POST['correo'];
      if(strlen($correo) < 3){ $errorInput = true ;}
      $pass = $_POST['pass'];
      if(strlen($pass) < 6){ $errorInput = true ;}
      $pass2 = $_POST['pass2'];
      if($pass != $pass2){ $errorInput = true ;}

      if($errorInput){
        $_POST['errorReg'] = "Rellene correctamente todos los campos para continuar";
      }else{

        if(isset($_POST['errorReg'])){unset($_POST['errorReg']);}
      
        require_once __DIR__.'\..\ConsultasBD\RegistroUsuarioBd.php';
        $registro = (new RegistroUsuarioBd)->registrarBd(strtoupper($dni),$nombre,$apellidos,$fechaNac,$correo, password_hash($pass,PASSWORD_DEFAULT));
        $_SESSION['datosSesion'] = [$correo,$pass,$nombre,$dni,0];
        header('Location: ../../index.php');

      }

    }
  }
}
 
