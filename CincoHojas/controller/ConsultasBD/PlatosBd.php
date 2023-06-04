<?php
namespace app\consultasBd;

use app\conf\conexionBd;

    class PlatosBd{

        

    public function mostrar():array
    {
       
        $sql = 'select * from platos';
        require __DIR__.'/../appConf/conexionBd.php';
        
        
        try {
            //extraer los datos del usuario con correo coincidente
            $con = (new conexionBd)->getConexion();
            $stn = $con->prepare($sql);
            $stn->execute();
            $platos = $stn->fetchAll(\PDO::FETCH_ASSOC);
            return $platos;
           
        } catch (\PDOException $ex) {
            throw $ex;
        } finally {
            unset($stn);
            unset($con);
        }
       
    }
}