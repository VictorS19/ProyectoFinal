<?php


class CartaBd{



    public function getMenu(string $nombreMenu):array
    {
       
        $sql = 'select * from menus where nombre = :nombre';
       
        require_once __DIR__.'..\appConf\conexionBd.inc';
        
        try {
            //extraer los datos del usuario con correo coincidente
            $con = (new \ConexionBd())->getConexion();
            $stn = $con->prepare($sql);
            $stn->bindValue(":nombre", $nombreMenu);
            $stn->execute();
            $datosMen = $stn->fetchAll(\PDO::FETCH_ASSOC);

            if(!empty($datosUsuario)){
                $datos = $datosMen[0];
                return $datos; 
            }else{
                return [];
            }
           
        } catch (\PDOException $ex) {
            throw $ex;
        } finally {
            unset($stn);
            unset($con);
        }
       
    }
}