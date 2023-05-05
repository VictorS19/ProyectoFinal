<?php
/* Ejemplo de plantilla que se mostrará dentro de la plantilla principal
  ob_start() activa el almacenamiento en buffer de la página. Mientras se
             almacena en el buffer no se produce salida alguna hacia el
             navegador del cliente
  luego viene el código html y/o php que especifica lo que debe aparecer en
     el cliente web
  ob_get_clean() obtiene el contenido del buffer (que se pasa a la variable
             $contenido) y elimina el contenido del buffer
  Por último se incluye la página que muestra la imagen común de la aplicación
    (en este caso base.php) la cual contiene una referencia a la variable
    $contenido que provocará que se muestre la salida del buffer dentro dicha
    página "base.php"
*/
?>
<?php ob_start() ?>


<form action="" method="post">
  <fieldset>
    <legend>Buscador de vuelos</legend>
    <label for="salida">Salir de: <input type="text" name="salida" id="salida" require></label>
    <label for="destino">Destino: <input type="text" name="destino" id="destino" require></label>
    <label for="ida">Ida: <input type="date" name="ida" id="ida" require></label>
    <label for="vuelta">Vuelta: <input type="date" name="vuelta" id="vuelta"></label>
  </fieldset>
  <input type="submit" value="Buscar" class="btnSubmit" name="ok">

</form>

<?php $contenido = ob_get_clean() ?>


<?php


ob_start();
echo '<table class="vuelo">
 <tr>  <th>Trayecto</th><th>Codigo</th> <th>Origen</th><th>Destino</th><th>Salida</th><th>Duración</th><th>Fecha</th></tr>
   <tr>';
echo '<td>Ida</td>';
$ida = $vuelos['ida'][0];

echo "<td>" . $ida['Codigo'] . "</td>";
echo "<td>" . $ida['Origen'] . "</td>";
echo "<td>" . $ida['Destino'] . "</td>";
$salidaIda = substr($ida['Salida'], 0, 5);
echo "<td>" . $salidaIda . "</td>";
$duracionIda = substr($ida['Duracion'], 0, 5) . 'h.';
echo "<td>" . $duracionIda . "</td>";
echo "<td>" . $ida['Fecha ida'] . "</td>";

echo "</tr>";
if (!empty($vuelos['vuelta'])) {

  $vuelta = $vuelos['vuelta'][0];
  echo '<tr>';
  echo '<td>Vuelta</td>';


  echo "<td>" . $vuelta['Codigo'] . "</td>";
  echo "<td>" . $vuelta['Origen'] . "</td>";
  echo "<td>" . $vuelta['Destino'] . "</td>";
  $salidaVta = substr($vuelta['Salida'], 0, 5);
  echo "<td>" . $salidaVta . "</td>";
  $duracionVta = substr($vuelta['Duracion'], 0, 5) . 'h.';
  echo "<td>" . $duracionVta . "</td>";
  echo "<td>" . $vuelta['Fecha vuelta'] . "</td>";
}
echo "</tr></table>";
$contenidoTabla = ob_get_clean();
?>

<?php

ob_start();

echo '<table class="ocIda">
 <tr>  <th>Fila</th><th>Asiento1</th><th>Asiento2</th><th>Asiento3</th><th>Asiento4</th><th>Asiento5</th><th>Asiento6</th></tr>';

$asientosIda = $ocupacion['ida'][0];


for ($i = 6; $i < 26; $i++) {
  $fila = $i - 5;
  $filaStr = 'fila' . $fila;
  $filaBinario =  $asientosIda[$filaStr];
  echo '<tr><td>Fila' . $fila . '</td>';
  echo '<td>' . ($filaBinario & 1 ? "O" : "L") . '</td>';
  echo '<td>' . ($filaBinario & 2 ? "O" : "L") . '</td>';
  echo '<td>' . ($filaBinario & 4 ? "O" : "L") . '</td>';
  echo '<td>' . ($filaBinario & 8 ? "O" : "L") . '</td>';
  echo '<td>' . ($filaBinario & 16 ? "O" : "L") . '</td>';
  echo '<td>' . ($filaBinario & 32 ? "O" : "L") . '</td>';
  echo '</tr>';
}
echo '</table>';
$contenidoOcupacionIda = ob_get_clean();


// if (!empty($ocupacion['vuelta'])) {

//   $asientosVuelta = $ocupacion['vuelta'][0];
//   echo '<tr>';
// }
// echo "</tr></table>";

?>
<?php
if (!empty($vuelos['vuelta'])) {

  ob_start();

  echo '<table class="ocIda">
   <tr>  <th>Fila</th><th>Asiento1</th><th>Asiento2</th><th>Asiento3</th><th>Asiento4</th><th>Asiento5</th><th>Asiento6</th></tr>';

  $asientosVuelta = $ocupacion['vuelta'][0];


  for ($j = 6; $j < 26; $j++) {
    $fila = $j - 5;
    $filaStr = 'fila' . $fila;
    $filaBinario =  $asientosVuelta[$filaStr];
    echo '<tr><td>Fila' . $fila . '</td>';
    echo '<td>' . ($filaBinario & 1 ? "O" : "L") . '</td>';
    echo '<td>' . ($filaBinario & 2 ? "O" : "L") . '</td>';
    echo '<td>' . ($filaBinario & 4 ? "O" : "L") . '</td>';
    echo '<td>' . ($filaBinario & 8 ? "O" : "L") . '</td>';
    echo '<td>' . ($filaBinario & 16 ? "O" : "L") . '</td>';
    echo '<td>' . ($filaBinario & 32 ? "O" : "L") . '</td>';
    echo '</tr>';
  }
  echo '</table>';
  $contenidoOcupacionVuelta = ob_get_clean();
}
?>

<?php include 'base.php' ?>