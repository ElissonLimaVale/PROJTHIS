<?php

include "../REPOSITORY/INTERFACE/ILoginRepository.php";
include "../REPOSITORY/LoginRepository.php";
include "MODELS/UsuarioViewModel.php";
include "../DOMAIN/BASE/Usuario.php";
include "../AUTOMAPER/AutoMaper.php";

class LoginAppService implements ILoginAppService {
    private $_repository;
    private $_mapper;
    public function __construct() {
        $this->_repository = new LoginRepository();
        $this->_mapper = new AutoMaper();
    }

    public function Cadastrar(UsuarioViewModel $usuario){
        
        return $this->_repository->Cadastrar($this->_mapper->Map($usuario, new Usuario()));
    }

    public function Login(UsuarioViewModel $usuario){
        
        return $this->_repository->Login($this->_mapper->Map($usuario, new Usuario()));
    }
}

?>