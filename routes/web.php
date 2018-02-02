<?php


Route::get('/', function () {
    return view('welcome');
});
// Rota para url '/editoras'
Route::get('/editoras', 'EditoraController@index');

// Rota para url 'editoras/1', por exemplo
Route::get('/editoras/{editora}', 'EditoraController@show');
