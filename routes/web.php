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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/messages', 'App\Http\Controllers\MessageController@index');
Route::get('/messages/create', 'App\Http\Controllers\MessageController@create');
Route::post('/messages', 'App\Http\Controllers\MessageController@store');
Route::get('/messages/edit/{id}', 'App\Http\Controllers\MessageController@edit');
Route::post('/messages/{id}', 'App\Http\Controllers\MessageController@update');
Route::post('/messages/delete/{id}', 'App\Http\Controllers\MessageController@destroy');
