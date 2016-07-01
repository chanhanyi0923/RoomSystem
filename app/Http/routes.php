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

Route::get('/room_log/{search?}/{id?}', 'AdminController@roomLog');
Route::put('/manage_user/{id}', 'AdminController@manageUserUpdate');
Route::get('/manage_user', 'AdminController@manageUser');
