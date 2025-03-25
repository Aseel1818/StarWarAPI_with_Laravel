<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SwapiController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/people', [SwapiController::class, 'getPeople']);
Route::get('/planets', [SwapiController::class, 'getPlanets']);
