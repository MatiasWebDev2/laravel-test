<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LivrosController;
use Illuminate\Support\Facades\Route;

// HOME
Route::get('/', [HomeController::class,'index']);
Route::post('/', [HomeController::class, 'store']);

// WELCOME
Route::get('/welcome', function () {
    return view('welcome');
});

// LIVROS
Route::get('/livros', [LivrosController::class,'index']);
Route::post('/livros', [LivrosController::class,'store']);