<?php
class Conexao {
    public function __construct(){
        //Ninject
    }
    public function conectar(){
        $server = "localhost";
        $user = "root";
        $password = "";
        $base = "sqlteste";
        $conexao = mysqli_connect($server, $user, $password, $base);
        if(!$conexao){
            $conexao = null;
        }
        return $conexao;
    }
}
?>