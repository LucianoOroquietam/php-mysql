<?php

class robot
{
    //establezco que cosas va a tener el robot
    private $x;
    private $y;
    private $estado = 'APAGADO';
    private $habitantesActuales;
    private $robotLimpieza;

    public function encender(){
        //para acceder a las propiedades debemos usar this->propiedad
        $this->estado= 'ENCENDIDO';
    }

    function __construct(){
        $this->habitantesActuales=2;
        $this->robotLimpieza=new robot();
    }

    public function salirDeCasa(){
        $this->habitantesActuales= $this->habitantesActuales-1;
        if($this->habitantesActuales==0){
            $this->robotLimpieza->encender();
        }
    }

}

$robotCasa = new robot();
$robotOficina = new robot();
$robotOficina->encender();