<?php

namespace app\iberia\controlador;

use app\iberia\repositorio\LoginRepositorio;


class LoginController
{
 
  public function login()
  {

    if(isset($_SESSION['datosSesion'])){
      unset($_SESSION['datosSesion']);
    }

    if (isset($_POST['irRegistro'])) {
      header('Location: index.php?ctl=registrar');
      
    }

    if (isset($_POST['loginOk'])) {
        $errorInput = false;
  
       
        $correo = $_POST['correoLog'];
        if(strlen($correo) < 3){ $errorInput = true ;}
        $pass = $_POST['passLog'];
        if(strlen($pass) < 3){ $errorInput = true ;}
        
  
        if($errorInput){
          $_SESSION['errorLog'] = 1;
        }else{
          unset($_SESSION['errorLog']);
          require_once __DIR__ . '/../Repositorio/LoginRepositorio.inc';
          //comparar pass haseada para el login: password_verify($pass, $passHashed);
          $datosUsr =  (new LoginRepositorio())->validar($correo);

          if(!empty($datosUsr) && password_verify($pass, $datosUsr['pwd'])){
            $_SESSION['datosSesion'] = [$datosUsr['eCorreo'],$datosUsr['pwd'],$datosUsr['nombre']];
            header('Location: index.php?ctl=inicio');
          }else{
            $_SESSION['errorLog'] = 1;
          }
          
          
  
        }
  
      }
    
    require __DIR__ . '/../../app/plantillas/codigoLogin.php';
  }

 
}