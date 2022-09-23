
<?php

require_once "deudas.php";
require_once "pagosBD.php";



$action = $_GET ['action'];

//viene el action lo parto por barra
    
$partesURL = explode('/', $action );


switch($partesURL[0]){
    case 'home':
        showHome();
        break;
    case 'createPay':
        createPay();
        break;


    default: 
    echo("404 not found");
    break;        

}

