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
            
            
            function createPay(){
    
                $this->model->insertPay($_POST['deudor'],$_POST['cuota'],$_POST['capital'], $_POST['fecha']);
                $this->view->showHomeLocation();

            }
            
            function deletePay($id){
                $this->model->deletePayFromDB($id);
                $this->view->showHomeLocation();
                //showHomeLocation() -> header("Location: ". BASE_URL ."home");
                 
            }
            
            
            
    }

