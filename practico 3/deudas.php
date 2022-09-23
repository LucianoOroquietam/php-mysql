<?php function showHome(){ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Base De Datos </title>
</head>



<body>


    

    <form method="post" action="createPay">
        <label for="">Deudor</label>
        <input type="text" name="deudor" id="">
        
        <label for="">Cuota</label>
        <input type="number" name="cuota" id="">

        <label for="">Cuota_capital</label>
        <input type="number" name="capital" id="">
        
        <label for="">Fecha_pago</label>
        <input type="date" name="fecha" id="">

        <button type="submit">Guardar</button>
    </form>
    
</body>


</html>



<?php } ?>






<?php

function createPay(){
    
    insertPay($_POST['deudor'],$_POST['cuota'],$_POST['capital'], $_POST['fecha']);
    header("Location: ". BASE_URL ."home");
    //header("Location: http://localhost/proyectos/php/WEB%202/practico%203/home"); 

}

function deletePay($id){
    deletePayFromDB($id);
    header("Location: ". BASE_URL ."home");
    //header("Location: http://localhost/proyectos/php/WEB%202/practico%203/home"); 
}



require_once "pagosBD.php";
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
            <th></th>

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
        <td><a href='delete/$pago->id'>Borrar</a></td>
 
    </tr>
   
    
    ";

    
    
}
echo "</table>";

}
showTable();


//$pagos = getPagos();

//insertPay();


//arreglo a iterar , elemento que va cambiando en cada iteracion
?>



