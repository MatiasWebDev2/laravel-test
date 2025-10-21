<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LivrosController;
use Illuminate\Support\Facades\Route;

// HOME
Route::get('/', [HomeController::class,'index']);
Route::post('/', [HomeController::class, 'store']);
Route::get('/{post}/edit', [HomeController::class,'edit']);
Route::put('/{post}', [HomeController::class,'update']);
Route::delete('/{post}', [HomeController::class,'destroy']);

// WELCOME
Route::get('/welcome', function () {
    return view('welcome');
});

// LIVROS
Route::get('/livros', [LivrosController::class,'index']);
Route::post('/livros', [LivrosController::class,'store']);
Route::get('/{livro}/edit', [LivrosController::class,'edit']);
Route::put('/livros/{livro}', [LivrosController::class,'update']);
Route::delete('/livros/{livro}', [LivrosController::class,'destroy']);