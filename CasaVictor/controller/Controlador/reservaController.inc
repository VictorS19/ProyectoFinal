<?php

namespace app\iberia\controlador;


use app\iberia\repositorio\OcupacionRepositorio;
use app\iberia\repositorio\ReservaRepositorio;

class ReservaController
{
    public function inicio()
    {
        if (isset($_POST['buscarOk'])) {
            require_once __DIR__ . '/../Repositorio/OcupacionRepositorio.inc';
            $ocupacion =  (new OcupacionRepositorio())->findVuelos($_POST['salida2'], $_POST['destino2'], $_POST['ida2'],null);
            $_SESSION['ocupacion'] = $ocupacion;
            
        }
       

        if(isset($_POST['reservaOk']) && isset($_SESSION['ocupacion'])){
            $ocupacion =  $_SESSION['ocupacion'];
            $infoVuelo = $ocupacion['ida'][0];

            $fila = $_POST['fila'];
            $asiento = $_POST['asiento'];
           $claveArray = "fila".$fila;
 
            $asientoBinario = 2 ** ($asiento-1);


            if($infoVuelo[$claveArray] & $asientoBinario){
                $_SESSION['asientoOcupado'] = 1;
                
            }else{
                require_once __DIR__ . '/../Repositorio/ReservaRepositorio.inc';
            $error =  (new ReservaRepositorio())->reservarAsiento($infoVuelo['Codigo'], $infoVuelo['Fecha ida'], $claveArray,$asientoBinario); 
                unset($_SESSION['asientoOcupado']);
                
            }
        }
        require __DIR__ . '/../../app/plantillas/codigoReserva.php';
    }
}
