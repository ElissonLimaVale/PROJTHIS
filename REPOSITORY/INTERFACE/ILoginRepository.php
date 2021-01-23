<?php

interface ILoginRepository {
    // Métodos de interface
    public function Cadastrar($usuario, $email, $senha);

    public function Login($email, $senha);
}


?>