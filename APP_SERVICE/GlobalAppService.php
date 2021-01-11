<?php
include "INTERFACE/IGlobalAppService.php";
include "../INFRA/INTERFACE/IGlobalRepositry.php";

class GlobalAppService implements IGlobalAppService {
    protected $_repository;
    // Construtor
    public function __construct(){
        $this->_repository = new IGlobalRepository();
    }
    //Métodos e atributos da classe
    public function search($string){
        return $this->_repository->search($string);
    }
}
?>