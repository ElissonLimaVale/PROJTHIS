<?php
include "../INFRA/INTERFACE/IGlobalRepository.php";
include "../INFRA/Repository/GlobalRepository.php";

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