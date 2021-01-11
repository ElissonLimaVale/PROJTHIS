<?php
include "../CONTROLLER/GlobalController.php";
include "../APP_SERVICE/GlobalAppService.php";

if(isset($_POST["metodo"])){
    $global = new GlobalMetodos(new GlobalController());
    switch($_POST["metodo"]){
        case "search":
            $global->search();
            break;
    }
}

class GlobalMetodos {
    private $_controller;
    //Construtor
    public function __construct(GlobalController $_controller){
        $this->_controller = $_controller;
    }

    public function search(){

        $response = isset($_POST["search"]) ? $this->_controller->search($_POST["search"]) : "error";
        
        echo $response;
    }
}

?>