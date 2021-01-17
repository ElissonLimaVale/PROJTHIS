<?php 

class UsuarioViewModel {
    // Construtor com injeção dos dados
    public function __construct($id,$nome,$email,$senha,$celular,$github) {
        $this->id = $id; 
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->celular = $celular;
        $this->github = $github;
    }
    //atributos do usuario
    public $id;

    public $nome;

    public $email;

    public $senha;

    public $celular;

    public $github;
    
}


?>