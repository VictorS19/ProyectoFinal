<?php

namespace app\controller;

use app\consultasBd\LoginBd;
class LoginController {


 
  public function login()
  {

    if(isset($_SESSION['datosSesion'])){
      unset($_SESSION['datosSesion']);
    }

    if (isset($_POST['loginOk'])) {
        $errorInput = false;
  
       
        $correo = $_POST['correoLog'];
        if(strlen($correo) < 3){ $errorInput = true ;}
        $pass = $_POST['passLog'];
        if(strlen($pass) < 6){ $errorInput = true ;}
        
  
        if($errorInput){
          $_SESSION['errorLog'] = "Rellene correctamente todos los campos para continuar";
        }else{
          if(isset($_SESSION['errorLog'])){unset($_SESSION['errorLog']);}
          
          require_once __DIR__.'./../ConsultasBD/LoginBd.php';
          $datosUsr = (new LoginBd)->validar($correo);

          if(!empty($datosUsr) && /*password_verify($pass, $datosUsr['pass'])*/$pass == $datosUsr['pass']){
            $_SESSION['datosSesion'] = [$datosUsr['correo'],$datosUsr['pass'],$datosUsr['nombre']];
            header('Location: ../../index.php');//TODO verificar ruta
          }else{
            $_SESSION['errorLog'] = "Usuario o contraseña incorrectos";
          }
          

        }
  
      }
    
  }
}
 
