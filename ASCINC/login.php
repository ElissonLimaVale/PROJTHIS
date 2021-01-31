<?php
    include "../CONTROLLER/LoginController.php";

    if(isset($_POST["metodo"])){
        $login = new Login();
        switch ($_POST["metodo"]){
            case "cadastrar":
                $login->Cadastrar();
                break;
        }
    }
    class Login {
        private $_controller;

        public function __construct()
        {
            $this->_controller = new LoginController();
        }

        public function Cadastrar(){

            $usuario = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];

            $response =  $this->_controller->Cadastrar($usuario, $email, $senha);
            echo $response;
        }

        
        public function Login($email, $senha){
            return $_controller->Login($email, $senha);
        }
    }
?>