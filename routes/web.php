<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
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

// responder a requisições HTTP GET
Route::get('/usuarios', [UsuarioController::class, 'index']);

//Rota para Criar Usuários
Route::post('/usuarios', [UsuarioController::class, 'store']);

//Rota para Exibir Detalhes do Usuário
Route::get('/usuarios/{id}', [UsuarioController::class, 'show']);

