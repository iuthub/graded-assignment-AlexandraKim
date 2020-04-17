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
	'as' => 'editTaskView',
	'middleware' => 'auth'
]);

Route::post('edit', [
	'uses' => 'TasksController@postEditTask',
	'as' => 'postEditTask',
	'middleware' => 'auth'
]);

Route::get('delete/{id}', [
	'uses' => 'TasksController@getDeleteTask',
	'as' => 'getDeleteTask',
	'middleware' => 'auth'
]);

Route::post('add', [
	'uses' => 'TasksController@postAddTask',
	'as' => 'postAddTask',
	'middleware' => 'auth'
]);

Route::post('done', [
	'uses' => 'TasksController@markAsDone',
	'as' => 'markAsDone',
	'middleware' => 'auth'
]);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
