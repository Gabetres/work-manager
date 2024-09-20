<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkController 
{
    public function home(){
        $works = Work::with('customer')->get();

        $data = Carbon::now('America/Sao_paulo')->format('Y-m-d');

        return view("work.home", [
            "works" => $works,
            "now" => $data
        ]);
    }

    //TODO: Create, Update, Delete
}
