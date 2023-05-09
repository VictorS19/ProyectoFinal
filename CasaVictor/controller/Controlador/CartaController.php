<?php


  public function mostrarCarta()
  {
    if (isset($_POST['MenuCarta'])) {

      require_once '/../ConsultasBD/CartaBd.php';
      $datosMenu = getMenu($_POST['MenuCarta']);


    }
  }

  public function construirCartaHtml(array $datosMenu){
   ob_start(); 
?>


<?php
   $cartaHtml = ob_get_clean();
  }
  ?>