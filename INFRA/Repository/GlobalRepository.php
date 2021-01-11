<?php
include "../BASE/conexao.php";
include "../INTERFACE/IGlobalRepository.php";
class GlobalRepository implements IGlobalRepository {
    protected $_conexao;
    //Construtor
    public function __construct(){
        $this->_conexao = new Conexao();
    }

    public function search($string){
        $conexao = $this->_conexao->conectar();
        $query = "select * from teste where nome like '$search%'";
        $result = mysqli_query($conexao, $query);
        $array = mysqli_fetch_array($result);
    
        if($array == null){
            return "nada encontrado!";
        }else{
            return $array["email"];
        }
    }
}
?>