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

Route::get('create','IncidentController@create');
Route::Post('store','IncidentController@store');
Route::get('index','IncidentController@index');
Route::get('{id}/edit','IncidentController@edit');
Route::Post('{id}/update','IncidentController@update');
Route::get('{id}/destroy','IncidentController@destroy');

/*Route::post('Incidents','IncidentController');
Route::resource('incidents', 'PostController');
Route::get('Incidents','IncidentController');*/