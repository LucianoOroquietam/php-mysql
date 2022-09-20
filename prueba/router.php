<?php

$rutas = array();

if(isset($_GET["action"])){
   

    //los indices que vayan a ser parte del array rutas, sea partido de acuerdo a lo que venga divido(/) x
    $rutas = explode("/", $_GET["pagina"]);

    //var_dump($rutas);
    //array(2) { [0]=> string(6) "editar" [1]=> string(7) "luciano"}

    if($rutas[0] == "editar"){
        include "editar.php";
    }

    if($rutas[0] == "usuarios"){
        include "usuarios.php";
    }
} 
else {
    include "usuarios.php";
}



/**
 if(isset($_GET["pagina"])){
   
    if($_GET["pagina"]== "editar"){
        include "editar.php";
    }

    if($_GET["pagina"] == "usuarios"){
        include "usuarios.php";
    }
} 
else {
    include "usuarios.php";
}
 * 
 * 
 */


    
