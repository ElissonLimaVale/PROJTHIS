<?php 
include "../REPOSITORY/INTERFACE/IHomePageRepository.php";
include "../REPOSITORY/HomePageRepository.php";

class HomePageAppServoce implements IHomePageAppService
{
    private $_repository;

    public function __construct(){
        $this->_repository = new HomePageRepository();
    }

    public function search($string){
        return $this->_repository->search($string);
    }
}

?>