<?php

interface ILoginRepository {
    // Métodos de interface
    public function Cadastrar(UsuarioViewModel $usuario);

    public function Login(UsuarioViewModel $usuario);
}


?>