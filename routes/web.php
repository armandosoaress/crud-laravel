<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\funcoes;


Route::get('/', [funcoes::class,"listar"]);
Route::get('/cadastrar', [funcoes::class,"cadastrar"]);
Route::post('/enviar', [funcoes::class,"enviarparaobanco"]);
Route::get('/listar', [funcoes::class,"listar"]);
Route::get('/editar/{id}', [funcoes::class,"editar"]);
Route::put('/update/{id}', [funcoes::class,"update"]);
Route::delete('/deletar/{id}', [funcoes::class,"destroy"]);

