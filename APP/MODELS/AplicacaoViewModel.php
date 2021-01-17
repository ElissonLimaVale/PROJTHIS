<?php

class AplicacaoViewModel{
    //Construtor injeta os dados
    public function __construct($id,$caminho,$nome,$descricao,$capa,$visualizacoes) {
        $this->id = $id; 
        $this->caminho = $caminho;
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->capa = $capa;
        $this->visualizacoes = $visualizacoes;
    }
    //atributos da aplicação
    public $id;

    public $caminho;

    public $nome;

    public $descricao;

    public $capa;

    public $visualizacoes;
}


?>