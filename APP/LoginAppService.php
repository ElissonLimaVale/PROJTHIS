<?php

include "../REPOSITORY/INTERFACE/ILoginRepository.php";
include "../REPOSITORY/LoginRepository.php";

class LoginAppService implements ILoginAppService {
    private $_repository;
    private $_mapper;
    public function __construct() {
        $this->_repository = new LoginRepository();
        $this->_mapper = new AutoMaper();
    }

    public function Cadastrar($usuario, $email, $senha){
        
        return $this->_repository->Cadastrar($usuario, $email, $senha);

    }

    public function Login($email, $senha){
        
        return $this->_repository->Login($email, $senha);
    }
}

?>