
<?php ob_start() ?>


<form action="" method="post">
    <fieldset>
        <label for="salida">Salir de: <input type="text" name="salida2" id="salida" required></label>
        <label for="destino">Destino: <input type="text" name="destino2" id="destino" required></label>
        <br>
        <?php $fechaHoy = getdate(); $fechaStr = $fechaHoy['mday'].'-'.$fechaHoy['mon'].'-'.$fechaHoy['year']?>
        <label for="ida">Fecha de ida: <input type="date" min="<?= $fechaStr?>" name="ida2" id="ida" required></label>
       
    </fieldset>
    <input type="submit" value="Buscar" class="btnSubmit" name="buscarOk">

</form>

<?php $formBuscar = ob_get_clean() ?>

<?php ob_start() ?>

<form action="" method="post">
    <fieldset>
        
        <label>Fila: <input type="number" name="fila" id="fila" value="1" max="20" min="1" required></label>
        <br>
        <label>Asiento: <select name="asiento" id="asiento" required>

        <option value="1" selected>A</option>
        <option value="2" >B</option>
        <option value="3" >C</option>
        <option value="4" >D</option>
        <option value="5" >E</option>
        <option value="6" >F</option>
        </select></label>
        
    </fieldset>
    <input type="submit" value="Reservar" class="btnSubmit" name="reservaOk">

</form>

<?php $formReservar = ob_get_clean() ?>



<?php

ob_start();

echo '<table class="ocIda">
 <tr>  <th>Fila</th><th>Asiento1</th><th>Asiento2</th><th>Asiento3</th><th>Asiento4</th><th>Asiento5</th><th>Asiento6</th></tr>';

$asientosIda = $ocupacion['ida'][0];
$nombreVuelo = " ".$asientosIda["Codigo"] . " ".$asientosIda["Origen"]."-".$asientosIda["Destino"];


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


?>


<?php include 'plantillaReserva.php' ?>