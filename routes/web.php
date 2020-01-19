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


Route::middleware(['auth'])->group(function () {

    //Rotas Incidentes
    Route::get('/incidente', 'IncidentesController@index');
    Route::get('/incidente/novo', 'IncidentesController@novo');
    Route::get('/incidente/editar/{id}', 'IncidentesController@editar');
    Route::post('/incidente/salvar', 'IncidentesController@salvar');
    Route::put('/incidente/atualizar/{id}', 'IncidentesController@atualizar');
    Route::delete('/incidente/delete/{id}', 'IncidentesController@delete');

    //Rotas Home
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/', 'HomeController@index')->name('home');
});

// Rotas atenticação
Auth::routes();


