<?php

include "BASE/conexao.php";

class LoginRepository implements ILoginRepository {
    private $_conexao;
    //Construtor da classe
    public function __construct(){
        $this->_conexao = new Conexao();
    }

    public function Cadastrar($usuario){
        // Emplementar função de cadastro 
        return new Usuario();
    }

    public function Login($usuario){
        // Emplementar função de login
        return new Usuario();
    }
}


?>