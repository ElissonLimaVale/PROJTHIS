<?php
include "../CONFIG/Config.php";

class Encrypt {
    private $_config;
    //Construtor
    public function __construct(){
        $this->_config = new Config();
    }
    //Gera o Hash de uma senha
    public function GetHash($senha){
        $pepper = $this->_config->getConfigHash();// $pepper configuração do hash

        $pwd_peppered = hash_hmac("sha256",$senha, $pepper);//preparação do hash
        // Gera o hash
        $pwd_hash = password_hash($pwd_peppered, PASSWORD_BCRYPT);

        return $pwd_hash; //retorna o hash da senha
    }

    // Valida uma senha com o Hash
    public function PwdValidate($senha, $hash){
        $response = true;
        $pepper = $this->_config->getConfigHash();// $pepper configuração do hash

        $pwd_peppered = hash_hmac("sha256",$senha, $pepper);//preparação do hash
        // Verifica a compatibilidade da senha com o hash
        if(!password_verify($pwd_peppered, $hash)){
            $response = false;
        }
        return $response;
    }
}



?>