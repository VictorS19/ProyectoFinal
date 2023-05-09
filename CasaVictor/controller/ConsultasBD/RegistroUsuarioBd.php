<?php



    public function registrarBd(string $dni,string $nombre,string $apellidos,string $fechaNac,string $correo, string $pass)
    {

       
        $sql1 = 'select dni from usuarios where upper(dni) = '.$dni;
        $sql2 = 'insert into usuarios values (:dni,:nombre,:apellidos,:fNac,:correo,:pass)';

        require_once '/../appConf/conexionBd.inc';
    
        try {
            //consultar si el dni del usuario ya existe
            $con = (new \ConexionBd())->getConexion();
            $stn = $con->prepare($sql1);
            $stn->execute();
            $result = $stn->fetchAll(\PDO::FETCH_ASSOC);
        } catch (\PDOException $ex) {
            throw $ex;
        } finally {
            unset($stn);
            unset($con);
        }

        if(empty($result[0])){


        

        try {
            //añadir a la tabla usuarios
            $con = (new \ConexionBd())->getConexion();
            $stn = $con->prepare($sql2);
            $stn->bindValue(":dni", $dni);
            $stn->bindValue(":nombre", $nombre);
            $stn->bindValue(":apellidos", $apellidos);     
            $stn->bindValue(":fNac", $fechaNac);
            $stn->bindValue(":correo", $correo);
            $stn->bindValue(":pass", $pass);
            $stn->execute();
           
        } catch (\PDOException $ex) {
            throw $ex;
        } finally {
            if(isset($_SESSION['errorReg'])){unset($_SESSION['errorReg']);}
            unset($stn);
            unset($con);
        }
    }else{
        $_SESSION['errorReg'] = "El usuario con dni: ".$dni." ya esta registrado en la base de datos";

    }
    }