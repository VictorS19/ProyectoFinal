<?php
namespace app\consultasBd;

use app\conf\conexionBd;

    class ReservaBd{

        

    public function getUltReserva(string $dni,string $fHoy):array
    {
        
        $sql3 = 'select * from reservas where dniusuarios = :dni and fecha >= :fhoy';

        require __DIR__.'/../appConf/conexionBd.php';
        
        
        try {
            //extraer los datos de la ultima reseeva realizada por el usuario
            $con = (new conexionBd)->getConexion();
            $stn = $con->prepare($sql3);
            $stn->bindValue(":dni", $dni);
            $stn->bindValue(":fhoy", $fHoy);
            $stn->execute();
            $reserva = $stn->fetchAll(\PDO::FETCH_ASSOC);

            if(empty($reserva)){
                return [];
            }else{
                return $reserva;
            }
            
            
        } catch (\PDOException $ex) {
            throw $ex;
        } finally {
            unset($stn);
            unset($con);
        }
    }

    public function mostrarHoras(string $fecha):array
    {
       
        $sql = 'select *  from reservas where fecha = :fecha order by hora';
        
        
        
        try {
            //extraer los datos de reservas con fecha coincidente
            $con = (new conexionBd)->getConexion();
            $stn = $con->prepare($sql);
            $stn->bindValue(":fecha", $fecha);
            $stn->execute();
            $reservas = $stn->fetchAll(\PDO::FETCH_ASSOC);

            if(empty($reservas)){
                return [];
            }else{
                return $reservas;
            }
            
           
        } catch (\PDOException $ex) {
            throw $ex;
        } finally {
            unset($stn);
            unset($con);
        }
       

    }

    public function reservar(string $dniUser,string $idmesa,string $comensales,string $fecha,string $hora)
    {
       
        $sql1 = 'insert into reservas (dniusuarios, idmesas, comensales, fecha, hora) values (:dni,:mesa,:comensales,:fecha,:hora)';
        
        
        
        try {
            //insertar los datos en la tabla reservas
            $con = (new conexionBd)->getConexion();
            $stn = $con->prepare($sql1);
            $stn->bindValue(":dni", $dniUser);
            $stn->bindValue(":mesa", $idmesa);
            $stn->bindValue(":comensales", $comensales);
            $stn->bindValue(":fecha", $fecha);
            $stn->bindValue(":hora", $hora);
            $stn->execute();            
            
           
        } catch (\PDOException $ex) {
            throw $ex;
        } finally {
            unset($stn);
            unset($con);
        }
       
        
    }

   
       

   
}