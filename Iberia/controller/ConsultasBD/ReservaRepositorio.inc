<?php

namespace app\iberia\repositorio;

use ConexionBd;
use DateTime;

class ReservaRepositorio
{

    public function reservarAsiento(string $codigo, string $fecha, string $fila,int $valorNuevo)
    {
        $sql = 'UPDATE vuelos set '.$fila.' = '.$fila.' + :valorNuevo , libres = (libres - 1)
        where codigo = :codigo and  fecha = :fecha';


        require_once __DIR__ . '/../../core/conexionBd.inc';
        
        try {
            $con = (new \ConexionBd())->getConexion();
            $stn = $con->prepare($sql);
            $stn->bindValue(":valorNuevo", $valorNuevo);
            $stn->bindValue(":codigo", $codigo);
            $stn->bindValue(":fecha", $fecha);
            $stn->execute();
            

           
           
        } catch (\PDOException $ex) {
            throw $ex;
        } finally {
            unset($stn);
            unset($con);
        }
    }
}