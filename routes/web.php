<?php

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

Route::get('/filial/lista', 'FilialController@index');
Route::get('/filial/cadastro', 'FilialController@formFilial');
Route::post('/filial/cadastro', 'FilialController@cadastrar');
Route::get('/estoque/lista', 'EstoqueController@index');
Route::get('/estoque/cadastro-produtos', 'EstoqueController@formEstoque');
Route::post('/estoque/cadastro-produtos', 'EstoqueController@cadastrar');
Route::get('/entrada/cadastro', 'EntradaController@formEntrada');
Route::post('/entrada/cadastro', 'EntradaController@cadastrar');
Route::get('/saida/lista', 'SaidaController@index');
Route::get('/saida/registrar', 'SaidaController@formSaida');
Route::post('/saida/registrar', 'SaidaController@registrar');