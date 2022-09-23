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
//$pagos= ; //devuelve un arreglo con todos los pagos


return $query->fetchAll(PDO::FETCH_OBJ);
//cerrar la conexion a la DB no es neesario en PDO

}

function insertPay($deudor, $cuota, $cuota_capital, $fecha_pago){
    $db=connectDB();

    $query = $db->prepare("INSERT INTO deudas(deudor, cuota, cuota_capital, fecha_pago) VALUES(?, ? , ? , ?)"); //inserta en deudas columna deudor el valor x
    $query->execute(array($deudor,$cuota,$cuota_capital,$fecha_pago)); //el valor lo va a sacar de este arreglo
    

}