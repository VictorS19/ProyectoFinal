<?php

 namespace app\controller;
 session_start();
 use app\consultasBd\CartaBd;

 class CartaController{

 function mostrarCarta()
  {
    if (isset($_POST['MenuCarta'])) {
      $nombreMenu = $_POST['MenuCarta'];
      $numMenu = 0;
      if($nombreMenu == "Menú Cinco Hojas"){
        $numMenu = 1;
      }else if($nombreMenu == "Menú Vid"){
        $numMenu = 2;
      }else if($nombreMenu == "Menú Olivo"){
        $numMenu = 3;
      }else{
        $numMenu = 4;
      }

      require_once __DIR__.'..\..\ConsultasBD\CartaBd.php';
      $datosMenu = (new CartaBd)->getMenu($numMenu);
 
   ob_start(); 


   echo " <h1 class='fw-bolder mt-5 pt-5'>". $_POST['MenuCarta'] ."</h1>";
   
   // entrantes
  echo "<div class='row justify-content-around'>";
    echo "<h3 class='text-center texto-cabecera'>Entrantes</h3>";

    foreach ($datosMenu as $value) {
      if($value["tipoplato"] == "entrante"){
        $urlImagen = "src='../imagesPlatos/".$value["nombreimagen"]. " ' ";
        echo "
        
        <div class='row m-3 align-items-center texto-items'>
        <div class='col col-10 col-md-7 '>".$value["nombre"]."</div>
        <div class='col col-xl-3 rounded-circle'>
            <img class='rounded-circle' ". $urlImagen ." height='150' width='150'
                alt='entrante'>
        </div>
        </div> 
        ";

      }    
    }             
  echo "</div>";


   // Platos principales
   echo "<div class='row justify-content-around'>";
   echo "<h3 class='text-center texto-cabecera'>Platos Principales</h3>";

   foreach ($datosMenu as $value) {
     if($value["tipoplato"] == "Plato principal"){
       $urlImagen = "src='../imagesPlatos/".$value["nombreimagen"]. " ' ";
       echo "
       
       <div class='row m-3 align-items-center texto-items'>
       <div class='col col-10 col-md-7 '>".$value["nombre"]."</div>
       <div class='col col-xl-3 rounded-circle'>
           <img class=' rounded-circle' ". $urlImagen ." height='150' width='150'
               alt='Plato principal'>
       </div>
       </div> 
       ";

     }    
   }             
 echo "</div>";
                  
 
  // Postres
  echo "<div class='row justify-content-around'>";
  echo "<h3 class='text-center texto-cabecera'>Postres</h3>";

  foreach ($datosMenu as $value) {
    if($value["tipoplato"] == "Postre"){
      $urlImagen = "src='../imagesPlatos/".$value["nombreimagen"]. " ' ";
      echo "
      
      <div class='row m-3 align-items-center texto-items'>
      <div class='col col-10 col-md-7 '>".$value["nombre"]."</div>
      <div class='col col-xl-3 rounded-circle'>
          <img class='rounded-circle' ". $urlImagen ." height='150' width='150'
              alt='Postre'>
      </div>
      </div> 
      ";

    }    
  }             
echo "</div>";


   $cartaHtml = ob_get_clean();
  
    $_SESSION["cartaMenu"] = $cartaHtml;

  }
}
 }
  ?>
