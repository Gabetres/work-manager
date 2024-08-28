<?php

namespace App\Http\Controllers;

use App\Teste\Pessoa;
use App\Teste\Usuario;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function show(){
        $trabalhos = [
            "Trabalho 1",
            "Trabalho 2",
            "Trabalho 3",
            "Trabalho 4",
            "Trabalho 5"
        ];

        return view("work.show", [
            "works" => $trabalhos
        ]);
    }

    public function create(){
        return "cria usuario";
    }

    public function edit(){
        return "cria usuario";
    }

}
