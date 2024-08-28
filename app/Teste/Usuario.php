<?php

namespace App\Teste;

class Usuario extends Pessoa {
    private string $email;
    private string $senha;

    public function __construct(string $email, string $senha) {
        $this->email = $email;
        $this->senha = $senha;
        $this->idade = 18;
    }

    public function login(): string {
        return "$this->email, $this->senha";
    }
}