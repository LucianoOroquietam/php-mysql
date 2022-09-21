<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Base De Datos </title>
</head>
</html>



<?php


require_once "pagosBD.php";


//$pagos = getPagos();

//insertPay();

showTable();
//arreglo a iterar , elemento que va cambiando en cada iteracion

function showTable(){

    echo "<table>";
echo 
    "
    
    <thead>
     <tr>
        <th>#</th>
        <th>Deudor</th>
        <th>Cuota</th>
        <th>Cuota_capital</th>
        <th>Fecha_pago</th>

     </tr>
    
     </thead>

    ";
foreach(getPagos() as $pago){
    echo 
    "
    <tr>
        <td>$pago->id</td>
        <td>$pago->deudor</td>
        <td>$pago->cuota</td>
        <td>$pago->cuota_capital</td>
        <td>$pago->fecha_pago</td>
 
    </tr>
    
    ";
    
}
echo "</table>";





}

