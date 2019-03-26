<?php

use App\Http\Controllers\usuariosController;

Route::get('/', 'usersController@index')->name('home');
Route::get('/crear-usuario', 'usersController@crear')->name('crear-usuario');
Route::post('/crear-usuario', 'usersController@store')->name('crear-usuario-store');
Route::get('/usuario/{user}', 'usersController@details')->name('user-details');
Route::delete('/usuario/{user}', 'usersController@destroy')->name('user-destroy');
Route::get('/usuario/{user}/edit', 'usersController@edit')->name('user-details-edit');
Route::put('/usuario/{user}/edit', 'usersController@update')->name('user-details-update');