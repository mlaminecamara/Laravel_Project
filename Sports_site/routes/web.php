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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/bet','BetController@bet');
Route::get('/admin','AdminController@modify_settings');
Route::post('/admin','TeamsController@add');
Route::get('/teams','TeamsController@display');
Route::get('/edit_teams/{id?}','TeamsController@getId');
Route::post('/edit_teams','TeamsController@edit');