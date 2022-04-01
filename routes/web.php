<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\funcoes;


Route::get('/', [funcoes::class,"index"]);
Route::get('/cadastrar', [funcoes::class,"cadastrar"]);
Route::post('/enviar', [funcoes::class,"enviarparaobanco"]);
Route::get('/listar', [funcoes::class,"listar"]);

