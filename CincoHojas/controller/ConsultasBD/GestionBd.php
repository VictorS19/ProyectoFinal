<?php
namespace app\consultasBd;

use app\conf\conexionBd;

    class GestionBd{

       

    public function mostrarReservas():array
    {
        require __DIR__.'/../appConf/conexionBd.php';
        $sql = 'select * from reservas';
       
        
        
        try {
            //extraer los datos de reservas
            $con = (new conexionBd)->getConexion();
            $stn = $con->prepare($sql);
            $stn->execute();
            $reservas = $stn->fetchAll(\PDO::FETCH_ASSOC);
            return $reservas;
           
        } catch (\PDOException $ex) {
            throw $ex;
        } finally {
            unset($stn);
            unset($con);
        }
       
    }

    public function eliminarReserva(string $idReserva)
    {
       
        $sql1 = 'delete from reservas where idreserva = :idres';
        
        
        try {
            //extraer los datos de reservas
            $con = (new conexionBd)->getConexion();
            $stn = $con->prepare($sql1);
            $stn->bindValue(":idres", $idReserva);
            $stn->execute();

           
        } catch (\PDOException $ex) {
            throw $ex;
        } finally {
            unset($stn);
            unset($con);
        }
       
    }
}