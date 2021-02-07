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
            header('Content-Type: application/json');

            if(!isset($_POST["nome"]) || !isset($_POST["email"]) || !isset($_POST["senha"])){
                $response = array("data" => false, "mensagem" => "Por Favor, preencha todos os campos!");
                return json_encode($response);
            }

            $response =  $this->_controller->Cadastrar($_POST["nome"], $_POST["email"], $_POST["senha"]);
            
            echo json_encode($response);
        }

        
        public function Login($email, $senha){
            return $this->_controller->Login($email, $senha);
        }
    }
?>