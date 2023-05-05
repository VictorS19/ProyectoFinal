<?php

namespace app\iberia\controlador;

use app\iberia\repositorio\VuelosRepositorio;
use app\iberia\repositorio\OcupacionRepositorio;

class DefaultController
{
  public function inicio()
  {
    if (isset($_POST['ok'])) {
      require_once __DIR__ . '/../Repositorio/vuelosRepositorio.inc';
      $vuelos =  (new VuelosRepositorio())->findVuelos($_POST['salida'], $_POST['destino'], $_POST['ida'], $_POST['vuelta']);
      require_once __DIR__ . '/../Repositorio/OcupacionRepositorio.inc';
      $ocupacion =  (new OcupacionRepositorio())->findVuelos($_POST['salida'], $_POST['destino'], $_POST['ida'], $_POST['vuelta']);
    }
    require __DIR__ . '/../../app/plantillas/inicio.php';
  }
}
