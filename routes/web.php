<?php

use App\Http\Controllers\usuariosController;

Route::get('/', 'usersController@index')->name('home');
Route::get('/crear-usuario', 'usersController@crear')->name('crear-usuario');
Route::get('/usuario', 'usersController@details')->name('user-details');