<?php

require_once "./model/deudasModel.php";
require_once "./view/deudasView.php";

class deudasController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new deudasModel();
        $this->view = new deudasView();
    }

        function showHome(){
            
            // dame las tareas
            $pagos = $this->model->getPagos();
            //mostrame las tareas
            $this->view->showDeudas($pagos);

            
            
            } 
            
    }

