<?php
 namespace app\controller;
 session_start();
 use app\consultasBd\PlatosBd;

 class PlatosController{



  public function mostrar()
  {
      
        require_once __DIR__.'\..\ConsultasBD\PlatosBd.php';
        $listaPlatos = (new PlatosBd)->mostrar();


      ob_start();

      foreach ($listaPlatos as $plato) {

      $urlImagen = "src='../imagesPlatos/".$plato["nombreimagen"]. " ' ";

      echo "
      <div class='card m-2 fondoVerde col col-7 col-md-4 col-lg-3 col-xxl-2 m-xxl-5'>
      <img ".$urlImagen." class='card-img-top img-fluid' alt='nombrePlato'>
      <div class='card-body'>
          <h5 class='card-title'>".$plato["nombre"]."</h5>
          <p class='card-text'>".$plato["descripcion"]."</p>
      </div>
      <div class='card-body'>
          <h5 class='card-title'>Alérgenos</h5>
          <p class='card-text'>".$plato["alergenos"]."</p>
      </div>

      </div>
      ";
    }

    $codigoPlatos = ob_get_clean();
    $_SESSION["platos"] = $codigoPlatos;
  }
}
 
