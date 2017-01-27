<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'SingleController@index');

Route::group(['prefix' => 'servicos'], function (){

    Route::get('/', 'ServicosController@index');

});

Route::group(['prefix' => 'portifolio'], function () {

    Route::get('/', 'PortifolioController@index');

});

Route::group(['prefix' => 'quemsomos'], function () {

    Route::get('/', 'QuemSomosController@index');

});

Auth::routes();

Route::group(['prefix' => 'painel'], function () {

    Route::get('/', 'PainelController@index');

    Route::get('/perfil', 'PerfilController@index');
    Route::post('/perfil/update/{id}', 'PerfilController@update');

    Route::get('/post', 'PostController@index');

    Route::get('/user', 'UserController@index');

});