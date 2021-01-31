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
        $response = array('data' => true, 'mensagem' => 'Cadastrado com sucesso!');
        $hash = $this->_encrypt->GetHash($senha);

        // $response = "Cadastrado com sucesso! usuario = ".$usuario. " Email = ". $email. " Senha = " .$hash;
        try {
             $conexao = $this->_conexao->conectar();
             $query = "Select * From usuario WHERE email = '{$email}'";
             $result = $conexao->query($query);
             $valida = mysqli_num_rows($result);
             if($valida == 0 || empty($valida)){
                $sql = "Insert into usuario(nome, email, senha) values ('{$usuario}', '{$email}', '{$hash}')";
                $cad = $conexao->query($sql);
             }else{
                $response['data'] = false;
                $response['mensagem'] = "Ops, já existe um usuário cadastrado com esse e-mail! ";
                return $response;
             }
        }catch(Exception $s) {
             $response['data'] = false;
             $response['mensagem'] = "Ops, ocorreu um erro: " .$s;
        }

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