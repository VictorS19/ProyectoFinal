<?php

class configuracion
{
  private $datosConexion = []; 

  public function __construct()
  {
    $this->datosConexion =
      [
        "driver" => "sqlsrv", 
        "server" => "localhost", 
        "port" => "3307", 
        "database" => "proyectodaw", 
        "user" => "root", 
        "pass" => "", 
        "charset" => "utf-8" 
      ];
  }

  public function getDatosConexion(): array
  {
    return $this->datosConexion;
  }
}
