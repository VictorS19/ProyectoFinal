<?php
 
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
      if(strlen($nombre) < 3){ $errorInput = true ;}
      $apellidos = $_POST['apellidos'];
      if(strlen($apellidos) < 3){ $errorInput = true ;}
      $dni = $_POST['dni'];
      if(strlen($dni) < 3){ $errorInput = true ;}
      $fechaNac = $_POST['fechaNac'];
      if(strlen($fechaNac) < 3){ $errorInput = true ;}
      $correo = $_POST['correo'];
      if(strlen($correo) < 3){ $errorInput = true ;}
      $pass = $_POST['pass'];
      if(strlen($pass) < 3){ $errorInput = true ;}
      $pass2 = $_POST['pass2'];
      if($pass != $pass2){ $errorInput = true ;}

      if($errorInput){
        $_SESSION['errorReg'] = "Rellene correctamente todos los campos para continuar";
      }else{

        if(isset($_SESSION['errorReg'])){unset($_SESSION['errorReg']);}
      
        require_once '/../ConsultasBD/RegistroUsuarioBd.php';
        //comparar pass haseada para el login: password_verify($pass, $passHashed);
        $registro = (new RegistroUsuarioBd)->registrarBd(strtoupper($dni),$nombre,$apellidos,$fechaNac,$correo, password_hash($pass,PASSWORD_DEFAULT));
        $_SESSION['datosSesion'] = [$correo,$pass,$nombre];
        header('Location: ../../index.php');//TODO verificar ruta

      }

    }
  }
}
 
