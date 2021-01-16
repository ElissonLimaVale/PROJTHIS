<?php
include "../APP/INTERFACE/IHomePageAppService.php";
include "../APP/HomePageAppService.php";
class HomePageController{
    protected $_appservice;
    //contrutor da classe
    public function __construct(){
        $this->_appservice = new HomePageAppService();
    }
    
    public function search($string){
        $response = $this->_appservice->search($string);
        echo $response;
    }

}
?>