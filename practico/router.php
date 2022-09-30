
<?php

require_once "controller/deudasController.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/');

$action='home';

if(!empty($_GET ['action'])){
 $action = $_GET ['action'];   
}


//viene el action lo parto por barra
    
$partsURL = explode('/', $action );


//para llamar a la funcion de una clase debo instanciar la clase
$deudasController = new deudasController();

switch($partsURL[0]){
    case 'home':
        $deudasController->showHome();
        break;
    case "FormAdd":
        $deudasController->showForm("createPay",null);
        break;
    case 'createPay':
        $deudasController->createPay();
        break;
    case 'delete':
        $deudasController->deletePay($partsURL[1]);
        break;
    case 'update':
        $deudasController->showForm("update",$partsURL[1]);
        break;    
    case 'update':
        $deudasController->updatePay($partsURL[1]);
        break;
    default: 
    echo("404 not found");
    break;        

}

