<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $nome = "Damien";
    $idade = 21;
    $array = [1,2,3,4,5];
    $nomes = ["Calicio", "Evandro", "Claudia"];
    return view('welcome', ["nome" => $nome, 
                            "idade" => $idade,
                            "profissao" => "programador",
                            "array" => $array,
                            "nomes" => $nomes]);
});

Route::get('/contact', function () {
    return view('contact');
});