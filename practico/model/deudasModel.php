<?php


class deudasModel{


    //genero un atributo de la clase
    private $db;    
    function __construct(){

            //cada vez que se hace new de la clase del objeto , me conecto a la db
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_deudas;charset=utf8', 'root', '');
            
    }
    function getPagos(){
            $query = $this->db->prepare('SELECT * FROM deudas');
            $query->execute(); 
            
            //obtener los datos de la consulta (para procesarlos)
            $pagos= $query->fetchAll(PDO::FETCH_OBJ);; //devuelve un arreglo con todos los pagos
            
            
            return $pagos;
            
            //cerrar la conexion a la DB no es neesario en PDO
        }

    function insertPay($deudor,$cuota,$cuota_capital,$fecha_pago){
        $query = $this->db->prepare("INSERT INTO deudas(deudor,cuota,cuota_capital,fecha_pago) VALUES(?, ?, ?, ?)");
        $query->execute(array($deudor,$cuota,$cuota_capital,$fecha_pago)); 

    }
    
    function deletePayFromDB($id){
        
        $query = $this->db->prepare("DELETE FROM deudas WHERE id=?");
        $query->execute(array($id));
        
    }
}


