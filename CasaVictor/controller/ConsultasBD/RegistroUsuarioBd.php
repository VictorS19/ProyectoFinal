<?php



    public function registrarBd(string $correo, string $pass,string $nombre,string $apellidos,string $dni,string $fechaNac)
    {

        //hacer dos consultas, con una verificamos que el dni no esta repetido (usuario ya registrado). Con la otra hacer el insert
        $sql1 = 'select dni from usuarios where dni = '.$dni;
        $sql2 = 'insert into usuarios values (:nombre,:apellidos,:dni,:fNac,:correo,:pass)';

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
            //añadir a la tabla pasajero
            $con = (new \ConexionBd())->getConexion();
            $stn = $con->prepare($sql3);
            $stn->bindValue(":nombre", $nombre);
            $stn->bindValue(":apellido", $apellidos);
            $stn->bindValue(":dni", $dni);
            $stn->bindValue(":idUsr", $idUsuario);
            $stn->bindValue(":fNac", $fechaNac);
            $stn->bindValue(":correo", $correo);
            $stn->bindValue(":pass", $pass);
            $stn->execute();
           
        } catch (\PDOException $ex) {
            throw $ex;
        } finally {
            unset($stn);
            unset($con);
        }
    }else{
        //TODO mostrar error en el registro

    }
    }