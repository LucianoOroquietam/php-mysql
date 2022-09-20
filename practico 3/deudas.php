<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="templates/style.css">
    <title>Base De Datos </title>
</head>
</html>



<?php

function connectDB(){
    //abrir la conexion con la DB
    $db = new PDO('mysql:host=localhost;'.'dbname=db_deudas;charset=utf8', 'root', '');
    return $db;
}

function getPagos(){

$db = connectDB();

//ejecutar la consulta SQL
//SELECT * FROM `pagos`

$query = $db->prepare('SELECT * FROM deudas');
$query->execute(); 

//obtener los datos de la consulta (para procesarlos)
$pagos= $query->fetchAll(PDO::FETCH_OBJ); //devuelve un arreglo con todos los pagos


return $pagos;
//cerrar la conexion a la DB no es neesario en PDO

}

$pagos = getPagos();




//arreglo a iterar , elemento que va cambiando en cada iteracion
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
foreach($pagos as $pago){
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


