<?php

namespace app\iberia\repositorio;

use ConexionBd;
use DateTime;

class OcupacionRepositorio
{

    public function findVuelos(string $origen, string $destino, string $ida, string $vuelta = null): array
    {
        $sql = 'SELECT v.codigo as Codigo, origen as Origen, destino as Destino, salida as Salida, duracion as Duracion ,fecha as "Fecha ida", fila1,fila2,fila3,fila4,fila5,fila6,fila7,fila8,fila9,fila10,fila11,fila12,fila13,fila14,fila15,fila16,fila17,fila18,fila19,fila20 
        from vuelo as v inner join vuelos as vs on v.codigo = vs.codigo 
        where origen = :origen and destino = :destino and fecha = :ida and libres > 0';

        if (!is_null($vuelta)) {
            $sql2 = 'SELECT v.codigo as Codigo, origen as Origen, destino as Destino, salida as Salida, duracion as Duracion , fecha as "Fecha vuelta" , fila1,fila2,fila3,fila4,fila5,fila6,fila7,fila8,fila9,fila10,fila11,fila12,fila13,fila14,fila15,fila16,fila17,fila18,fila19,fila20 
            from vuelo as v inner join vuelos as vs on v.codigo = vs.codigo  
            where origen = :destino and destino = :origen and fecha = :vuelta and libres > 0';
        }

        require_once __DIR__ . '/../../core/conexionBd.inc';
        $vuelos = [];
        try {
            $con = (new \ConexionBd())->getConexion();
            $stn = $con->prepare($sql);
            $stn->bindValue(":origen", $origen);
            $stn->bindValue(":destino", $destino);
            $stn->bindValue(":ida", $ida);
            $stn->execute();
            $vuelos['ida'] = $stn->fetchAll(\PDO::FETCH_ASSOC);

            if (!is_null($vuelta)) {
                $con = (new \ConexionBd())->getConexion();
                $stn = $con->prepare($sql2);
                $stn->bindValue(":origen", $origen);
                $stn->bindValue(":destino", $destino);
                $stn->bindValue(":vuelta", $vuelta);
                $stn->execute();
                $vuelos['vuelta'] = $stn->fetchAll(\PDO::FETCH_ASSOC);
            }
            //var_dump($vuelos);
            return $vuelos;
        } catch (\PDOException $ex) {
            throw $ex;
        } finally {
            unset($stn);
            unset($con);
        }
    }
}
