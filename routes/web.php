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

Route::get('/about', function(){
	return view ('about');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/register', 'RegistrationController@create');

Route::get('activation/{key}', 'Auth\RegisterController@activation');
Route::post('/register', 'RegistrationController@store');
Route::get('/purchase', 'PurchaseController@index');
Route::post('/purchase', 'PurchaseController@insert');
Route::get('/showpurchases', 'ProductSupplierController@show');





Route::get('/login', 'SessionsController@create')->name('login');;

Route::post('/login', 'SessionsController@store');

Route::get('/logout', 'SessionsController@destroy');

Route::get('/order', 'OrderController@Order');
Route::get('/editmeal', 'OrderController@showedit');
Route::post('/editmeal', 'OrderController@edit');

Route::get('/createorder', 'OrderController@index');
Route::post('/createorder', 'OrderController@insert');

Route::get('/users', 'UsersController@index');
