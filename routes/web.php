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

//Route::get('/', function () {
 //   return view('welcome');
//});

Route::get('/','FrontendController@index');
Route::get('add','FrontendController@add');
Route::post('/insert-data','FrontendController@insert');

Route::get('edit/{id}','FrontendController@edit');
Route::get('update-data/{id}','FrontendController@update');
Route::get('delete/{id}','FrontendController@remove');
Route::get('register','FrontendController@register')->middleware('alreadyloggedIn');
Route::post('/detail-data','FrontendController@detail');

Route:: get('admin','FrontendController@admin')->middleware('alreadyloggedIn');
Route::post('/login-data','FrontendController@logindata');
Route:: get('/dashboard','FrontendController@dashboard')->middleware('isloggedIn');
Route::get('logout','FrontendController@logout');