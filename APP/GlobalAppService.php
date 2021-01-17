<?php

include "../REPOSITORY/INTERFACE/IGlobalRepository.php";
include "../REPOSITORY/GlobalRepository.php";

class GlobalAppService implements IGlobalAppService {
    private $_repository;
    // Construtor
    public function __construct(){
        $this->_repository = new GlobalRepository();
    }
    // Métodos e atributos da classe
    public function search($string){
        return $this->_repository->search($string);
    }
}


?>