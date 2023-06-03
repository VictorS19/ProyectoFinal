<?php
namespace app\conf;


class conexionBd
{ 
  private $con;

  public function __construct()
  { 

    try
    {
      $this->con = new \PDO("mysql:host=localhost:3307;dbname=proyectodaw", 'root', '');      
      $this->con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }catch(\PDOException $ex)
    { die("Error de conexión ".$ex->getMessage());
    }
  }
  public function getConexion()
  { return $this->con;
  }
}
