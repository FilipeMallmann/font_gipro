<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'MainController@index');
Route::get('/admin', 'MainController@admin');
Route::get('/home', 'MainController@home');
    Route::patch('/home/save', 'MainController@post_trello');


Route::get('/cliente/{id}/protocolar', 'ClientesController@protocolar'); //rota alternativa para testar o padrão de cilente/ID/ação


Route::get('protocolos/create/{cli}', 'ProtocolosController@novo');
Route::get('contratos/create/{cli}', 'ContratosController@novo');
Route::get('iniciais/montar', 'IniciaisController@montar');
Route::get('iniciais/montar-inicial/{cli}', 'IniciaisController@montar_inicial');
Route::get('iniciais/montar-meio/{cli}', 'IniciaisController@montar_meio');
Route::get('iniciais/template', 'IniciaisController@getDownload');


Route::get('iniciais/montar/son/{jvar}/{jdata}', 'IniciaisController@atualizar_ini');
Route::get('iniciais/montar/odt/{jvar}', 'IniciaisController@criar_odt');
Route::get('iniciais/montar/doc/{jvar}', 'IniciaisController@criar_doc');
Route::get('trello/{cli}', 'MainController@carregar_trello');



Route::resource('cliente', 'ClientesController'); //
Route::resource('protocolos', 'ProtocolosController', ['except' => ['create']]);
Route::resource('contratos', 'ContratosController', ['except' => ['create']]);
Route::resource('iniciais', 'IniciaisController');



Route::controllers([
   'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);