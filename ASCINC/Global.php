<?php
include "../APLICATION/CONTROLLER/GlobalController.php";

if(isset($_POST["metodo"])){
    $global = new GlobalMetodos();
    switch($_POST["metodo"]){
        case "search":
            $global->search();
            break;
    }
}

class GlobalMetodos {
    protected $_controller;
    //Construtor
    public function __construct(GlobalController $_controller){
        $this->_controller = $_cpntroller;
    }

    public function search(){
        if(isset($_POST["search"])){
            $response = $this->_controller->search($_POST["search"]);
        }else{
            $response = "error";
        }
        echo $response;
    }
}

?>