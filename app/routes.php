<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'UserController@index');

Route::resource('users', 'UserController');
Route::post('users/{id}/update', 'users@update');
Route::get('users/{id}/delete', 'users@destroy');
Route::post('register', 'UserController@store');
Route::post('login', 'UserController@login');

Route::resource('tasks', 'TaskController');
Route::post('tasks/{id}/update', 'TaskController@update');

Route::post('tasks/{id}/cancelar', 'TaskController@cancelar');

Route::get('tasks/{id}/confirm', 'TaskController@deleteTask');
Route::post('tasks/{id}/delete', 'TaskController@destroy');
Route::post('savetasks', 'TaskController@store');
Route::get('mostrartasks', 'TaskController@index');
Route::post('modificarEstado','TaskController@updateStatus');

Route::get('error', function()
{
	return View::make('dashboard.error');
});

