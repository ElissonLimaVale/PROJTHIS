<?php
include "../APP_SERVICE/INTERFACE/IHomePageAppService.php";
class HomePageController{
    protected $_appservice;
    //contrutor da classe
    public function __construct(){
        $this->_appservice = new IHomePageAppService();
    }
    
    public function search($string){
        $response = $this->_appservice->search($string);
        echo $response;
    }

}
?>