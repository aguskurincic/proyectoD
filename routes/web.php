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
use App\User;
Route::get('/', function () {
  $usuarios = User::all();
dd($usuarios);
  return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');