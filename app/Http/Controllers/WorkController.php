<?php

namespace App\Http\Controllers;

use App\Teste\Pessoa;
use App\Teste\Usuario;
use Illuminate\Http\Request;

class WorkController 
{
    public function home(){
        return view("work.home");
    }
}
