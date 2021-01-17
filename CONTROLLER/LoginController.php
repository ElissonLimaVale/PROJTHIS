<?php
include "../APP/INTERFACE/ILoginAppService.php";
include "../APP/LoginAppService.php";

class LoginController {
    private $_appservice;
    // Construtor da classe
    public function __construct(){
        $this->_appservice = new LoginAppService();
    }

    public function Cadastrar($usuario){

        return $this->_appservice->Cadastrar($usuario);
    }

    public function Login($usuario){

        return $this->_appservice->Login($usuario);
    }
}

?>