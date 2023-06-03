<?php
 namespace app\consultasBd;
 use app\conf\conexionBd;

class CartaBd{



    public function getMenu(string $nummenu):array
    {
       
        $sql = 'select * from platosmenus where idmenu = :nummenu';
       
        require __DIR__.'/../appConf/conexionBd.php';
        
        try {
            //extraer los datos de la tabla platosmenu para este menu
            $con = (new conexionBd())->getConexion();
            $stn = $con->prepare($sql);
            $stn->bindValue(":nummenu", $nummenu);
            $stn->execute();
            $datosMen = $stn->fetchAll(\PDO::FETCH_ASSOC);

           
                
                
        } catch (\PDOException $ex) {
            throw $ex;
        } finally {
            unset($stn);
            unset($con);
        }
       
        $cadenaPlatos = "";
        foreach ($datosMen as $value) {
            
            $cadenaPlatos .= $value["idplato"];
            $cadenaPlatos .= ",";
        }
        $cadenaPlatos = rtrim($cadenaPlatos,",");
        
        
        try {
            $sql1 = 'select * from platos where idplato in ('.$cadenaPlatos .' )';
            //extraer la informacion de los platos de la tabla platos
            $con = (new conexionBd())->getConexion();
            $stn = $con->prepare($sql1);
            $stn->execute();
            $platosMen = $stn->fetchAll(\PDO::FETCH_ASSOC);

            return $platosMen;
                
        } catch (\PDOException $ex) {
            throw $ex;
        } finally {
            unset($stn);
            unset($con);
        }
    }
}