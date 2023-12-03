<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Rutas del modulo Personas

Route::get('/personas', 'PersonaController@index');

Route::get('/personas/{cod_persona}', 'PersonaController@GetPersona');

Route::get('/productos', [ProductoController::class, 'index']);

Route::post('/insertar-producto', [ProductoController::class, 'insertarProducto']);
