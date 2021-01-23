<?php
    include "../CONTROLLER/LoginController.php";
    class Login {
        private $_controller;

        public function __construct()
        {
            $this->_controller = new LoginController();
        }

        public function Cadastrar($usuario, $email, $senha){
            return $_controller->Cadastrar($usuario, $email, $senha);
        }

        
        public function Login($email, $senha){
            return $_controller->Login($email, $senha);
        }
    }
?>