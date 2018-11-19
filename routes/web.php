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

Route::get('/register', 'RegistrationController@create');
Route::get('activation/{key}', 'Auth\RegisterController@activation');

Route::post('/register', 'RegistrationController@store');



Route::get('/login', 'AuthController@login');
Route::get('/login', 'SessionsController@create');

Route::post('/login', 'SessionsController@store');


Route::get('/logout', 'SessionsController@destroy');
