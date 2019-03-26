<?php

use App\Http\Controllers\usuariosController;

Route::get('/', 'usersController@index')->name('home');
Route::get('/crear-usuario', 'usersController@crear')->name('crear-usuario');
Route::post('/crear-usuario', 'usersController@store')->name('crear-usuario-store');
Route::get('/usuario', 'usersController@details')->name('user-details');