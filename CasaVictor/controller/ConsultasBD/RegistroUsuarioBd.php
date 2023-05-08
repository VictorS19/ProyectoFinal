<?php



    public function registrarBd(string $correo, string $pass,string $nombre,string $apellidos,string $dni,string $fechaNac)
    {

        //hacer dos consultas, con una verificamos que el dni no esta repetido (usuario ya registrado). Con la otra hacer el insert
        $sql = 'insert into usuario values (:correo,:pass,:rol)';
        $sql2 = 'select dni from usuarios dni = '.$dni;
        $sql3 = 'insert into pasajero values (:nombre,:apellido,:dni,:idUsr,:fNac)';

        require_once '/../appConf/conexionBd.inc';
        
        try {
            //añadir a la tabla usuario
            $con = (new \ConexionBd())->getConexion();
            $stn = $con->prepare($sql);
            $stn->bindValue(":correo", $correo);
            $stn->bindValue(":pass", $pass);
            $stn->bindValue(":rol", 'pasajero');
            $stn->execute();
           
        } catch (\PDOException $ex) {
            throw $ex;
        } finally {
            unset($stn);
            unset($con);
        }
        $idUsuario = '';
        try {
            //consultar la id de usuario
            $con = (new \ConexionBd())->getConexion();
            $stn = $con->prepare($sql2);
            $stn->bindValue(":ecorreo", $correo);
            $stn->bindValue(":pwd", $pass);
            $stn->execute();
            $idUsuario = $stn->fetchAll(\PDO::FETCH_ASSOC);
            $idUsuario = $idUsuario[0]['idUsers'];
        } catch (\PDOException $ex) {
            throw $ex;
        } finally {
            unset($stn);
            unset($con);
        }


        try {
            //añadir a la tabla pasajero
            $con = (new \ConexionBd())->getConexion();
            $stn = $con->prepare($sql3);
            $stn->bindValue(":nombre", $nombre);
            $stn->bindValue(":apellido", $apellidos);
            $stn->bindValue(":dni", $dni);
            $stn->bindValue(":idUsr", $idUsuario);
            $stn->bindValue(":fNac", $fechaNac);
            $stn->execute();
           
        } catch (\PDOException $ex) {
            throw $ex;
        } finally {
            unset($stn);
            unset($con);
        }
    
    }