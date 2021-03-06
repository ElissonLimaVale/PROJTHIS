<?php
include "BASE/conexao.php";

class LoginRepository implements ILoginRepository {

    private $_encrypt;
    private $_conexao;
    //Construtor da classe
    public function __construct(){
        $this->_conexao = new Conexao();
        $this->_encrypt = new Encrypt();
    }

    public function Cadastrar($usuario, $email, $senha){
        // Emplementar função de cadastro 
        $response = array('data' => true, 'mensagem' => 'Cadastrado com sucesso!');
        $hash = $this->_encrypt->GetHash($senha);

        $senha = ""; //sobrescreve a senha para não manter em memoria
        
        try {
             $conexao = $this->_conexao->conectar();
             //Valida se a conexão é nula 
             if($conexao == null){
                $response['data'] = false;
                $response['mensagem'] = "Ops, Ocorreu um erro na conexão com o banco de dados! ";
                return $response;
             }
             //Verifica se ja existe usuario cadastrado
             $query = "select * From usuario where email = '{$email}'";
             $result = $conexao->query($query);
             $valida = mysqli_num_rows($result);
             if($valida == 0 || empty($valida)){
                 // Cadastra o usuario
                $sql = "insert into usuario(nome, email, senha) values ('{$usuario}', '{$email}', '{$hash}')";
                $conexao->query($sql);
                //mysqli_close($conexao);
             }else{
                //retorna mensagem de erro caso o usuario ja esteja cadastrado
                $response['data'] = false;
                $response['mensagem'] = "Ops, já existe um usuário cadastrado com esse e-mail! ";
                return $response;
             }

        }catch(Exception $s) {
            //trata uma exeção
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