<?php

namespace app\iberia\repositorio;

use ConexionBd;
use DateTime;

class LoginRepositorio
{

    public function validar(string $correo):array
    {
       
        $sql = 'select * from usuario as u inner join pasajero  as p on u.idUsers = p.idUsers where eCorreo = :correo';
       
        require_once __DIR__ . '/../../core/conexionBd.inc';
        
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