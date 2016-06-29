<?php
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::auth();
Route::resource('/bed', 'BedController', [ 'except' => ['show'] ]);
Route::resource('/state', 'StateController', [ 'except' => ['show'] ]);
Route::resource('/room', 'RoomController', [ 'except' => ['show'] ]);
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/admin/{search?}/{id?}', 'AdminController@index');
