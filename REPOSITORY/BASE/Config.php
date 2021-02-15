<?php
    
class Config {
    //atributos de configuração da aplicação
    public function __construct(){
        $this->dominio = "localhost";
        $this->usuario = "root";
        $this->senha = "";
        $this->banco = "projthis";
        $this->conf_hash = 'c1isvFdxMDdmjOlvxpecFw';
    }

    private $dominio;
    private $usuario;
    private $senha;
    private $banco;
    private $confi_hash;


    public function getConfigHash(){
        return $this->confi_hash;
    }

    public function getHost(){
        return $this->dominio;
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function getBanco(){
        return $this->banco;
    }
}
