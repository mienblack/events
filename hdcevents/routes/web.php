<?php

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

Route::get('/contatos', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    $busca = request('search');

    return view('products', ['busca' => $busca]);
});

Route::get('/produtos/{id}', function ($id = null) {
    return view('product', ["id" => $id]);
});