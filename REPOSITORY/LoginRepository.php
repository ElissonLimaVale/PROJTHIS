<?php

include "BASE/conexao.php";
include "BASE/Encrypt.php";

class LoginRepository implements ILoginRepository {
    private $_conexao;
    private $_encrypt;
    //Construtor da classe
    public function __construct(){
        $this->_conexao = new Conexao();
        $this->_encrypt = new Encrypt();
    }

    public function Cadastrar($usuario, $email, $senha){
        // Emplementar função de cadastro 
       
        $hash = $this->_encrypt->GetHash($senha);

        $response = "Cadastrado com sucesso! usuario = ".$usuario. " Email = ". $email. " Senha = " .$hash;
        // try {
        //     $conexao = $this->_conexao->conectar();
        //     $query = "CALL Cadastrar(" .$usuario." ".$email." ".$hash.")";
        //     $result = mysqli_query($conexao, $query);
        // }catch(Exception $s) {
        //     $response->data = false;
        //     $respnse->message = "Ops, ocorreu um erro: " .$s;
        // }

        return $response;

    }

    public function Login($email, $senha){
        // Emplementar função de login
        return new Usuario();
    }
}

// class Response {
//     public $data;
//     public $message;

//     public function __construct($_data, $_message){
//         $this->data = $_data;
//         $this->message  = $_message;
//     }

// }

?>