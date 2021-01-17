<?php
include "../APP/INTERFACE/ILoginAppService.php";
include "../APP/LoginAppService.php";
include "../APP/MODELS/UsuarioViewModel.php";

class LoginController {
    private $_appservice;
    // Construtor da classe
    public function __construct(){
        $this->_appservice = new LoginAppService();
    }

    public function Cadastrar(UsuarioViewModel $usuario){

        return $this->_appservice->Cadastrar($usuario);
    }

    public function Login(UsuarioViewModel $usuario){

        return $this->_appservice->Login($usuario);
    }
}

?>