
<?php

require_once "deudas.php";
require_once "pagosBD.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');


$action = $_GET ['action'];

//viene el action lo parto por barra
    
$partsURL = explode('/', $action );


switch($partsURL[0]){
    case 'home':
        showHome();
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

