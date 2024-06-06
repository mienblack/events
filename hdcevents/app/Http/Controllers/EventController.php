<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $nome = "Damien";
        $idade = 21;
        $array = [1,2,3,4,5];
        $nomes = ["Calicio", "Evandro", "Claudia"];
        return view('welcome', ["nome" => $nome, 
                                "idade" => $idade,
                                "profissao" => "programador",
                                "array" => $array,
                                "nomes" => $nomes]);
    }

    public function create() {
        return view('events.create');
    }
}
