<?php

interface ILoginAppService {
    // Métodos de interface
    public function Cadastrar($usuario, $email, $senha);

    public function Login($email, $senha);

}

?>