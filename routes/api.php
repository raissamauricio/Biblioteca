<?php

use App\Http\Controllers\AutorController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\MembrosController;
use App\Models\Livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/autor', [AutorController::class,'store']);
Route::get('/autor', [AutorController::class, 'index']);
Route::post('/livro', [LivroController::class,'store']);
Route::get('/livro', [LivroController::class, 'index']);
Route::post('/membro', [MembrosController::class,'store']);
Route::get('/membro', [MembrosController::class, 'index']);
