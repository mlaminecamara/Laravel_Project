<?php

use App\Http\Controllers\AdminController;

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
Route::get('/admin', 'AdminController@modify_settings')->middleware('admin');

Route::get('/add_teams', 'TeamsController@index')->middleware('admin');
Route::post('/add_teams', 'TeamsController@add');   
Route::get('/teams','TeamsController@display');
Route::get('/edit_teams/{id}','TeamsController@getId')->middleware('admin');
Route::post('/edit_teams/{id}','TeamsController@update');
Route::get('/delete_teams/{id}','TeamsController@removeId')->middleware('admin');
Route::post('/delete_teams','TeamsController@destroy');

Route::get('/add_players','PlayersController@index');
Route::post('/add_players','PlayersController@add');
Route::get('/players','PlayersController@display');
Route::get('/edit_players/{id}','PlayersController@getId');
Route::post('/edit_players/{id}','PlayersController@update');
Route::get('/delete_pleyers/{id}','PlayersController@removeId');
Route::post('/delete_teams/{id}','PlayersController@delete');
