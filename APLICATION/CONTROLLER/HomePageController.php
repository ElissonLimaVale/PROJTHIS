<?php
include "../APP_SERVICE/INTERFACE/IHomePageAppService.php";
class HomePage{
    protected $_appservice;
    //contrutor da classe
    public function __construct(IHomePageAppService $_appservice){
        $this->_appservice = $_appservice;
    }
    
    public function search($string){
        $response = $this->_appservice->searchServie($string);
        echo $response;
    }

}
?>