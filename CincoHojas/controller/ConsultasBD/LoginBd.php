<?php
namespace app\consultasBd;

use app\conf\conexionBd;

    class LoginBd{

        

    public function validar(string $correo):array
    {
       
        $sql = 'select * from usuarios where correo = :correo';
        require __DIR__.'/../appConf/conexionBd.php';
        
        
        try {
            //extraer los datos del usuario con correo coincidente
            $con = (new conexionBd)->getConexion();
            $stn = $con->prepare($sql);
            $stn->bindValue(":correo", $correo);
            $stn->execute();
            $datosUsuario = $stn->fetchAll(\PDO::FETCH_ASSOC);

            if(!empty($datosUsuario)){
                $datosUsuario = $datosUsuario[0];
                return $datosUsuario; 
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