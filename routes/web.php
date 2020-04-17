<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [
	'uses' => 'TasksController@getTasks',
	'as' => 'getTasks'
]);

Route::get('edit/{id}', [
	'uses' => 'TasksController@editTaskView',
	'as' => 'editTaskView'
]);

Route::post('edit', [
	'uses' => 'TasksController@postEditTask',
	'as' => 'postEditTask'
]);

Route::get('delete/{id}', [
	'uses' => 'TasksController@getDeleteTask',
	'as' => 'getDeleteTask'
]);

Route::post('add', [
	'uses' => 'TasksController@postAddTask',
	'as' => 'postAddTask'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
