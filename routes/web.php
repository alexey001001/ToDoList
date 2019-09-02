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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('tasks', 'TaskController', ['only' => ['index', 'show']]);

Route::post('store_task', 'TaskController@store');
//Route::get('show_task', 'TaskController@show');
Route::post('update_task', 'TaskController@update');
Route::post('delete_task', 'TaskController@destroy');


