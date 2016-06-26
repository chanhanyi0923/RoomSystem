<?php
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::resource('/state', 'StateController', [ 'except' => ['show'] ]);
Route::resource('/room', 'RoomController', [ 'except' => ['show'] ]);

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/', 'HomeController@index');

Route::get('/admin', 'AdminController@index');
