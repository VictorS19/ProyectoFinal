<?php

namespace app\consultasBd;

    class LoginBd{

    

    public function validar(string $correo):array
    {
       
        $sql = 'select * from usuarios where correo = :correo';
       
        require_once '../appConf/conexionBd.inc';
        
        try {
            //extraer los datos del usuario con correo coincidente
            $con = (new \ConexionBd())->getConexion();
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