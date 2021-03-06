<?php
session_start();
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
            header('Content-Type: application/json');
        }

        public function Cadastrar(){
            $response = array("data" => false, "mensagem" => "Por Favor, preencha todos os campos!");

            if(isset($_POST["nome"]) || isset($_POST["email"]) || isset($_POST["senha"])){
                
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $senha = $_POST["senha"];
                if($email == '' || $senha == '' || $nome == ''){
                    echo json_encode($response);
                }else{
                    $response =  $this->_controller->Cadastrar($nome, $email, $senha);
                    //header('Content-Type: application/json');
                    if($response['data']){
                        $_SESSION['usuario'] = array("nome" => $nome,"email" => $email);
                    }
                    echo json_encode($response);
                }
            }
        }

        
        public function Login($email, $senha){
            echo $this->_controller->Login($email, $senha);
        }
    }
?>