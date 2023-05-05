<?php

namespace app\iberia\controlador;

use app\iberia\repositorio\RegistroUsuarioRepositorio;


class RegistroController
{
 
  public function registrar()
  {

    if(isset($_SESSION['datosSesion'])){
      unset($_SESSION['datosSesion']);
    }

    if (isset($_POST['irLogin'])) {
      header('Location: index.php?ctl=login');
      
    }

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
        $_SESSION['error'] = 1;
      }else{
        unset($_SESSION['error']);
        require_once __DIR__ . '/../Repositorio/RegistroUsuarioRepositorio.inc';
        //comparar pass haseada para el login: password_verify($pass, $passHashed);
        $registro =  (new RegistroUsuarioRepositorio())->registrar($correo, password_hash($pass,PASSWORD_DEFAULT),$nombre,$apellidos,$dni,$fechaNac);
        $_SESSION['datosSesion'] = [$correo,$pass,$nombre];
        header('Location: index.php?ctl=inicio');

      }

    }
    require __DIR__ . '/../../app/plantillas/codigoRegistro.php';
  }

 
}