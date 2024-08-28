<?php

namespace App\Teste;

use function PHPUnit\Framework\stringStartsWith;

class Pessoa
{
    // Atributos
    protected string $nome;
    protected int $idade;


    //Métodos
    public function comprimentar(){
        return "Olá meu nome é ". $this->nome;
    }

    private function setNome(string $novoNome) {
        $this->nome = $novoNome;
    }

    public function validar(string $novoNome): string {
        if (strlen($novoNome) >= 5) {
            $this->setNome($novoNome);
            return "Nome alterado!";
        }

        return "Invalido, seu nome precisa ter mais que 5 letras";
    }
}
