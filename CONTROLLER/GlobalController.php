<?php
include "../APP_SERVICE/INTERFACE/IGlobalAppService.php";

class GlobalController{
    protected $_appservice;

    function __construct(){
        $this->_appservice = new IGlobalAppService();
    }
    //Métodos da classe

    public function search($string){
        return $this->_appservice->search($string);
    }
}


?>