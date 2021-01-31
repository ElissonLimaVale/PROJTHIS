<?php
    
class Config {
    //atributos de configuração da aplicação
    public function __construct(){
        $this->dominio = "http://projthis.online";
        $this->conf_hash = 'c1isvFdxMDdmjOlvxpecFw';
    }
    private $dominio;

    private $confi_hash;

    public function getConfigHash(){
        return $this->confi_hash;
    }

    public function getDominio(){
        return $this->dominio;
    }
}

?>