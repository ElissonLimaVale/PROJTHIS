<?php
include "BASE/conexao.php";

class GlobalRepository implements IGlobalRepository {
    protected $_conexao;
    //Construtor
    public function __construct(){
        $this->_conexao = new Conexao();
    }
    // Método de busca
    public function search($string){
        $conexao = $this->_conexao->conectar() == null ? false: $this->_conexao->conectar();
        if(!$conexao){
            return "error conection";
        }else{
            $query = "select * from projeto where nome like '$string%'";
            $result = mysqli_query($conexao, $query);
            if($result == null){
                return "Nada encontrado!";
            }
            $array = mysqli_fetch_array($result);
        }
        if($array == null){
            return "Nada encontrado!";
        }else{
            return $array["email"];
        }
    }
}


?>