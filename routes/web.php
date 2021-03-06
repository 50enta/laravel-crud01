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

Route::group(["prefix" => "/"], function() {
  
    Route::get("/", "EventoController@listar");
    
    Route::get("/registar", "EventoController@registar");
    
    Route::post("/submeter", "EventoController@submeter");
    
    Route::get("/remover/{id}", "EventoController@remover");

    Route::get('likar/{id}', 'EventoController@likar');
}
);
