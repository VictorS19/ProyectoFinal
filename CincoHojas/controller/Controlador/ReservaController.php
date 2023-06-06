<?php
 namespace app\controller;

 use app\consultasBd\ReservaBd;


 class ReservaController{



  public function reservar()
  {
    require_once __DIR__.'\..\ConsultasBD\ReservaBd.php';

    $ultReserva = (new ReservaBd)->getUltReserva($_SESSION['datosSesion'][3], date('Y-m-d'));
    if(!empty($ultReserva)){
      $_SESSION["ultReserva"] = $ultReserva;

    }

    if (isset($_POST['FechaOk'])) {

        $fecha = $_POST["fechaReserva"]; 
        $comensales = $_POST["numComensales"];

        $datosReservas = (new ReservaBd)->mostrarHoras($fecha);

        $horasDisponibles = ["14:00" => [],"15:00"=> [],"16:00"=> [],"21:00"=> [],"22:00"=> []];
        $horasCodigo = [];
          foreach ($datosReservas as $value) {
            array_push($horasDisponibles[$value["hora"]],$value["idmesas"]);
          }
          
          foreach ($horasDisponibles as $key => $value) {
            if(count($value) < 6 ){
              array_push($horasCodigo,$key);
            }

          }

        $_SESSION["datosReserva"] = [$fecha,$horasCodigo,$horasDisponibles, $comensales];
    }


    if (isset($_SESSION["datosReserva"]) && isset($_POST['ReservaOk'])) {
      
      $hora = $_POST["horaReserva"];
      if($hora != "ko"){

      
        $arrayHorasDisponibles = $_SESSION["datosReserva"][2];
        $arrayMesas = $arrayHorasDisponibles[$hora];
        $arrayMesas = array_diff([1,2,3,4,5,6],$arrayMesas);
        $mesa = 0;
          if(empty($arrayMesas)){
            $mesa = rand(1,6);
          }else{
            $aux = rand(0,count($arrayMesas)-1);
            $mesa = $arrayMesas[$aux];
          }
        
        (new ReservaBd)->reservar($_SESSION['datosSesion'][3],$mesa,$_SESSION['datosReserva'][3],$_SESSION['datosReserva'][0],$hora);
        unset($_SESSION["datosReserva"]);
        if(isset($_POST['errorReserva'])){unset($_POST['errorReserva']);}
        header('Location: ../../index.php');
      }else{ 
        
        $_POST['errorReserva'] = "Selecciona una hora válida";
      }
    }else if(isset($_POST['ReservaOk']) && !isset($_SESSION["datosReserva"])){
      $_POST['errorReserva'] = "Elige la hora y el numero de comensales primero";
    }

  }
}
 
