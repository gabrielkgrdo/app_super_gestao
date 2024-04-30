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
/*
Route::get('/', function () {
    return "Hello Word!";
});
Route::get('/sobre-nos', function () {
    return "Sobre nós";
});

Route::get('/contato', function () {
    return "Contato";
});
*/

Route::get('/', 'PrincipalController@principal');

Route::get('/contato', 'ContatoController@contato');

Route::get('/sobre-nos', 'SobreNosController@sobre');

Route::get('/login', function(){return 'Login';});

Route::get('/clientes', function(){return 'clientes';});

Route::get('/fornecedores', function(){return 'fornecedores';});

Route::get('/produtos', function(){return 'produtos';});


