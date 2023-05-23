<?php

class configuracion
{
  private $datosConexion = []; 

  public function __construct()
  {
    $this->datosConexion =
      [
        "driver" => "pdo_sqlsrv", 
        "server" => "localhost", 
        "port" => "3307", 
        "database" => "proyectodaw", 
        "user" => null, 
        "pass" => null, 
        "charset" => "utf-8" 
      ];
  }

  public function getDatosConexion(): array
  {
    return $this->datosConexion;
  }
}
