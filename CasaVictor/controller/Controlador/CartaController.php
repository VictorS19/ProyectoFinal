<?php


 function mostrarCarta()
  {
    if (isset($_POST['MenuCarta'])) {

      require_once __DIR__.'..\..\ConsultasBD\CartaBd.php';
      $datosMenu = (new CartaBd)->getMenu($_POST['MenuCarta']);
      construirCartaHtml( $datosMenu);

    }
  }

 function construirCartaHtml(array $datosMenu){
   ob_start(); 

?>


<?php
   $cartaHtml = ob_get_clean();
  }
  ?>


