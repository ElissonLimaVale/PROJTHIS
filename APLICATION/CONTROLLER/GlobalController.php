<?php
include "../APP_SERVICE/INTERFACE/IGlobalAppService.php";
class GlobalController{
    private $_appservice;

    function __construct(IGlobalAppService $_appservice){
        $this->_appservice = $_appservice;
    }
    //Métodos da classe

    public function search($string){
        return $this->_appservice->search($string);
    }
}+6


?>