<?php

include "BASE/conexao.php";
include "../DOMAIN/BASE/Usuario.php";

class LoginRepository implements ILoginRepository {
    private $_conexao;
    //Construtor da classe
    public function __construct(){
        $this->_conexao = new Conexao();
    }

    public function Cadastrar(Usuario $usuario){
        // Emplementar função de cadastro 
        return new Usuario();
    }

    public function Login(Usuario $usuario){
        // Emplementar função de login
        return new Usuario();
    }
}


?>