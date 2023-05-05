<!-- Vista común a la mayoría (sino todas) las vistas de la aplicación
     Suele contener la imagen corporativa de la apliación Web
     Concretamente esta página contiene el nombre de la empresa
     "Cadena Tiendas Media" y una barra de hiperenlaces con un enalace a la
     página home, llamado "inicio"
     El nombre del archivo es indiferente: layout, comun, etc.
-->
<!DOCTYPE html>
<html>

<head>
  <title>Viberia</title>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href='web/css/estilos.css' />
</head>

<body>
  <header>
    <h1>VIBERIA.</h1>
  </header>
  <nav>
    <!-- Observa cómo el enlace agrega el valor de la variable GET 'ctl'
           que será analizado en la página index.php, en este caso le da el
           valor 'inicio' para que la vista cambie a la página home de la
           aplicación
       -->
    <a href="index.php?ctl=inicio">Inicio</a>
    <a href="index.php?ctl=reservar">Reservar</a>
    <?php 
    if(isset($_SESSION['datosSesion'])){

      echo '<a href="index.php?ctl=login">' .$_SESSION['datosSesion'][2] .': LogOut</a>';
    }else{
      echo '<a href="index.php?ctl=login">Login</a>';
    }
    
    ?>
    <!-- En general, la mayoría de los enlaces serán a la página index.php
           y una asignación a la variable 'ctl'. El valor de la variable deberá
           ser analizada en la página index.php de cara a encontrar la ruta del
           controlador (y método) que debe procesar la petición
      -->
  </nav>
  <main>
    <div id="contenido">
      <!-- el id css facilita (si se define) la definición del aspecto visual
           de su contenido
           La variable $contenido hará que se muestre la plantilla concreta, el
           contenido concreto, según la solicitud realizada por el usuario
      -->
      <?= $contenido ?>
    </div>
    <div class="tabla">
      <?php
      if (isset($_POST['ok'])) {
        echo $contenidoTabla;
      }
      ?>

    </div>
    <div class="ocupacion">

      <div class="ocupacionIda">

        <?php
        if (isset($_POST['ok'])) {
          echo "<h3>Ocupacion del vuelo de Ida</h3>";
          echo $contenidoOcupacionIda;
        }
        ?>

      </div>
      <div class="ocupacionIda">

        <?php
        if (isset($_POST['ok'])) {
          echo "<h3>Ocupacion del vuelo de Vuelta</h3>";
          echo $contenidoOcupacionVuelta;
        }
        ?>

      </div>
    </div>
  </main>
  <footer>
    <p>Viberia Airways</p>
  </footer>
</body>

</html>