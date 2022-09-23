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

    <form method="post" action="agregar">
        <label for="">Deudor</label>
        <input type="text" name="" id="">
        <label for="">Cuota</label>
        <input type="number" name="" id="">
        <label for="">Cuota_capital</label>
        <input type="number" name="" id="">
        <label for="">Fecha_pago</label>
        <input type="date" name="" id="">

        <button type="submit">Enviar</button>
    </form>
    
</body>


</html>



<?php } ?>