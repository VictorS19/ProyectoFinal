<?php
 namespace app\controller;

 use app\consultasBd\GestionBd;


 class GestionController{



  public function gestionar()
  {
    require_once __DIR__.'\..\ConsultasBD\GestionBd.php';
        $datosReservas = (new GestionBd)->mostrarReservas();
        ob_start();
      foreach ($datosReservas as $reserva) {
        echo "
        <tr>
        <th>".$reserva["idreserva"]."</th>
        <td>".$reserva["idmesas"]."</td>
        <td>".$reserva["comensales"]."</td>
        <td>".$reserva["fecha"]."</td>
        <td>".$reserva["hora"]."</td>
        <td>".$reserva["dniusuarios"]."</td>
        </tr>
        ";
      }  
      $codigoGestion = ob_get_clean();
      $_SESSION["codGestion"] = $codigoGestion;

      if(isset($_POST["GestionOK"])){
        $idReserva = $_POST["idReservaGestion"];
        (new GestionBd)->eliminarReserva($idReserva);


      }
  }
}
 
