
<?php

class deudasView{


    function __construct(){

    }


    function showForm($action,$pagos){
        if($action=="update"){
             foreach ($pagos as $pago) {
                ?>
                # code...
             }
        }
        ?>
        
        <form method="post" action="<?php echo $action?>">
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
    

        <?php


    }
    function showDeudas($pagos){

        $html = '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="css/style.css">
                <title>Base De Datos </title>
            </head>
            
            <body>
        
            </body>
            
            </html>';
            
            echo $html;
        
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
                    <th></th>
        
                </tr>
                
                </thead>
        
                ";
            foreach($pagos as $pay){
                echo 
                "
                <tr>
                    <td>$pay->id</td>
                    <td>$pay->deudor</td>
                    <td>$pay->cuota</td>
                    <td>$pay->cuota_capital</td>
                    <td>$pay->fecha_pago</td>
                    <td><a href='delete/$pay->id'>Delete</a></td>
                    <td><a href='update/$pay->id'>Edit</a></td>
            
                </tr>
            
                
                ";
        
                
                
            }
            echo "</table>";

            
        $button = '
        
        <a href="FormAdd">Crear User</a>
        ';

        echo $button;
      
        
        }

        function showHomeLocation(){
            header("Location: ". BASE_URL ."home");
            //header("Location: http://localhost/proyectos/php/WEB%202/practico%203/home"); 
        }

    }