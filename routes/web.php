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
Route::get('/add','productController@add');
Route::post('add','productController@store')->name('productStore');

Route::get('/user','UserController@profile');
Route::post('/user/update_photo','UserController@photo')->name('userPhoto');

Route::post('/card','productController@card')->name('productCard');

Route::get('/basket','productController@basket');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
