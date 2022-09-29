
<?php

require_once "deudas.php";
require_once "pagosBD.php";
require_once "controller/deudasController.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');


$action = $_GET ['action'];

//viene el action lo parto por barra
    
$partsURL = explode('/', $action );


//para llamar a la funcion de una clase debo instanciar la clase
$deudasController = new deudasController();

switch($partsURL[0]){
    case 'home':
        $deudasController->showHome();
        break;
    case 'createPay':
        createPay();
        break;
    case 'delete':
        deletePay($partsURL[1]);
        break;
    case 'updatePay':
        updatePay($partsURL[1]);
        break;    

    default: 
    echo("404 not found");
    break;        

}

