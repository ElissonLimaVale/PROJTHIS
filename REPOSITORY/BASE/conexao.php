<?php
include "Config.php";
include "Encrypt.php";
class Conexao {

    private $_config;
    private $_encypt;
    public function __construct(){
        $this->_config = new Config();
    }

    public function conectar(){
        $server = $this->_config->getHost();
        $user = $this->_config->getUsuario();
        $password = $this->_config->getSenha();
        $base = $this->_config->getBanco();
        $conexao = mysqli_connect($server, $user, $password, $base);
        
        if(!$conexao){
            $conexao = null;
        }
        return $conexao;
    }
}


?>